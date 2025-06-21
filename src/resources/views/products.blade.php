@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{asset('css/product.css')}}">
@endsection

@section('content')

<p>おすすめ</p>
<p>マイリスト</p>

<div class="all-contents">
    <div class="contents">
        <form action="/products" method ="POST">
            @csrf
            <div class="all-product-contents">
                @foreach ($products as $product)
                <div class="product-content">
                    <img src="{{ asset($product->image) }}"  alt="商品画像" class="img-content"/>
                    <div class="detail-content">
                        <p>{{$product->name}}</p>
                    </div>
                </div>
                @endforeach
            </div>

        </form>
    </div>    
</div>







@endsection