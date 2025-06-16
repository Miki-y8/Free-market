@extends('layouts.app')

@section('content')


<div class="registration__link">
        <a class="registration__button-submit" href="/profile">プロフィールを編集</a>
</div>


<p>出品した商品</p>
<p>購入した商品</p>

<img src="{{ asset('images/MensClock.png') }}" alt="腕時計" class="mensclock">



<div class="product-contents">
                @foreach ($products as $product)
                    <div class="product-content">
                        <a href="/products/detail/{{$product->id}}" class="product-link"></a>
                        <img src="{{ asset($product->image) }}"  alt="商品画像" class="img-content"/>
                        <div class="detail-content">
                            <p>{{$product->name}}</p>
                            <p>{{$product->price}}</p>
                        </div>
                    </div>
                @endforeach
            </div>






@endsection