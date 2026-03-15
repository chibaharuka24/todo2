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
                <td class="todo-table__item">
                    <form class="update-form" action="/todos/update?id={{$todo->id}}" method="post">
                    @method('PATCH')
                    @csrf
                        <div class="update-form__item">
                            <input class="update-form__item-input"  name="content" value="{{ $todo['content'] }}">
                        </div>
                        <div class="update-form__item">
                            <select class="update-form__item-select" name="category_id">
                            @foreach($categories as $category)
                            <?php
                            $isSelected= '';
                            if(($todo->category_id ?? '') == $category['id']) {
                                $isSelected = ' selected';
                            }
                            ?>
                                <option value="{{ $category['id'] }}"{{ $isSelected}}>{{ $category['name']}}</option>
                            </select>
                        </div>
                        <div class="update-form__button">
                            <button class="update-form__button-submit" type="submit">更新</button>
                        </div>
                    </form>
                </td>
                <td class="todo-table__item">
                    <form class="delete-form" action="/todos/delete?id={{ $todo->id }}" method="post">
                        @method('DELETE')
                        @csrf
                        <div class="delete-form__button">
                            <button class="delete-form__button-submit">削除</button>
                        </div>
                    </form>
                </td>
            </tr>
        </table>
    </div>
</div>
@endsection
