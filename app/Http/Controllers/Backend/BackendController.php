<?php
/**
 * Created by PhpStorm.
 * User: phongvt
 * Date: 9/1/17
 * Time: 11:10 AM
 */

namespace App\Http\Controllers\Backend;


use App\Http\Controllers\Controller;

class BackendController extends Controller
{
    public function index() {
        $data = ['mobile' => [
            'iphone',
            'Samsung'
        ]
        ];
        return view('backend/index',['data' => isset($data) ? $data : null]);
    }
    public function basic_table() {
        $data = ['mobile' => [
            'iphone',
            'Samsung'
        ]
        ];
        return view('backend/basic_table',['data' => isset($data) ? $data : null]);
    }
    public function blank() {
        $data = ['mobile' => [
            'iphone',
            'Samsung'
        ]
        ];
        return view('backend/blank',['data' => isset($data) ? $data : null]);
    }
    public function buttons() {
        $data = ['mobile' => [
            'iphone',
            'Samsung'
        ]
        ];
        return view('backend/buttons',['data' => isset($data) ? $data : null]);
    }
    public function chart_chartjs() {
        $data = ['mobile' => [
            'iphone',
            'Samsung'
        ]
        ];
        return view('backend/chart_chartjs',['data' => isset($data) ? $data : null]);
    }
    public function error404() {
        $data = ['mobile' => [
            'iphone',
            'Samsung'
        ]
        ];
        return view('backend/error404',['data' => isset($data) ? $data : null]);
    }
    public function form_component() {
        $data = ['mobile' => [
            'iphone',
            'Samsung'
        ]
        ];
        return view('backend/form_component',['data' => isset($data) ? $data : null]);
    }
    public function form_validation() {
        $data = ['mobile' => [
            'iphone',
            'Samsung'
        ]
        ];
        return view('backend/form_validation',['data' => isset($data) ? $data : null]);
    }
    public function general() {
        $data = ['mobile' => [
            'iphone',
            'Samsung'
        ]
        ];
        return view('backend/general',['data' => isset($data) ? $data : null]);
    }
    public function grids() {
        $data = ['mobile' => [
            'iphone',
            'Samsung'
        ]
        ];
        return view('backend/grids',['data' => isset($data) ? $data : null]);
    }
    public function login() {
        $data = ['mobile' => [
            'iphone',
            'Samsung'
        ]
        ];
        return view('backend/login',['data' => isset($data) ? $data : null]);
    }
    public function profile() {
        $data = ['mobile' => [
            'iphone',
            'Samsung'
        ]
        ];
        return view('backend/profile',['data' => isset($data) ? $data : null]);
    }
    public function widgets() {
        $data = ['mobile' => [
            'iphone',
            'Samsung'
        ]
        ];
        return view('backend/widgets',['data' => isset($data) ? $data : null]);
    }
}