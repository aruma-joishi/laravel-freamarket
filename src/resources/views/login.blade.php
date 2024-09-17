@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/login.css') }}">
@endsection

@section('main')

<div class="login">
    <h2 class="main-ttl">ログイン</h2>
    <div class="login__content">
        <form action="/login" method="post">
            @csrf
            <div class="login__email">
                <p>メールアドレス</p>
                <input class="input" type="email" name="email" value="{{ old('email') }}">
                @error('email')
                <p>{{ $message }}</p>
                @enderror
            </div>
            <div class="login__password">
                <p>パスワード</p>
                <input class="input" type="password" name="password">
                @error('password')
                <p>{{ $message }}</p>
                @enderror
            </div>
            <div class="btn-container">
                @if (session('result'))
                <div class="flash_message">
                    {{ session('result') }}
                </div>
                @endif
                <input type="submit" value="ログインする">
            </div>
        </form>
    </div>
    <a href="/register">会員登録はこちら</a>
</div>
@endsection