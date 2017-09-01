<?php
/**
 * Created by PhpStorm.
 * User: phongvt
 * Date: 7/18/17
 * Time: 1:57 PM
 */

namespace App\Http\Controllers;


class PagesControllers extends Controller
{
    public function about(){
        return view('pages.about');
    }
    public function contact(){
        return view('pages.contact');
    }
}