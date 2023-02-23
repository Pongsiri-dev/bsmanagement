<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

use Illuminate\Support\Facades\Storage;

use App\Models\User;
use App\Models\Events;
use SimpleSoftwareIO\QrCode\Generator;


class EventController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('admin.event', compact('users'));
    }
    public function eventList()
    {
        $events = Events::all();
        return view('admin.eventlist', compact('events'));
    }
    public function eventView($id)
    {
        $eventview = Events::where('id', '=', $id)->firstOrFail();
        // dd($eventview);
        // $eventview = DB::table('events')->where('id', $id)->first();
        return view('admin.eventview', compact('eventview'));
    }

    // บันทึกข้อมูล
    public function store(Request $request)
    {

        $event = new Events;
        $event->event_name = $request->event_name;
        $event->event_description = $request->event_description;
        $event->event_venue = $request->event_venue;
        $event->event_assign = $request->event_assign;
        $event->event_path = null;
        $event->event_sdate = $request->event_sdate;
        $event->event_edate = $request->event_edate;
        $event->event_author = Auth::user()->name;

        // exec query
        $event->save();
        $pathQR = 'QrCode/' . $event->event_name . '_' . $event->id . '.svg';
        QrCode::format('svg')->generate('https://www.bsmanagement.info/checkin/' . $event->id, public_path('QrCode/' . $event->event_name . '_' . $event->id . '.svg'));

        //exec update statement
        DB::table('events')
            ->where('id', $event->id)
            ->update(['event_path' => $pathQR]);
        return redirect()->back()->with('success', 'สร้างอีเว้นท์เรียบร้อย');
    }
}