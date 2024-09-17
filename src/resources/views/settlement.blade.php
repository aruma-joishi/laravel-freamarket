@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/address.css') }}">
@endsection

@section('main')
<div class="settlement">
    <h2>支払方法の変更</h2>
    <form class="form" action="/settlement/confirm" method="post">
        @csrf
        <input type="hidden" name="item_id" value="{{$request->item_id}}" />
        <input type="hidden" name="user_id" value="{{$request->user_id}}" />
        <input type="hidden" name="postcode" value="{{$request->postcode}}" />
        <input type="hidden" name="address" value="{{$request->address}}" />
        <input type="hidden" name="building" value="{{$request->building}}" />
        <div class="form__settlement">
            <button class="form__button-submit" type="submit" value="1">クレジットカード</button>
            <button class="form__button-submit" type="submit" value="2">コンビニ</button>
            <button class="form__button-submit" type="submit" value="3">銀行振込</button>
        </div>
    </form>
</div>

@endsection