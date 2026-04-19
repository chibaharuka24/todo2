<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Http\Requests\CategoryRequest;

class CategoryController extends Controller
{
    public function index () {
        $categories = Category::all();
        return view ('category' ,compact('categories'));
    }

    public function store (Request $request) {
        $category = $request->only('name');
        Category::create($category);
        return redirect ('/categories');
    }

    public function update (CategoryRequest $request) {
        $category = $request->only(['name']);
        Category::find
        ($request->id)->update($category);

        return redirect ('/categories');
    }

    public function destroy (Request $request) {
        $category = $request->only(['name']);
        Category::find($request->id)->delete($category);

        return redirect ('/categories');
    }
}
