<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atte</title>
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    @yield('css')
</head>

<body class="body">
    <header class="header">
        <div class="header__content">
            <div class="header__left">
                <a class="header_image" href="/">
                    <img src="/image/logo.svg">
                </a>
                <form class="search-form" action="/search" method="get">
                    @csrf
                    <input class="search-form__input" type="text" name="keyword" placeholder="なにをお探しですか？" value="{{request('keyword')}}">
                    <button class="search-form__submit" type="submit">検索</button>
                </form>
            </div>
            <div class="header_right">
                @if( Auth::check() )
                <a href="/logout">ログアウト</a>
                <a href="/mypage">マイページ</a>
                <a href="/sell">出品</a>
                @else
                <a href="/login">ログイン</a>
                <a href="/register">会員登録</a>
                <a href="/sell">出品</a>
                @endif
            </div>
        </div>
    </header>

    <main class="main">
        @yield('main')
    </main>
</body>

</html>