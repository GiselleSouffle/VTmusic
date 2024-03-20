<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Song;

class SongController extends Controller
{
    public function list()
    {
        $songs = song::all();

        $list = [];
        foreach ($songs as $song) {
            $object = [
                "id" => $song->id,
                "title" => $song->title,
                "artist" => $song->artist,
                "gender" => $song->gender,
                "image" => $song->image,
                "created_at" => $song->created_at,
                "updated_at" => $song->updated_at
            ];
            array_push($list, $object);
        }

        return response()->json($list);
    }
    public function show($id)
    {
        $song = song::where('id', '=', $id)->first();


        $object = [
            "id" => $song->id,
                "title" => $song->title,
                "artist" => $song->artist,
                "gender" => $song->gender,
                "image" => $song->image,
                "created_at" => $song->created_at,
                "updated_at" => $song->updated_at
        ];

        return response()->json($object);
    }
    public function create(Request $request){
            
        $data = $request->validate([
            "title"=> "min:3",
            "artist"=> "min:3",
            "gender"=> "min:3",
            "image"=> "max:2"
        ]);
        $songs = song::create([
            "title" => $data["title"],
            "artist"=> $data["artist"],
            "gender"=> $data["gender"],
            "image"=> $data["image"],
        ]);
        if($songs){
            $object = [
                "response" => "Success. Items is correct",
                "date"  => $songs
            ];
            return response()->json($songs);
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
            "title"=> "max:2",
            "artist"=> "min:3|max:20",
            "gender"=> "min:3|max:20",
            "image"=> "min:3|max:20",
        ]);

        $element = song::where('id', '=', $data['id'])->first();
        $element->title = $data['title'];
        $element->artist = $data['artist'];
        $element->gender = $data['gender'];
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
