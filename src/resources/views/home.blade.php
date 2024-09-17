@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/home.css') }}">
@endsection

@section('main')
<div class="home">
    @if (session('result'))
    <div class="message">
        {{ session('result') }}
    </div>
    @endif
    <div>
        <a href="/">おすすめ</a>
        <a href="/home/like">マイリスト</a>
    </div>

    @foreach($items as $item)
    <div>
        <a href="/item/{{$item->id}}">
            <img src="{{$item->img_url}}" alt="{{$item->name}}" />
        </a>
    </div>
    @endforeach

    @endsection