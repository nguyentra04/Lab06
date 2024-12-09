<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NHT_sessionController extends Controller
{
    //đọc dữ liệu từ session
    public function NHTgetsession(Request $request)
    {
        if($request ->session()->has("K23CNT2_NguyenHuongTra")){
            echo $requset->sesson()->get("K23CNT2_NguyenHuongTra");
        }
        else{
            echo "Khong co session";
        }
    }
    //ghi dữ liệu vào session 
    public function NHTstoresession(Request $request)
    {
        $request->session()->put("K23CNT2_NguyenHuongTra","Nguyen Huong Tra");
        echo "Da ghi vao session";
    }
    //xoa dữ liệu trong session
    public function NHTdeletesession(Request $request)
    {
        $request->session()->forget("K23CNT2_NguyenHuongTra");
        echo "Da xoa session";
    }
}
