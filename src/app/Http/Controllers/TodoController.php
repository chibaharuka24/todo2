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
        return redirect ('/')->with('message', 'Todoを作成しました');
    }

    public function update (TodoRequest $request) {
        $todo = $request->only(['content']);
        $category = $request->only(['name']);
        Todo::find($request->id)->update($todo);
        Todo::find($request->category_id)->update($category);
        return redirect ('/')->with('message', 'Todoを更新しました');
    }

    public function destroy (Request $request) {
        $todo = Todo::find($request->id);
        $todo->delete();
        return redirect('/')->with('message', 'Todoを削除しました');
    }

    public function search (Request $request) {
        $query = Todo::query();
        $keyword = $request->keyword;
        $category_id = $request->category_id;
        $todos = Todo::get();
        $categories = Category::all();
        if ($request->has('keyword') && $request->filled('keyword')) {
            $query->where('content', 'like', '%' . $keyword . '%');
        }

        return view('index',compact('todos', 'categories' ,'category_id', 'keyword'));
    }
}
