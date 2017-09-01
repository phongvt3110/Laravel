<?php
/**
 * Created by PhpStorm.
 * User: phongvt
 * Date: 9/1/17
 * Time: 11:11 AM
 */

namespace App\Http\Controllers\Frontend;


use App\Http\Controllers\Controller;

class FrontendController extends Controller
{
    public function index() {
        $data = ['mobile' => [
            'iphone',
            'Samsung'
        ]
        ];
        return view('eshopper/index',['data' => isset($data) ? $data : null]);
    }
    public function blog() {
        $data = ['mobile' => [
            'iphone',
            'Samsung'
        ]
        ];
        return view('eshopper/blog',['data' => isset($data) ? $data : null]);
    }
    public function blog_single() {
        $data = ['mobile' => [
            'iphone',
            'Samsung'
        ]
        ];
        return view('eshopper/blog_single',['data' => isset($data) ? $data : null]);
    }
    public function cart() {
        $data = ['mobile' => [
            'iphone',
            'Samsung'
        ]
        ];
        return view('eshopper/cart',['data' => isset($data) ? $data : null]);
    }
    public function checkout() {
        $data = ['mobile' => [
            'iphone',
            'Samsung'
        ]
        ];
        return view('eshopper/checkout',['data' => isset($data) ? $data : null]);
    }
    public function contact_us() {
        $data = ['mobile' => [
            'iphone',
            'Samsung'
        ]
        ];
        return view('eshopper/contact_us',['data' => isset($data) ? $data : null]);
    }
    public function error404() {
        $data = ['mobile' => [
            'iphone',
            'Samsung'
        ]
        ];
        return view('eshopper/error404',['data' => isset($data) ? $data : null]);
    }
    public function login() {
        $data = ['mobile' => [
            'iphone',
            'Samsung'
        ]
        ];
        return view('eshopper/login',['data' => isset($data) ? $data : null]);
    }
    public function product_details() {
        $data = ['mobile' => [
            'iphone',
            'Samsung'
        ]
        ];
        return view('eshopper/product_details',['data' => isset($data) ? $data : null]);
    }
    public function shop() {
        $data = ['mobile' => [
            'iphone',
            'Samsung'
        ]
        ];
        return view('eshopper/shop',['data' => isset($data) ? $data : null]);
    }
    public function test() {
        $data = ['mobile' => [
            'iphone',
            'Samsung'
        ]
        ];
        return view('test',['data' => isset($data) ? $data : null]);
    }
}