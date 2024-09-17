@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/address.css') }}">
@endsection

@section('main')
<div class="address">
    <h2>住所の変更</h2>
    <form class="form" action="/address" method="post">
        @csrf
        <div class="form__content">
            <p>郵便番号</p>
            <input type="number" name="post" />
            <div class="form__error">
                @error('post')
                {{ $message }}
                @enderror
            </div>
        </div>

        <div class="form__content">
            <p>住所</p>
            <input type="text" name="address" />
            <div class="form__error">
                @error('address')
                {{ $message }}
                @enderror
            </div>
        </div>

        <div class="form__content">
            <p>建物名</p>
            <input type="text" name="building" />
            <div class="form__error">
                @error('building')
                {{ $message }}
                @enderror
            </div>
        </div>

        <div class="form__button">
            <button class="form__button-submit" type="submit">変更する</button>
        </div>
    </form>
</div>

@endsection