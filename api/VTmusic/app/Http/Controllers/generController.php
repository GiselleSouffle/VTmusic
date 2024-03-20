<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Gener;

class generController extends Controller
{
    public function index(){
        $geners = Gener::all();
        return view('admin.geners.index',compact('geners'));
    }
}
