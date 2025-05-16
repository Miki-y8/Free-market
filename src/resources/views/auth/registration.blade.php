@extends('layouts.login_register')

@section('content')
<div class="registration-form">
    <h2 class="registration-form__heading">会員登録</h2>
        <form class="registration-form__form" action="/registration" method="post">
        @csrf

        <div class="registration-form__group">
            <label class="registration-form__label" for="name">ユーザー名</label>
            <input class="registration-form__input" type="text" name="name" value="{{ old('name') }}" />
            <p class="registration-form__error-message">
                @error('email')
            {{ $message }}
            @enderror
            </p>
        </div>

        <div class="registration-form__group">
            <label class="registration-form__label" for="email">メールアドレス</label>
            <input class="registration-form__input" type="mail" name="email" value="{{ old('email') }}" />
            <p class="registration-form__error-message">
                @error('email')
            {{ $message }}
            @enderror
            </p>
        </div>
        <div class="registration-form__group">
            <label class="registration-form__label" for="password">パスワード</label>
            <input class="registration-form__input" type="password" name="password" >
            <p>
            @error('password')
            {{ $message }}
            @enderror
            </p>
        </div>
        <div class="registration-form__group">
            <label class="confirmation__label" for="confirmation__password">確認用パスワード</label>
            <input class="registration-form__input" type="password" name="password_confirmation" >
            <p>
            @error('password')
            {{ $message }}
            @enderror
            </p>
        </div>

        <div class="registration__button">
            <button class="form__button-submit" type="submit">登録する</button>
        </div>
        </form>
        <div class="registration__link">
            <a class="registration__button-submit" href="/auth/login">ログインはこちら</a>
        </div>
</div>
@endsection
