<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NHT_accountController extends Controller
{
    //form dang nhap 
    public function NHTlogin()
    {
        return view('Login');
    }

    //xu ly dang nhap
    //kiem tra dang nhap
    //nếu email = "nguyentra8704@gmai.com" va password = "123456" thi dang nhap thanh cong lưu thông tin vào session
    public function NHTloginsubmit(Request $request)
    {
        //validation
        //checklogin->storesession->redirect
        $username = $request->username;
        $password = $request->password;
        if ($username == "Nguyen Huong Tra" && $password == "123456") {
            return redirect()->route('NHT_home');
        } else {
            return redirect()->route('NHT_login');
        }
    }
}
