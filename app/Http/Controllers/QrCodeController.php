<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use SimpleSoftwareIO\QrCode\Generator;

class QrCodeController extends Controller
{
    public function index()
    {
        $qrC = new Generator;
        $qrC->size(200)->generate('OK');
        // return view('qrcode', compact('qrC'));
    }
}