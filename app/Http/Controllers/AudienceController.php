<?php

namespace App\Http\Controllers;

use App\Models\Events;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AudienceController extends Controller
{
    public function index()
    {
        $events = DB::table('events')->get();
        return view('admin.audience', compact('events'));
    }
    public function searchAudience($eid)
    {
        $event = DB::table('events')
            ->where("id", "=", $eid)
            ->get();

        $ad = DB::table('check_in_events')
            ->where('event_id', '=', $eid)
            ->get();

        // dd($ad);

        return view('admin.audiencedetail', compact(['event', 'ad']));
    }
}