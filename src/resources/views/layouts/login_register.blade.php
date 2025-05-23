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
        <header class="login-header">
            
                <img src="{{ asset('images/logo.svg') }}" alt="ロゴ" class="logo">
            
        </header>
        <div class="content">
            @yield('content')
        </div>
    </div>
</body>
</html>