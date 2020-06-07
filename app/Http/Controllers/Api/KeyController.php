<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class KeyController extends Controller
{
    public function generate(Request $request)
    {
        $name = $request->name; //userの入力値を取得
        $uuid = Str::uuid(); //uuidの生成

        //data
        $user = User::create([
            'name' => $name,
            'token' => $uuid
        ]);

        //配列をリターンする
        return [
            'data' => [
            'name' => $user->name,
            'token' => $user->token
            ]
        ];
    }
}
