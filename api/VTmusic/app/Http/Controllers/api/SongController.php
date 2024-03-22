<?php

namespace App\Http\Controllers\api;

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
                "artist_id" => $song->artist,
                "gender_id" => $song->gender,
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
                "artist_id" => $song->artist,
                "gender_id" => $song->gender,
                "image" => $song->image,
                "created_at" => $song->created_at,
                "updated_at" => $song->updated_at
        ];

        return response()->json($object);
    }
    public function create(Request $request){
            
        $data = $request->validate([
            "title"=> "min:3",
            "artist_id"=> "min:3",
            "gender_id"=> "min:3",
            "image"=> "max:2"
        ]);
        $songs = song::create([
            "title" => $data["title"],
            "artist_id"=> $data["artist"],
            "gender_id"=> $data["gender"],
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
            "artist_id"=> "min:3|max:20",
            "gender_id"=> "min:3|max:20",
            "image"=> "min:3|max:20",
        ]);

        $element = song::where('id', '=', $data['id'])->first();
        $element->title = $data['title'];
        $element->artist = $data['artist_id'];
        $element->gender = $data['gender_id'];
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
