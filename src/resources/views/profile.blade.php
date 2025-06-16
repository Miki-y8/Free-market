@extends('layouts.app')

@section('content')

<div class="profile-form">
    <h2 class="profile-form__heading">プロフィール設定</h2>

    <form action="store" method="get">

        @csrf

        <div>
            <label for="image">画像</label>
            <input id="image" type="file" name="image" class="profileimage" />
        </div>

        <div class="profile-form__group">
            <label class="profile-form__label" for="user_name">ユーザー名
            </label>
            <div class="profile-form__inputs">
                <input class="profile-form__input" type="text" name="user_name" id="user_name" value="{{ old('user_name') }}">
            </div>
            <label class="profile-form__label" for="post_code">郵便番号
            </label>
            <div class="profile-form__inputs">
                <input class="profile-form__input" type="text" name="post_code" id="post_code" value="{{ old('post_code') }}">
            </div>
            <label class="profile-form__label" for="address">住所
            </label>
            <div class="profile-form__inputs">
                <input class="profile-form__input" type="text" name="address" id="address" value="{{ old('address') }}">
            </div>
            <label class="profile-form__label" for="building">建物名
            </label>
            <div class="profile-form__inputs">
                <input class="profile-form__input" type="text" name="building" id="building" value="{{ old('building') }}">
            </div>

            <input class="profile-update__btn btn" type="submit" value="更新する">

    </form>
    </div>    

</div>


@endsection