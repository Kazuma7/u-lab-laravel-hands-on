<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\UserLocation;
use App\User;
use Illuminate\Http\Request;

class UserLocationController extends Controller
{
    public function index()
    {
        //start Middlewaraで処理するのが普通
        $token = $request->header('X-API-TOKEN');

        if(empty($token)){
            //空だったら処理中止
            return abort('401'); 
        }


    }

    public function create(Request $request)
    {
        //start Middlewaraで処理するのが普通
        $token = $request->header('X-API-TOKEN');

        if(empty($token)){
            //空だったら処理中止
            return abort('401'); 
        }


        $park_id = $request->parkID;
        $longtitude = $request->$longtitude;
        $latitude = $request->$latitude;

        User::where('token','=',$token)->first();

        $user_location = UserLocation::create([
            'user_id' => $user->id,
            'park_id' => $park_id,
            'longitude' => $longtitude,
            'latitude' => $latitude
        ]);

        return[
            "data" => $user_location
        ];
    }
}
