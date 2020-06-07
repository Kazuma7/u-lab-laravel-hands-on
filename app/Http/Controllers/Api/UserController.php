<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function show(Request $request)
    {
        //start Middlewaraで処理するのが普通
        $token = $request->header('X-API-TOKEN');

        if(empty($token)){
            //空だったら処理中止
            return abort('401'); 
        }

        $user = User::where('token', '=', $token)->first();

        return [
            "data" => [
                "name" => $user->name
            ]
            ];



    }

    public function update(Request $request)
    {
         //start Middlewaraで処理するのが普通
         $token = $request->header('X-API-TOKEN');

         if(empty($token)){
             //空だったら処理中止
             return abort('401'); 
         }

         $name = $request->name;

         $user = User::where('token','=',$token)->first();

         $user->update([
             'name' => $name
         ]);

         return[
             "data" => [
                 "name" => $user->name
             ]
        ];
             
    }
}
