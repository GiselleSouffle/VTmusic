<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vote;

class VoteController extends Controller
{
    public function index(){
        $votes = Vote::all();
        return view('admin.votes.index',compact('votes'));
    }
}
