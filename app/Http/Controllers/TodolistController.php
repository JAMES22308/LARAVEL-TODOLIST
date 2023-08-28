<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Todolist;


class TodolistController extends Controller
{
    
    public function get(){

        $user = Todolist::all();
        return view('create', ['users' => $user]);
    }

    public function store(Request $req){

        // dd($req);

        $validated = $req->validate([
            "name" => 'required|min:4|max:250',
            "todolist" => 'required|min:4|max:250'
        ]);

        // dd($validated);
        Todolist::create([
            'name' => $validated['name'],
            'todo' => $validated['todolist']
        ]);

        return redirect('/create')->with('message', 'created successfully');

    }

    public function show($id){

        $users = Todolist::FindorFail($id);
        return view('edit', ['users' => $users]);
    }

    public function update(Request $req, Todolist $todolist){

        $validated = $req->validate([
            "name" => 'required',
            "todolist" => 'required'
        ]);

        $todolist->update([
            "name" => $validated['name'],
            "todo" => $validated['todolist'],
        ]);

        return redirect('/create')->with('alert', 'updated successfully');

    }

    public function drop(Request $req, Todolist $drop){


        $drop->delete();

        return redirect('/create');
    }

}
