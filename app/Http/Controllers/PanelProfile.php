<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class PanelProfile extends Controller
{
    public function Login(Request $request)
    {
        $AdminData = DB::table('admin_login')->where(['email' => $request->email])->first();
        if (!$AdminData || !Hash::check($request->pswd, $AdminData->password)) {
            echo "Login Failed";
        } else {
            $request->session()->put('AdminProfile', json_decode(json_encode($AdminData), true));
            return redirect('admin/upload-product');
        }
    }
}
