<?php
/**
 * Created by PhpStorm.
 * User: phongvt
 * Date: 9/1/17
 * Time: 11:11 AM
 */

namespace App\Http\Controllers\Admin;


use App\Http\Controllers\Controller;

class AdminController extends Controller
{
    public function index() {
        $data = ['mobile' => [
            'iphone',
            'Samsung'
        ]
        ];
        return view('admin/index',['data' => isset($data) ? $data : null]);
    }
}