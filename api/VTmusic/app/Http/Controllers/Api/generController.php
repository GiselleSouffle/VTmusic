<?php

namespace App\Http\Controllers\Api;

use App\Models\Gener;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class GenerController extends Controller
{
    public function list()
    {
        $geners = gener::all();

        $list = [];
        foreach ($geners as $gener) {
            $object = [
                "id" => $gener->id,
                "type" => $gener->type,
                "created_at" => $gener->created_at,
                "updated_at" => $gener->updated_at
            ];
            array_push($list, $object);
        }

        return response()->json($list);
    }
    public function show($id)
    {
        $gener = gener::where('id', '=', $id)->first();


        $object = [
            "id" => $gener->id,
            "type" => $gener->type,
            "created_at" => $gener->created_at,
            "updated_at" => $gener->updated_at
        ];

        return response()->json($object);
    }
    public function create(Request $request){
            
        $data = $request->validate([
            "type"=> "min:3",
        ]);
        $geners = gener::create([
            "type" => $data["type"],
        ]);
        if($geners){
            $object = [
                "response" => "Success. Items is correct",
                "date"  => $geners
            ];
            return response()->json($geners);
        }else{
            $object = [
                "response" => "Error: Something went wrong, please try again."
            ];
        }
        return response()->json($object);
    }
    public function update(Request $request){
        $data = $request->validate([
            "id"=> "required|integer|min:1",
            "type"=> "max:2",            
        ]);

        $element = gener::where('id', '=', $data['id'])->first();
        $element->type = $data['type'];
        
        if($element->update){
            $object = [
                "response" => "Success. Items is correct",
                "date"  => $element
            ];
            return response()->json($element);
        }else{
            $object = [
                "response" => "Error: Something went wrong, please try again."
            ];
        }
        return response()->json($object);
    }
}


