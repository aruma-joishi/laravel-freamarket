@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/sell.css') }}">
@endsection

@section('main')
<div class="sell">
    <h2>商品の出品</h2>
    <form class="form" action="/sell/confirm" method="post" enctype="multipart/form-data">
        @csrf
        <input type="hidden" name="user_id" value="{{Auth::user()->id}}" />

        <div class="sell__img">
            <p>商品の画像</p>
            <input type="file" name="image" value="{{old('image') }}" />
            <div class="form__error">
                @error('image')
                {{ $message }}
                @enderror
            </div>
        </div>

        <div class="sell__detail">
            <h3>商品の詳細</h3>
            <div class="sell__detail-content">
                <p>カテゴリー</p>
                <select name="category_id">
                    <option value="">選択してください</option>
                    @foreach ($categories as $category)
                    <option value="{{$category['id']}}" @if( old('category_id')==$category['id'] ) selected @endif>{{$category['name']}}</option>
                    @endforeach
                </select>
                <div class="form__error">
                    @error('category_id')
                    {{ $message }}
                    @enderror
                </div>

                <p>商品の状態</p>
                <select name="condition_id">
                    <option value="" hidden>選択してください</option>
                    @foreach ($conditions as $condition)
                    <option value="{{$condition['id']}}" @if( old('condition_id')==$condition['id'] ) selected @endif>{{$condition['condition']}}</option>
                    @endforeach
                </select>
            </div>
            <div class="form__error">
                @error('condition_id')
                {{ $message }}
                @enderror
            </div>
        </div>

        <div class="sell__description">
            <h3>商品名と説明</h3>
            <div class="sell__description-content">
                <p>商品名</p>
                <input type="text" name="name" value="{{ old('name') }}" />
                <div class="form__error">
                    @error('name')
                    {{ $message }}
                    @enderror
                </div>
                <p>商品の説明</p>
                <textarea name="description">{{ old('description') }}</textarea>
                <div class="form__error">
                    @error('description')
                    {{ $message }}
                    @enderror
                </div>
            </div>
        </div>

        <div class="sell__price">
            <h3>販売価格</h3>
            <div class="sell__price-content">
                <p>販売価格</p>
                <label>￥<input type="number" name="price" value="{{ old('price') }}"></label>
                <div class="form__error">
                    @error('price')
                    {{ $message }}
                    @enderror
                </div>
            </div>
        </div>

        <div class="sell__button">
            <button class="form__button-submit" type="submit">出品する</button>
        </div>

    </form>
</div>

@endsection