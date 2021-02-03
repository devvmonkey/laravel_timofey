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
<link href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-PmY9l28YgO4JwMKbTvgaS7XNZJ30MK9FAZjjzXtlqyZCqBY6X6bXIkM++IkyinN+" crossorigin="anonymous">

	<link rel="stylesheet" href="/css/style.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://unpkg.com/summernote@0.8.11/dist/summernote.css">

</head>

<body class="body">

    <!-- Nav Panel -->
    <header id="header">

        <div class="topnav">
            <div class="logobar">
                <a href="/"><img class="logo" src="/img/logo.png" alt="Legion logo">
                    <p class="panel">Панель</p>
                </a>
            </div>



            <ul class="menu">
                <li>
                    <a href="#" id="keys">
                        <p>Ключи</p>
                    </a>
                </li>
                <li>
                    <a href="#" id="panels">
                        <p>Доступные панели</p>
                    </a>
                </li>
                <li>
                    <a href="#" id="log">
                        <p>Лог</p>
                    </a>
                </li>
<script
			  src="https://code.jquery.com/jquery-3.5.1.min.js"
			  integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
			  crossorigin="anonymous"></script>
<script>
$("#keys").click(function() {
    $('html, body').animate({
        scrollTop: $("#keys_div").offset().top
    }, 2000);
});

$("#panels").click(function() {
    $('html, body').animate({
        scrollTop: $("#panels_div").offset().top
    }, 2000);
});

$("#log").click(function() {
    $('html, body').animate({
        scrollTop: $("#log_div").offset().top
    }, 2000);
});


</script>
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
<script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js" integrity="sha384-vhJnz1OVIdLktyixHY4Uk3OHEwdQqPppqYR8+5mjsauETgLOcEynD9oPHhhz18Nw" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-timeago/1.6.3/jquery.timeago.min.js"></script>
<script src="https://unpkg.com/summernote@0.8.11/dist/summernote.js"></script>
<script src="https://unpkg.com/sweetalert@2.1.2/dist/sweetalert.min.js"></script>
<script src="{{ URL::asset('js/scripts.min.js') }}"></script>
@include('sweet::alert')





