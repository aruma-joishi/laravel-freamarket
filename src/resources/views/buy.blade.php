@extends('layouts.app')

@section('main')
<div class="buy">
    <div class="item_detail">
        <img src="{{$item->img_url}}" alt="{{$item->name}}" />
        <h2>{{$item->name}}</h2>
        <h2>{{$item->price}}</h2>
    </div>

    <form class="form" method="POST" action="/buy/confirm">
        @csrf
        <input type="hidden" name="item_id" value="$item->id}}" />
        <input type="hidden" name="item_id" value="$item->id}}" />
        <div class="settlement">
            @foreach ($settlements as $settlement)
            @if ($settlement['id'] == $settlement_id)
            <input type="text" name="settlement" value="{{ $settlement['settlement'] }}" readonly />
            @endif
            @endforeach
            <button type="submit" name="action" value="settlement">変更する</button>

        </div>

        <div class="address">
            <input type="text" name="postcode" value="{{ $profile['postcode'] }}" readonly />
            <input type="text" name="address" value="{{ $profile['address'] }}" readonly />
            <input type="text" name="building" value="{{ $profile['building'] }}" readonly />
            <button type="submit" name="action" value="address">変更する</button>
        </div>
        <div class="confirm">
            <table>
                <tr>
                    <th>商品代金</th>
                    <td>{{$item->price}}</td>
                </tr>
                <tr>
                    <th>支払金額</th>
                    <td>{{$item->price}}</td>
                </tr>
                <tr>
                    <th>支払方法</th>
                    <td>{{$settlement['settlement']}}</td>
                </tr>
            </table>
            <button type="submit" name="action" value="confirm">購入する</button>
    </form>
</div>

@endsection