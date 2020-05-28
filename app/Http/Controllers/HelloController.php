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

    public function strImplode(){

        $str1 = 'hello';
        $str2 = 'world';

        $str1 .= $str2;

        $implode = $str1 . ' ' . $str2;
        // $implode = "{$str1} ああ {$str2}";

        return $implode;
    }

    public function arr2()
    {
        $arr = [
            "data" => ['apple','orrange'],
            "meta" => ['graph','maskat']
        ];

        $data = $arr["data"];

        return $data;
    }

}
