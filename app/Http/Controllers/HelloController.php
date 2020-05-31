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

    public function foreach()
    {
        $arr = [
            ['apple','orrange'],
            ['graph','maskat']
        ];

        $str = '';

        foreach($arr as $value){
            $str .= $value[0];
            $str .= $value[1];
            $str .= ' ';
        }

        return $str;
        
    }

    public function name(){
        $array = array(
            "lemon" => "yellow",
            "apple" => "red",
            "banana" => "yellow"
        );

        $array2 = [
            "lemon" => "yellow",
            "apple" => "red",
            "banana" => "yellow"
        ];

        return $array2["apple"];
    }

    public function unset(){
        $user = [
            "0" => "Tom",
            "1" => "Katy",
            "2" => "Jim",
            "3" => "Mary"
        ];

        unset($user[1]);

        return $user;
    }

    public function mazime(){
        $hoge = "124";

        $piyo = 125;

        if($hoge == $piyo){
            return "ture";
        }else{
            return "false";
        }
    }

    public function san(){
        return "さん";
    }

    public function goodcall($name){
        return "おはよう{$name}".$this->san();
    }

    public function aisatu(){
        return $this->goodcall("太郎");
    }

    public function age($age){
        return "年齢は{$age}";
    }

    public function sexual($sexual){
        if($sexual = 0){
            return "私は男性です";
        }else{
            return "私は女性です";
        }
    }

    public function pet($pet){
        return "私は{$pet}を飼っています";
    }

    public function identity(){
        return $this->age(14)."\n".$this->sexual(1)."\n".$this->pet("dog");
    }

}

class cash extends Controller
{
    public function age($age){
        return "年齢は{$age}";
    }

    public function sexual($sexual){
        if($sexual = 0){
            return "私は男性です";
        }else{
            return "私は女性です";
        }
    }

    public function pet($pet){
        return "私は{$pet}を飼っています";
    }

    public function identity(){
        return $this->age(14)."\n".$this->sexual(1)."\n".$this->pet("dog");
    }
}