<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Album;

class AlbumController extends Controller
{
    public function list()
    {
        $albums = Album::all();

        $list = [];
        foreach ($albums as $album) {
            $object = [
                "id" => $album->id,
                "title" => $album->title,
                "artist_id" => $album->artist,
                "date" => $album->date,
                "image" => $album->image,
                "created_at" => $album->created_at,
                "updated_at" => $album->updated_at
            ];
            array_push($list, $object);
        }

        return response()->json($list);
    }
    public function show($id)
    {
        $album = album::where('id', '=', $id)->first();


        $object = [
            "id" => $album->id,
            "title" => $album->title,
            "artist_id" => $album->artist,
            "date" => $album->date,
            "image" => $album->image,
            "created_at" => $album->created_at,
            "updated_at" => $album->updated_at
        ];

        return response()->json($object);
    }
    public function create(Request $request){
            
        $data = $request->validate([
            "title"=> "min:3",
            "artist_id"=> "max:2",
            "date"=> "max:2",
            "image"=> "min:3",
        ]);
        $albums = album::create([
            "title" => $data["title"],
            "artist_id"=> $data["artist"],
            "date"=>$date["date"],
            "image"=>$date["image"] 
        ]);
        if($albums){
            $object = [
                "response" => "Success. Items is correct",
                "date"  => $albums
            ];
            return response()->json($albums);
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
            "title"=> "min:3",
            "artist_id"=> "max:2",
            "date"=> "max:2",
            "image"=> "min:3",
            
        ]);

        $element = album::where('id', '=', $data['id'])->first();
        $element->title = $data['title'];
        $element->artist = $data['artist_id'];
        $element->date = $data['date'];
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
