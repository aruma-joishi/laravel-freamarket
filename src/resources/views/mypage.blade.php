@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/mypage.css') }}">
@endsection

@section('main')
<div class="mypage">
    <div>
        <img src="{{$profile->img_url}}" alt="{{ $profile->name }}" width=10%>
        <p>{{ $profile->name }}</p>
        <a class="favorite-icon" href="/profile">プロフィールを編集</a>
    </div>

    <div>
        <a class="favorite-icon" href="/mypage">出品した商品</a>
        <a class="favorite-icon" href="/bought">購入した商品</a>
    </div>

    <div>
        @foreach($items as $item)
        <a class="favorite-icon" href="/item/{{$item->id}}">
            <img src="{{$item->img_url}}" alt="{{$item->name}}" />
        </a>
    </div>
    @endforeach

    @endsection