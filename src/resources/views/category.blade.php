@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/category.css') }}" >

@endsection

@section('content')
<div class="category__alert">
    @if (session('message'))
    <div class="category__alert--success">
        {{ session('message')}}
    </div>
    @endif
    @if ($errors->any())
    <div class="category__alert--danger">
        <ul>
            @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
</div>

<div class="category-content">
    <form class="create-form" action="/categories" method="post">
        @csrf
        <div class="">
            <input class="" type="text" name="name" value="">
        </div>
        <div class="create-form__button">
            <button class="create-form__button-submit" type="submit">作成</button>
        </div>
    </form>
    <div class="category-table">
        <table class="category-table_inner">
            <tr class="category-table__row">
                <th class="category-table__header">
                    <span class="category-table__header-span">category</span>
</th>
</tr>

</div>
@endsection
