<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;




class Profile extends Controller
{
    public function Login(Request $request)
    {

        $UserData = User::where(['email' => $request->email])->first();
        if (!$UserData || !Hash::check($request->pswd, $UserData->password)) {
            return back()->with('success', 'Item created successfully!');
        } else {
            $request->session()->put('profile', json_decode($UserData, true));
            return redirect('/');
        }
    }

    public function Registration()
    {
        echo "reached";
    }

    public function Logout()
    {
        Session::flush();
        Auth::logout();
        return redirect('user-login');
    }
}
