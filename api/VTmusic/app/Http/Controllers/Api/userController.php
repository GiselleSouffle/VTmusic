<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function list()
    {
        $users = user::all();

        $list = [];
        foreach ($users as $user) {
            $object = [
                "id" => $user->id,
                "name" => $user->name,                
                "surname" => $user->surname,
                "email" => $user->email,
                "phone" => $user->phone,
                "email_verified_ad" => $user->email_verified_ad,
                "image" => $user->image,
                "remember_token" => $user->remember_token,
                "created_at" => $user->created_at,
                "updated_at" => $user->updated_at
            ];
            array_push($list, $object);
        }

        return response()->json($list);
    }
    public function show($id)
    {
        $user = user::where('id', '=', $id)->first();


        $object = [
            "id" => $user->id,
                "name" => $user->name,                
                "surname" => $user->surname,
                "email" => $user->email,
                "phone" => $user->phone,
                "email_verified_ad" => $user->email_verified_ad,
                "image" => $user->image,
                "remember_token" => $user->remember_token,
                "created_at" => $user->created_at,
                "updated_at" => $user->updated_at
        ];

        return response()->json($object);
    }
    public function create(Request $request){
            
        $data = $request->validate([
            "name"=> "min:3",
            "surname"=> "max:2",
            "email"=> "max:2",
            "phone"=> "max:2",
            "email_verified"=> "max:2",
            "password"=> "max:2",
            "image"=> "max:2",
            "remember_token"=> "max:2"

        ]);
        $comments = Comment::create([
            "name" => $data["name"],
            "surname"=> $data["surname"],
            "email"=> $data["email"],
            "phone"=> $data["phone"],
            "email_verified"=> $data["email_verified"],
            "password"=> $data["password"],
            "image"=> $data["image"],
            "remember_token"=> $data["remember_token"],

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
            "name"=> "max:2",
            "surname"=> "min:3|max:20",
            "email"=> "min:3|max:20",
            "phone"=> "min:3|max:20",
            "email_verified"=> "min:3|max:20",
            "password"=> "min:3|max:20",
            "image"=> "min:3|max:20",
            "remember_token"=> "min:3|max:20",            
        ]);

        $element = song::where('id', '=', $data['id'])->first();
        $element->name = $data['name'];
        $element->surname = $data['surname'];
        $element->email = $data['email'];
        $element->phone = $data['phone'];
        $element->email_verified = $data['email_verified'];
        $element->password = $data['password'];
        $element->image = $data['image'];
        $element->remember_token = $data['remember_token'];

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
