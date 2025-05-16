@extends('layouts.login_register')

@section('content')
<div class="login-form">
    <h2 class="login-form__heading">ログイン</h2>
    <form class="login-form__form" action="/login" method="post">
        @csrf

        <div class="login-form__group">
            <label class="login-form__label" for="email">メールアドレス</label>
            <input class="login-form__input" type="email" name="email" value="{{ old('email') }}" />
            <p class="register-form__error-message">
            @error('email')
            {{ $message }}
            @enderror
            </p>
        </div>
        <div class="login-form__group">
            <label class="login-form__label" for="password">パスワード</label>
            <input class="login-form__input" type="password" name="password" id="password">
            <p>
            @error('password')
            {{ $message }}
            @enderror
            </p>
        </div>
        <div class="form__button">
            <button class="form__button-submit" type="submit">ログインする</button>
        </div>
    </form>
    <a href="/registration">会員登録はこちら</a>
        
</div>
@endsection
