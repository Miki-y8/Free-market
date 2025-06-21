<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>COACHTECH</title>
    <link rel="stylesheet" href="{{asset('css/sanitize.css')}}">
    <link rel="stylesheet" href="{{asset('css/common.css')}}">
    @yield('css')
</head>

<body>
    <div class="app">
        <header class="product-header">
            
            <img src="{{ asset('images/logo.svg') }}" alt="ロゴ" class="logo">

                <form class="form" action="/logout" method="post">
                    @csrf
                    <div class="search-form__item">
                        <input class="search-form__item-input" placeholder="なにをお探しですか？" type="text" />
                    </div>
            
                    <nav class="header__nav">
                    @if (Auth::check())
                        <ul class="header__list">
                            <li class="header__list-item">
                                <button class="header__form--target">マイページ</button>
                                <button class="header__form--target">出品</button>
                                <button class="header__form--logout" type="submit">ログアウト</button>
                            </li>
                            @endif
                        </ul>
                    </nav>
                </form>
        </header>
    </div>
            @yield('content')

    </div>
</body>
</html>