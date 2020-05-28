<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloController extends Controller
{
    public function index() 
    {
        return 'hello Controller';
    }

    public function varIndex()
    {
        $number = 5;
        $result = $number ** $number;

        \Log::debug($result);

        $result = $result ** $number;

        return $result;
    }
}
