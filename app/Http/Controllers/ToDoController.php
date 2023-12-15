<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Todo;

class ToDoController extends Controller
{
    public function create(){
        return view('create');
    }
    public function store(Request $request){
        $todo=new Todo();
        $todo->gorev=$request->gorev;
        $todo->aciklama=$request->aciklama;
        $todo->durum=false;

        $todo->save();

        return redirect('/todolist');
        

    }
    public function list(Request $request){
        $todos = Todo::all();

        return view('todolist', compact('todos'));
    }
}
