<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Vote;

class VoteController extends Controller
{
    public function list()
    {
        $votes = Vote::all();

        $list = [];
        foreach ($votes as $vote) {
            $object = [
                "id" => $vote->id,
                "user" => $vote->user,
                "date" => $vote->date,
                "song_id" => $vote->song_id,
                "gender_id" => $vote->gender_id,
                "artist_id" => $vote->artist_id,
                "album_id" => $vote->album_id,
                "created_at" => $vote->created_at,
                "updated_at" => $vote->updated_at
            ];
            array_push($list, $object);
        }

        return response()->json($list);
    }
    public function show($id)
    {
        $vote = vote::where('id', '=', $id)->first();


        $object = [
            "id" => $vote->id,
            "user" => $vote->user,
            "date" => $vote->date,
            "song_id" => $vote->song_id,
            "gender_id" => $vote->gender_id,
            "artist_id" => $vote->artist_id,
            "album_id" => $vote->album_id,
            "created_at" => $vote->created_at,
            "updated_at" => $vote->updated_at
        ];

        return response()->json($object);
    }
    public function create(Request $request){
            
        $data = $request->validate([
            "user"=> "min:3",
            "date"=> "min:3",
            "song_id"=> "min:3",
            "gender_id"=> "min:3",
            "artist_id"=> "min:3",
            "album_id"=> "min:3",       
         ]);
        $votes = vote::create([
            "user" => $data["user"],
            "date"=> $data["date"],
            "song_id"=> $data["song_id"],
            "gender_id"=> $data["gender_id"],
            "artist_id"=> $data["artist_id"],
            "album_id"=> $data["album_id"],
        ]);
        if($votes){
            $object = [
                "response" => "Success. Items is correct",
                "date"  => $votes
            ];
            return response()->json($votes);
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
            "date"=> "min:3|max:20",
            "song_id"=> "min:3|max:20",
            "gender_id"=> "min:3|max:20",
            "artist_id"=> "min:3|max:20",
            "album_id"=> "min:3|max:20",
            
        ]);

        $element = Comment::where('id', '=', $data['id'])->first();
        $element->name = $data['name'];
        $element->date = $data['date'];
        $element->song_id = $data['song_id'];
        $element->gender_id = $data['gender_id'];
        $element->artist_id = $data['artist_id'];
        $element->album_id = $data['album_id'];
        
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
