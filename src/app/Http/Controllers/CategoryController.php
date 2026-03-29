<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Model\Category;
use App\Http\Request\CategoryRequest;

class CategoryController extends Controller
{
    public function index () {
        return view ('category');
    }

    public function store () {
        $category = $request->only(['name']);
        Category::create($category);
        redirect ('/categories');
    }

    public function update (Request $request) {
        $category = request->only(['name']);
        Category::find($request->id)->update($category);
    }

    public function destroy (Request $request) {
        $category = request->only(['name']);
        Category::find($request->id)->delete($category);

    }
}
