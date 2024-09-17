@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/register.css') }}">
@endsection

@section('main')

<div class="register">
    <h2>会員登録</h2>
    <div class="register__content">
        <form action="/register" method="post">
            @csrf
            <div class="register__email">
                <p>メールアドレス</p>
                <input class="input" type="email" name="email" value="{{ old('email') }}">
                @error('name')
                <p>{{ $message }}</p>
                @enderror
            </div>
            <div class="register__password">
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
                <input type="submit" value="登録する">
            </div>
        </form>
    </div>
    <a href="/login">ログインはこちら</a>
</div>
@endsection