<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Todo;
use App\Models\Category;
use App\Http\Requests\TodoRequest;
use App\Http\Requests\CategoryRequest;

class TodoController extends Controller
{
    public function index () {
        $todos = Todo::all();
        $categories = Category::all();
        return view ('index' ,compact ('todos' , 'categories'));
    }

    public function store (Request $request) {
        $todo = $request->only(['content','category_id']);
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
        $todo->delete();
    }

    public function search (Request $request) {
        $todo = Todo::find($request->id);
        return redirect('/');
    }
}
