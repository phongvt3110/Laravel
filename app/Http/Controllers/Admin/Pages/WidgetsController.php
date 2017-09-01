<?php
/**
 * Created by PhpStorm.
 * User: pvt
 * Date: 9/2/17
 * Time: 12:28 AM
 */

namespace App\Http\Controllers\Admin\Pages;


use App\Http\Controllers\Controller;

class WidgetsController extends Controller
{
    public function widgets() {
        $data = ['mobile' => [
            'iphone',
            'Samsung'
        ]
        ];
        return view('admin.pages.widgets',['data' => isset($data) ? $data : null]);
    }
}