@extends('layouts.app')

@section('content')

<div class="left-content">
    
</div>

<div class="right-content">
    <label class="name-label">商品名がここに入る
    </label>
    <p>ブランド名</p>
    <p>値段</p>
    <p>いいね数</p>
    <p>コメント数</p>

   <button type="submit" class="purchase_btn">購入手続きへ</button>

   <h1>商品説明</h1>

   <p></p>

   <h1>商品の情報</h1>

   <p>カテゴリー</p>

   <p>商品の状態</p>

   <h2>コメント</h2>

   <label class="contact-form__label" for="">
    商品へのコメント</label>
    <textarea class="comments-form__textarea" name="comment" id="" cols="30" rows="10">
        {{ old('detail') }}</textarea>
   <button type="submit" class="comment_btn">コメントを送信する</button>

@endsection