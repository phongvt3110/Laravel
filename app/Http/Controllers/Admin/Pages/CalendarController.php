<?php
/**
 * Created by PhpStorm.
 * User: pvt
 * Date: 9/2/17
 * Time: 12:37 AM
 */

namespace App\Http\Controllers\Admin\Pages;


use App\Http\Controllers\Controller;

class CalendarController extends Controller
{
    public function calendar() {
        $data = ['mobile' => [
            'iphone',
            'Samsung'
        ]
        ];
        return view('admin.pages.calendar',['data' => isset($data) ? $data : null]);
    }
}