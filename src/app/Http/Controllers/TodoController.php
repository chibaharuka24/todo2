<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Todo;
use App\Http\Request\TodoRequest;

class TodoController extends Controller
{
    public function index () {
        $todos = Todo::all();
        return view ('index' ,compact ('todos'));
    }

    public function store (Request $request) {
        $todo = $request->only('content');
        Todo::create($todo);
        return redirect ('/');
    }

    public function update (TodoRequest $request) {
        $todo = $request->only(['content']);
        Todo::find($request->id)->update($todo);
        return redirect ('/');
    }

    public function destroy (Request $request) {
        $todo = Todo::find($request->id);
        Todo::find($request->id)->delete();
    }

    public function search () {

    }
}
