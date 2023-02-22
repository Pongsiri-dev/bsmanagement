<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class QRLoginTwoController extends Controller
{
    public function qrtesting()
    {
        return view('qrlogin.qrtesting');
    }
    public function qrscanner2()
    {
        if (Auth::check()) {
            $login = true;

            return view('qrlogin.qrscanner2', compact('login'));
        }
        return redirect()->route('home');
    }
    public function loginWS(Request $request)
    {
        $key = $request['key'];
        if (empty($key)) {

            $return = array(
                'status' => 2,
                'msg' => 'key not provided'
            );
            return response()->json($return, 200);
        }

        $userid = UnHashUserID($key);
        try {
            $user = Auth::loginUsingId($userid, true);
            $return = array(
                'status' => 1,
                'msg' => 'success',
                'jwt' => 1,
                'user' => $user
            );
            return response()->json($return, 200);
        } catch (Exception $exception) {

            return response()->json([
                'status' => 2,
                'success' => false,
                'message' => 'Some Error occured',
                'error' => $exception->getMessage(),
                'response_code' => 200,

            ], 200);
        }

    }

}
?>