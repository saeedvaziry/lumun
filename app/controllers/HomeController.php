<?php

namespace App\Controllers;

class HomeController extends Controller
{
    public function getIndex()
    {
        return view('index', array('name' => 'saeed'));
    }
}
