<?php

namespace App\Http\Controllers;

use App\Models\LightAutomation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LightAutoMatoinController extends Controller
{

    public function lightsetoffget(){

        return view('lightoff');
    }

    public function lightsetoff(){

        $light = LightAutomation::find(1);
        $light->status = 'offridoy';  // False = 0 Light Off
        $light->save();


        return response([
            'light' =>$light,

        ], 200);
    }


    public function lightsetonget(){

        return view('lighton');
    }

    public function lightseton(){

        $light = LightAutomation::find(1);
        $light->status = 'onridoy';  // true = 1 Light On
        $light->save();


        return response([
            'light' =>$light,

        ], 200);
    }
    public function lightget(){


        $light = DB::table('light_automations')->where('light_automations_id', 1)->first();

        return response([
            'light' =>$light,

        ], 200);
    }

}

