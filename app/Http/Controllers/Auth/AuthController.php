<?php
/**
 * Created by PhpStorm.
 * User: pvt
 * Date: 9/6/17
 * Time: 10:41 PM
 */

namespace App\Http\Controllers\Auth;


use App\Http\Controllers\Controller;

class AuthController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
}