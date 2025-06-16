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
        <header class="puroduct-header">
            
                <img src="{{ asset('images/logo.svg') }}" alt="ロゴ" class="logo">
            
            <nav class="header__nav">
                <ul class="header__list">
                
                    <li class="header__list-item">
                    <form class="search-form">
                    <div class="search-form__item">
                    <input class="search-form__item-input" placeholder="なにをお探しですか？" type="text" />
                    <button class="header__form--target">マイページ</button>
                    <button class="header__form--target">出品</button>



                    </div>
                    </form>
                        
                            @csrf
                            <button class="header__form--logout" type="submit">ログアウト</button>
                        </form>
                    </li>
                </ul>
            </nav>
        </header>
    </div>
        <div class="content">
            @yield('content')
        </div>
    </div>
</body>
</html>