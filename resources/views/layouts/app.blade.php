<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Legion</title>

    <link rel="stylesheet" href="/css/style.css">
    <link
        href="https://fonts.googleapis.com/css?family=Montserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap&subset=cyrillic,cyrillic-ext,latin-ext"
        rel="stylesheet">
</head>

<body class="body">

    <!-- Nav Panel -->
    <header id="header">

        <div class="topnav">
            <div class="logobar">
                <a href="/"><img class="logo" src="/img/logo.png" alt="Legion logo">
                    <p class="panel">панель</p>
                </a>
            </div>



            <ul class="menu">
                <li>
                    <a href="/reg">
                        <p>Ключи</p>
                    </a>
                </li>
                <li>
                    <a href="/avtorization.html">
                        <p>Баны</p>
                    </a>
                </li>
                <li>
                    <a href="/create_key">
                        <p>Лог</p>
                    </a>
                </li>
                <li>
                                                <a href="{{ route('logout') }}"
                   onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();" style="float:right"><p>Выйти</p></a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    {{ csrf_field() }}
                </form>
                </li>
            </ul>
        </div>
        <div style="clear: both;"></div>
    </header>
    <!-- End Nav Panel -->

@yield('content')



