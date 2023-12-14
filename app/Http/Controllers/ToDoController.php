<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Todo;

class ToDoController extends Controller
{
    public function create(){
        return view('create');
    }
    public function list(Request $request){
        $todo=new Todo();
        $todo->gorev=$request->gorev;
        $todo->aciklama=$request->aciklama;
        $todo->durum=false;

        $todo->save();

    }
}
