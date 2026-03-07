<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Todo</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    @yield('css')
</head>
<body>
    <header class="header">
        <div class="header__inner">
            <a class="header__logo">
                Todo
            </a>
            <a class="nav" href="/todo/categories">
                カテゴリ一覧
            </a>
        </div>
    </header>

    <main>
        @yield('content')
    </main>
</body>
</html>