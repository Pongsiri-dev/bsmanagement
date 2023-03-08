<?php

namespace App\Http\Controllers;

use App\Models\CheckInEvent;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;
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
        return view('admin.eventview', compact('eventview'));
    }

    public function addaudienceview(Request $request)
    {
        $eList = Events::all();
        return view('admin.addaudience', compact('eList'));
    }

    public function addaudience(Request $request)
    {
        $checkIn = new CheckInEvent;
        //find event
        $data = Events::where("id", "=", $request->event_id)->firstOrFail();
        if ($data != null) {
            $checkIn->event_id = $data->id;
            $checkIn->event_name = $data->event_name;
            $checkIn->member_code = 0;
            $checkIn->member_firstname = $request->firstname;
            $checkIn->member_lastname = $request->lastname;
            $checkIn->member_telephone = $request->phone;
            $checkIn->member_career = $request->career;
        } else {
            return redirect()->back()->with('warning', 'ไม่สามารถลงทะเบียนได้');
        }
        $checkIn->save();
        return redirect()->back()->with('success', 'ลงทะเบียนเข้าร่วมงานเรียบร้อย');
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
        QrCode::format('svg')->generate('www.bsmanagement.info/checkin/' . $event->id, public_path('QrCode/' . $event->event_name . '_' . $event->id . '.svg'));

        //exec update statement
        DB::table('events')
            ->where('id', $event->id)
            ->update(['event_path' => $pathQR]);
        return redirect()->back()->with('success', 'สร้างอีเว้นท์เรียบร้อย');
    }

    public function checkIn(Request $request)
    {
        $checkIn = new CheckInEvent;
        if ($request->member_code != null) {

            $apiURL = 'https://web.bartersmart.co.th/index.php/Api_m/main/findMember';
            $postInput = [
                'member_code' => $request->member_code
            ];
            $headers = [
                'SecretID' => '0e900b35ce9d147442aa7bf0ff25e731f8f28235',
                'Content-Type' => 'application/json',
                'Session' => 'c5023b48b094018b11611249579fa339fc744c1d'
            ];
            $response = Http::withHeaders($headers)->post($apiURL, $postInput);
            $responseBody = json_decode($response->getBody(), true);
            if ($responseBody != null) {
                if (array_key_exists('result', $responseBody)) {
                    $data = $responseBody['result'];
                    $checkIn->event_id = $request->event_id;
                    $checkIn->event_name = $request->event_name;
                    $checkIn->member_code = $data['member']['member_code'];
                    $checkIn->member_firstname = $data['member']['name'];
                    $checkIn->member_lastname = $data['member']['lastname'];
                    $checkIn->member_telephone = $data['member']['telephone'];

                    $chk = DB::table('check_in_events')
                        ->where('event_id', '=', $checkIn->event_id)
                        ->where('member_code', '=', $checkIn->member_code)->first();
                    if ($chk != null) {
                        return redirect()->back()->with('warning', 'ไม่สามารถลงทะเบียนซ้ำได้ กรุณาติดต่อเจ้าหน้าที่');
                    } else {
                        $checkIn->save();
                    }
                }
                return redirect()->back()->with('success', 'ลงทะเบียนเข้าร่วมงานเรียบร้อย');
            } else {
                return redirect()->back()->with('warning', 'ไม่พบข้อมูล กรุณาติดต่อเจ้าหน้าที่');
            }
        }
    }
}