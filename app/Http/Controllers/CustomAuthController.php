<?php

namespace App\Http\Controllers;

use App\Http\Controllers\BaseController;
use Illuminate\Http\Request;
use Hash;
use Session;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class CustomAuthController extends BaseController
{

    public function index()
    {
        // dd("OK");
        // return view('auth.login');
    }

    public function customLogin(Request $request)
    {
        $credentials = request()->only(['member_code', 'password']);
        if (!Auth::validate($credentials)) {
            $user = User::where('member_code', $credentials['member_code'])->first();
            return response()->json(['status' => 'ok']);
            // abort(401);
            // return $this->sendError('Unauthorised.', ['error' => 'Unauthorised']);
        } else {

            $user = User::where('member_code', $credentials['member_code'])->first();
            $token = $user->createToken();
            return response()->json(['status' => 'ok']);

        }
    }



    public function registration()
    {
        return view('auth.registration');
    }


    public function customRegistration(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
        ]);

        $data = $request->all();
        $check = $this->create($data);

        return redirect("dashboard")->withSuccess('You have signed-in');
    }


    public function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password'])
        ]);
    }


    public function dashboard()
    {
        if (Auth::check()) {
            return view('dashboard');
        }

        return redirect("login")->withSuccess('You are not allowed to access');
    }


    public function signOut()
    {
        Session::flush();
        Auth::logout();

        return Redirect('login');
    }
}