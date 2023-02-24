<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Env;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;

class SearchController extends Controller
{
    //
    public function index()
    {
        return view('admin.search');
    }

    public function findData(Request $request)
    {
        $apiURL = 'https://web.bartersmart.co.th/index.php/Api_m/main/findMember';
        $postInput = [
            'member_code' => $request->search
        ];
        $headers = [
            'SecretID' => '0e900b35ce9d147442aa7bf0ff25e731f8f28235',
            'Content-Type' => 'application/json',
            'Session' => Auth::user()->session
        ];
        $response = Http::withHeaders($headers)->post($apiURL, $postInput);
        $responseBody = json_decode($response->getBody(), true);
        if (array_key_exists('result', $responseBody)) {
            $data = $responseBody['result'];
        } else {
            $data = null;
        }

        // dd($data['name']);
        return view('admin.search', compact('data'));
    }
}