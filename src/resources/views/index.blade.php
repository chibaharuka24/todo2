@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/index.css') }}">
@endsection

@section('content')
<div class="todo-content">
    <div class="create-from-title">
        <h1>新規作成</h1>
    </div>
    <form class="create-form" action="/todos" method="post">
    @csrf
        <div class="create-form-item">
            <input class="create-form-item-input type="text" name="content" value="">
            <select class="create-form-item-select" name="">
            @foreach
            <option class="">
            @endforeach
            </select>
            <div class="create-form_button">
                <button class="create-form_button-submit" type="submit">作成</button>
            </div>
        </div>
    </form>
    <div class="search-form-title">
        <h1>Todo検索</h1>
    </div>
    <form class="search-form" action="/todos/search" method="get">
        <input class="search-form-item-input" type="text" name="keyword">
        <select class="create-form-item-select" name="">
        @foreach
        <option class="">
        @endforeach
        </select>
    </form>

</div>





@endsection
