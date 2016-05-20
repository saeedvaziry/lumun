<?php

namespace App\Controllers;

class HomeController extends Controller
{
    public function getIndex($name)
    {
        return $name;
    }
}
