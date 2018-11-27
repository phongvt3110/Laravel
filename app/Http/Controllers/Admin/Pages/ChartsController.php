<?php
/**
 * Created by PhpStorm.
 * User: pvt
 * Date: 12/26/17
 * Time: 10:19 PM
 */

namespace App\Http\Controllers\Admin\Pages;
use App\Http\Controllers\Controller;

class ChartsController extends Controller
{
    public function chartjs() {
        $data = ['mobile' => [
            'iphone',
            'Samsung'
        ]
        ];
        return view('admin.pages.charts.chartjs',['data' => isset($data) ? $data : null]);
    }
}