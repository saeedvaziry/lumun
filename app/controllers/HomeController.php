<?php

namespace App\Controllers;

class HomeController extends Controller
{
    public function getIndex($request)
    {
        return view('index', array('name' => 'saeed'));
    }
}
