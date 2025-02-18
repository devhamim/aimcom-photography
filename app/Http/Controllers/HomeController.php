<?php

namespace App\Http\Controllers;

use App\Models\ContectMessage;
use App\Models\Order;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function dashboard()
    {
        $total_user = User::count();
        return view('backend.dashboard',[
            'total_user'=>$total_user,
        ]);
    }

    public function message_index()
    {
        $contectMessage = ContectMessage::all();
        return view('backend.contectmessage',[
            'contectMessage'=>$contectMessage,
        ]);
    }
    public function message_destroy($id)
    {
        ContectMessage::find($id)->delete();
        return back()->with('warning', 'Delete Successfully');
    }

}
