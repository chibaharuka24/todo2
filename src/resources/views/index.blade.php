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
    <div class="todo-table">
        <table class="todo-table_inner">
            <tr class="todo-table__row">
                <th class="todo-table__header">
                    <span class="todo-table__header-span">Todo</span>
                    <span class="todo-table__header-span">カテゴリ</span>
                </th>
            </tr>
            @foreach($todos as $todo)
            <tr class="todo-table__row">
                <form class="update-form" action="/todos/update" method="post">
                @method('PATCH')
                @csrf


            </tr>


</div>





@endsection
