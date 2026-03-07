<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Todo;
use App\Http\Request\TodoRequest;

class TodoController extends Controller
{
    public function index () {
        return view ('index');
    }

    public function store () {
        return redirect ('/todos');
    }

    public function update () {
        return redirect ('/');
    }

    public function destroy (Request $request) {

    }

    public function search () {

    }
}
