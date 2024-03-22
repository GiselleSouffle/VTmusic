<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Artist;

class ArtistController extends Controller
{
    public function list()
    {
        $artists = Artist::all();

        $list = [];
        foreach ($artists as $artist) {
            $object = [
                "id" => $artist->id,
                "name" => $artist->name,
                "gender_id" => $artist->gender,
                "album_id" => $artist->album_id,
                "image" => $artist->image,
                "created_at" => $artist->created_at,
                "updated_at" => $artist->updated_at
            ];
            array_push($list, $object);
        }

        return response()->json($list);
    }
    public function show($id)
    {
        $artist = artist::where('id', '=', $id)->first();

        $object = [
            "id" => $artist->id,
            "name" => $artist->name,
            "gender_id" => $artist->gender,
            "album_id" => $artist->album_id,
            "image" => $artist->image,
            "created_at" => $artist->created_at,
            "updated_at" => $artist->updated_at
        ];

        return response()->json($object);
    }
    public function create(Request $request){
            
        $data = $request->validate([
            "name"=> "min:3",
            "gender_id"=> "max:2",
            "album_id"=> "max:2",
            "image"=> "max:2"
        ]);
        $artists = artist::create([
            "name" => $data["name"],
            "gender_id"=> $data["gender_id"],
            "album_id"=> $data["album_id"],
            "image"=> $data["image"],
        ]);
        if($artists){
            $object = [
                "response" => "Success. Items is correct",
                "date"  => $artists
            ];
            return response()->json($artist);
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
            "name"=> "max:2",
            "gender_id"=> "min:3|max:20",
            "album_id"=> "min:3|max:20",
            "image"=> "min:3|max:20",

        ]);

        $element = artist::where('id', '=', $data['id'])->first();
        $element->name = $data['name'];
        $element->gender = $data['gender_id'];
        $element->album_id = $data['album_id'];
        $element->image = $data['image'];
        
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
