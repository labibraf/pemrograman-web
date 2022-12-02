<?php

namespace App\Controllers;

class HomeController extends BaseController
{
    public function index()
    {
        return view('fitur/home');
    }

    public function device()
    {
        $data =[
            'title' => 'device'
        ];
        return view('fitur/device', $data);
    }

    public function detail()
    {
        $data =[
            'title' => 'detail',
        ];
        return view('fitur/detail', $data);
    }
}