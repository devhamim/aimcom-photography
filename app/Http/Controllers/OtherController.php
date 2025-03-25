<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Setting;

class OtherController extends Controller
{
    //product_photography
    function product_photography(){
        $setting = setting::all();
        return view('frontend.other.protography',[
            'setting'=>$setting,
        ]);
    }
    //realestate_photography
    function realestate_photography(){
        $setting = setting::all();
        return view('frontend.other.realestate',[
            'setting'=>$setting,
        ]);
    }
    //fashion_photography
    function fashion_photography(){
        $setting = setting::all();
        return view('frontend.other.fashion',[
            'setting'=>$setting,
        ]);
    }
}
