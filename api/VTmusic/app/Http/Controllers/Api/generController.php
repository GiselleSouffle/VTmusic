<?php

namespace App\Http\Controllers\Api;

use App\Models\Gener;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class generController extends Controller
{
    public function list() {
        $geners = gener::all();

        $list = [];

        foreach($geners as $gener) {

            $object = [

            "id"=> $gener->id,
            "type"=> $gener->type,
            "created_at"=> $gener->created_at,
            "update_at"=> $gener->updated_at,
            ];
            array_push($list, $object);

        }
        return response()->json($list);
    }
    public function show($id) 
    {
        $gener = gener::where('id', '=', $id)->first();

        $object = [
            "id"=>$gener->$id,
                "string"=>$gener->string,
        ];

        return response()->json($object);
    }
}


