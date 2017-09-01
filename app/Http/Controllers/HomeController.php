<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = ['name' => Auth::user()->getAuthIdentifier()];
        return view('home',['data' => isset($data) ? $data : null]);
    }
    public function showwelcome(){
        $data = [
            'id' => Auth::user()->id,
            'name' => Auth::user()->name,
            'email' => Auth::user()->email,
            'password' => Auth::user()->getAuthPassword()
        ];
        return view('frontend/showwelcome',['data' => isset($data) ? $data : null]);
    }
    public function showdetails($name,$email){
        $data = [
            'id' => Auth::user()->id,
            'name' => Auth::user()->name,
            'email' => Auth::user()->email,
            'password' => Auth::user()->getAuthPassword(),
            'detailname' => $name,
            'detailemail' => $email
        ];
        return view('frontend/showdetails',['data' => isset($data) ? $data : null]);
    }
}
