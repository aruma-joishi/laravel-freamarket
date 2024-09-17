@extends('layouts.app')

@section('main')
<div class="main flex">
    <div class="item-detail">
        <img class="item-detail__img" src="{{$item->img_url}}" alt="item-img" />
        <div class="flex align-items-center">
            <h2 class="item-detail__ttl">{{$item->name}}</h2>
            <p>￥{{ $item->price }}(値段)</p>

            <div class="item__icon">
                @if( Auth::check() )
                @if(count($item->likes) == 0)
                <form method="POST" action="{{ route('like', ['item_id' => $item->id]) }}">
                    @csrf
                    <input type="image" src="/image/unlike.jpeg" alt="いいね" width=10%>
                </form>
                @else
                <form class="ml-a" method="POST" action="{{ route('unlike', ['item_id' => $item->id]) }}">
                    @csrf
                    <input type="image" src="/image/like.jpeg" alt="いいねを外す" width=10%>
                </form>
                @endif
                @endif
                <a href="/comment/{{$item->id}}"><img src="/image/comment.jpeg" alt="comment" width=10% /></a>
            </div>

            <a href="/buy/{{$item->id}}">
                購入する
            </a>

            <h3 class="item__description">商品説明</h3>
            <p>{{$item->description}}</p>
            <h3 class="item__detail">商品の情報</h3>
            <table>
                <tr>
                    <th>カテゴリー</th>
                    @foreach ($categories as $category)
                    @if ($category['id'] == $item['category_id'])
                    <td>{{$category->name}}</td>
                    @endif
                    @endforeach

                </tr>
                <tr>
                    <th>商品の状態</th>
                    @foreach ($conditions as $condition)
                    @if ($condition['id'] == $item['condition_id'])
                    <td>{{$condition->condition}}</td>
                    @endif
                    @endforeach
                </tr>
            </table>
        </div>
    </div>
    @endsection