<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Illuminate\Support\Facades\Session;


class Profile extends Controller
{
    public function Login(Request $request)
    {

        $UserData = User::where(['email' => $request->email])->first();
        if (!$UserData || !Hash::check($request->pswd, $UserData->password)) {
            echo "Failed";
        } else {
            $request->session()->put('profile', $UserData);
            return redirect('/');
        }
    }
}
