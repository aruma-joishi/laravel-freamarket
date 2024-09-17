@extends('layouts.app')

@section('main')
<div class="comment">
    <img class="item-detail__img" src="{{$item->img_url}}" alt="item-img" />
    <div class="flex align-items-center">
        <h2 class="item-detail__ttl">{{$item->name}}</h2>
        <p>￥{{ $item->price }}(値段)</p>

        @if( Auth::check() )
        @if(count($item->likes) == 0)
        <form method="POST" action="{{ route('like', ['item_id' => $item->id]) }}">
            @csrf
            <input type="image" src="/image/unlike.jpeg" alt="いいね" width=10%>
        </form>
        @else
        <form method="POST" action="{{ route('unlike', ['item_id' => $item->id]) }}">
            @csrf
            <input type="image" src="/image/like.jpeg" alt="いいねを外す" width=10%>
        </form>
        @endif
        @endif

        <img src="/image/comment.jpeg" alt="comment" width=10% />

        @foreach($comments as $comment)
        @foreach ($profiles as $profile)
        @if ($profile['user_id'] == $comment['user_id'])
        <p>{{$profile->name}}</p>
        @endif
        @endforeach
        <div>
            <p>{{$comment->comment}}</p>
            @if ($comment['user_id'] == Auth::user()->id)
            <form method="POST" action="/destroy/{{$comment->id}}">
                @csrf
                <input type="hidden" name="item_id" value="{{$item->id}}" />
                <input type="hidden" name="comment_id" value="{{$comment->id}}" />
                <button type=submit>×</button>
            </form>
            @endif
        </div>
        @endforeach

        <form class="form" action="/comment/confirm" method="post">
            @csrf
            <p>商品へのコメント</p>
            <textarea name="comment"></textarea>
            <input type="hidden" name="user_id" value="{{Auth::user()->id}}" />
            <input type="hidden" name="item_id" value="{{$item->id}}" />
            <button class="form__button-submit" type="submit">コメントを送信する</button>
        </form>
    </div>
</div>
@endsection