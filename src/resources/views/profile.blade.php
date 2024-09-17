@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/profile.css') }}">
@endsection

@section('main')
<div class="profile">
    <h2>プロフィール設定</h2>
    <form class="form" action="/profile/update" method="post">
        @csrf
        <input type="hidden" name="user_id" value="{{ Auth::user()->id }}" />

        <div class="form__content">
            <p>ユーザー名</p>
            <input type="text" name="name" value="{{ $profile -> name}}" />
            <div class="form__error">
                @error('password')
                <p>{{ $name }}</p>
                @enderror
            </div>
        </div>

        <div class="form__content">
            <p>郵便番号</p>
            <input type="text" name="post" value="{{ $profile -> postcode}}" />
            <div class="form__error">
                @error('password')
                <p>{{ $postcode }}</p>
                @enderror
            </div>
        </div>

        <div class="form__content">
            <p>住所</p>
            <input type="text" name="address" value="{{ $profile -> address}}" />
            <div class="form__error">
                @error('password')
                <p>{{ $address }}</p>
                @enderror
            </div>
        </div>

        <div class="form__content">
            <p>建物名</p>
            <input type="text" name="building" value="{{ $profile -> building}}" />
            <div class="form__error">
                @error('password')
                <p>{{ $building }}</p>
                @enderror
            </div>
        </div>

        <div class="form__button">
            <button class="form__button-submit" type="submit">更新する</button>
        </div>
    </form>
</div>

@endsection