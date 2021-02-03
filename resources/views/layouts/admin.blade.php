   <!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Legion</title>
<script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
    
    <link
        href="https://fonts.googleapis.com/css?family=Montserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap&subset=cyrillic,cyrillic-ext,latin-ext"
        rel="stylesheet">
<link href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-PmY9l28YgO4JwMKbTvgaS7XNZJ30MK9FAZjjzXtlqyZCqBY6X6bXIkM++IkyinN+" crossorigin="anonymous">

	<link rel="stylesheet" href="/css/style.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://unpkg.com/summernote@0.8.11/dist/summernote.css">
</head>

<body class="body">

    <header id="header">

        <div class="topnav"> 
            <div class="logobar">
                <a href="/"><img class="logo" src="/img/logo.png" alt="Legion logo">
                    <p class="panel">панель</p>
                </a>
            </div>
        </div>

    </header>
    <div class="container-fluid" >
<h1 style="color:white !important; font-size: 31px; margin-top: 30px;
margin-bottom: 6px;
margin-left: 54px; ">Админ панель</h1>

	<div class="row">
		<div class="col-sm-3" >


        <div class="admin_pan">
            <ul class="adm_menu">
                <li><a href="/panel/add">Создать панель</a> </li>
                <li><a href="/panel">Все панели</a></li>
                <li><a href="/">Добавить продавца</a></li>
                <li><a href="/sellers">Все продавцы</a></li>
		<li style="margin-top:9rem;">
<a href="{{ route('logout') }}"
                   onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();" >Выйти</a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    {{ csrf_field() }}
                </form>  
</li>


            </ul>
            
</div>
</div>
<div class="col-sm-9 fill_dark">
@yield('content')
<script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js" integrity="sha384-vhJnz1OVIdLktyixHY4Uk3OHEwdQqPppqYR8+5mjsauETgLOcEynD9oPHhhz18Nw" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-timeago/1.6.3/jquery.timeago.min.js"></script>
<script src="https://unpkg.com/summernote@0.8.11/dist/summernote.js"></script>
<script src="https://unpkg.com/sweetalert@2.1.2/dist/sweetalert.min.js"></script>
<script src="{{ URL::asset('js/scripts.min.js') }}"></script>
@include('sweet::alert')
<script>
  $(function() {
    window.App = {
      init: function() {
        this.timeago();
        this.summernote();
      },
      timeago: function() {
        $("time").timeago();
      },
      summernote: function() {
        $('textarea').summernote();
      }
    };
    App.init()
  });
</script>
</div>
</div>

</body>
</html>



