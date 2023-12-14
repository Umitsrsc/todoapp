<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ToDoController extends Controller
{
    public function create(){
        return view('create');
    }
    public function list(Request $request){
        dd($request->all());

    }
}
