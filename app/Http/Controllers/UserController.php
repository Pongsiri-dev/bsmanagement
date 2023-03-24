<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;

class UserController extends Controller
{
    public function index()
    {
        return view('admin.users');
    }
    public function scancode()
    {
        return view('profile.scancode');
    }
    public function childList()
    {
        $apiURL = 'https://web.bartersmart.co.th/index.php/Api_m/main/getChild';
        $headers = [
            'SecretID' => '0e900b35ce9d147442aa7bf0ff25e731f8f28235',
            'Content-Type' => 'application/json',
            'Session' => Auth::user()->session
        ];
        $response = Http::withHeaders($headers)->post($apiURL);
        $responseBody = json_decode($response->getBody(), true);
        return view('profile.c');
    }
}