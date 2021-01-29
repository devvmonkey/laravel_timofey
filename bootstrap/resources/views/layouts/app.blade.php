<!DOCTYPE html>
<html lang="ru">

<head>

	<meta charset="utf-8">

	<title>OptimizedHTML 5</title>
	<meta name="description" content="Startup HTML template OptimizedHTML 5">

	<meta name="viewport" content="width=device-width">

	<link rel="icon" href="{{ URL::asset('img/favicon.png') }}">
	<meta property="og:image" content="{{ URL::asset('img/@1x/preview.jpg') }}">
	
	<link rel="stylesheet" href="{{ URL::asset('css/styles.min.css') }}">
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-PmY9l28YgO4JwMKbTvgaS7XNZJ30MK9FAZjjzXtlqyZCqBY6X6bXIkM++IkyinN+" crossorigin="anonymous">
  <link rel="stylesheet" href="https://unpkg.com/summernote@0.8.11/dist/summernote.css">

</head>

<body>
<script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>

	<!-- Custom HTML / Remove before use -->
	<header class="site-header">
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-3 col-md-6 order-lg-0 order-md-0 order-1">
					<a href="{{ url('/') }}" class="site-logo">
						<img src="img/logo.svg" alt="">
					</a>
					<div class="humburder">
						<div class="humburder-line humburder-line-1"></div>
						<div class="humburder-line humburder-line-2"></div>
						<div class="humburder-line humburder-line-3"></div>
						<div class="humburder-line humburder-line-4"></div>
					</div>
				</div>
				<div class="col-lg-6 order-lg-0 order-md-2 order-3 slide-mobile padding-0">
					<nav class="site-menu-header">
						<ul>
							<li><a class="active" href="{{ url('/') }}">Главная</a></li>
							<li><a href="{{ url('/tournament') }}">Турниры</a></li>
							<li><a href="{{ url('/drawings') }}">Розыгрыши</a></li>
							<li><a href="{{ url('/broadcasts') }}">Трансляции</a></li>
							<li><a href="{{ url('/') }}">Магазин</a></li>
             
						</ul>

					</nav>
				</div>
						
            @if (Auth::guest())
            <a class="float-right" href="{{ url('/login') }}">Войти</a>
        @else
          <div class="col-lg-3 col-md-6 order-lg-0 order-md-1 order-2 slide-mobile lk-login">
					<div class="login-on">
                        <div class="login-on-img">
                            <img src="{{ URL::asset('img/logon.png') }}" alt="">
                        </div>
                        <a href="/page">{{ Auth::user()->name }}</a>
                        <div class="menu-login">
                            <p>
                                <svg width="23" height="16" viewBox="0 0 23 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect x="1.42188" y="12.5" width="10" height="3" rx="1.5" stroke="#E65425"/>
                                    <rect x="1.42188" y="8.5" width="10" height="3" rx="1.5" stroke="#E65425"/>
                                    <rect x="1.42188" y="4.5" width="10" height="3" rx="1.5" stroke="#E65425"/>
                                    <rect x="12.4219" y="12.5" width="10" height="3" rx="1.5" stroke="#E65425"/>
                                    <rect x="12.4219" y="8.5" width="10" height="3" rx="1.5" stroke="#E65425"/>
                                    <rect x="12.4219" y="4.5" width="10" height="3" rx="1.5" stroke="#E65425"/>
                                    <rect x="12.4219" y="0.5" width="10" height="3" rx="1.5" stroke="#E65425"/>
                                    </svg>
                                    256 монет                                  
                            </p>
                            <p>
                                <svg width="21" height="20" viewBox="0 0 21 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M20.1171 12.1971H20.8973V7.51535H18.9076C18.0471 7.51535 17.347 6.81527 17.347 5.95477C17.347 5.37086 17.6695 4.84023 18.1886 4.56988L18.8532 4.22375L16.8662 0L0.940156 7.51188L0.941797 7.51535H0.921875V12.1971H1.70219C2.5627 12.1971 3.26277 12.8972 3.26277 13.7577C3.26277 14.6182 2.5627 15.3183 1.70219 15.3183H0.921875V20H20.8973V15.3182H20.117C19.2565 15.3182 18.5564 14.6182 18.5564 13.7577C18.5564 12.8972 19.2565 12.1971 20.1171 12.1971ZM11.5402 4.23766C11.7296 4.61387 12.1849 4.77332 12.5684 4.59293C12.9524 4.4123 13.1199 3.95898 12.9498 3.57281L16.1191 2.07793L16.8419 3.61445C16.1779 4.19887 15.7864 5.04437 15.7864 5.9548C15.7864 6.52309 15.9398 7.0559 16.2063 7.51539H4.59102L11.5402 4.23766ZM19.3367 16.7801V18.4394H15.8254C15.8254 18.0085 15.4761 17.6591 15.0452 17.6591C14.6142 17.6591 14.2649 18.0085 14.2649 18.4394H2.48246V16.7801C3.82715 16.4327 4.82332 15.2093 4.82332 13.7577C4.82332 12.306 3.82711 11.0825 2.48246 10.7352V9.0759H14.2648C14.2648 9.50684 14.6142 9.85617 15.0451 9.85617C15.4761 9.85617 15.8254 9.50684 15.8254 9.0759H19.3367V10.7352C17.992 11.0826 16.9958 12.306 16.9958 13.7577C16.9959 15.2094 17.992 16.4327 19.3367 16.7801Z" fill="#E65425"/>
                                </svg>
                                2 пропуска 
                            </p>
                            <ul>
                                <li><a href="lk-1.html">Личный кабнет</a></li>
                                <li><a href="team.html">Моя команда</a>
                                <li><a href="edit.html">Редактировать профиль</a></li>
				<li><a href="/page">Редактировать Турниры</a></li>
			        <li><a href="/pagedr">Редактировать Розыграши</a></li>
                                <li><a href="#">Промокоды</a></li>
                            </ul>
                            <a href="{{ route('logout') }}"
                   onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();" class="out">Выйти</a>
                        </div>
                    </div>
				</div>
			</div>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    {{ csrf_field() }}
                </form>  
        @endif
					</div>
				</div>
			</div>
		</div>
	</header>
      <!-- Left Side Of Navbar 
      <ul class="nav navbar-nav">
        <li><a href="{{ url('/') }}">Main</a></li>
        <li><a href="{{ url('/page') }}">Pages</a></li>
	<li><a href="{{ url('/list') }}">List</a></li>
	<li><a href="{{ url('/blog') }}">Blog</a></li>
      </ul>

       Right Side Of Navbar 
      <ul class="nav navbar-nav navbar-right">
         Authentication Links 
        @if (Auth::guest())
          <li><a href="{{ url('/login') }}">Login</a></li>
          <li><a href="{{ url('/register') }}">Register</a></li>
        @else
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
              {{ Auth::user()->name }} <span class="caret"></span>
            </a>

            <ul class="dropdown-menu" role="menu">
              <li>
                <a href="{{ route('logout') }}"
                   onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();"
                >
                  Logout
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    {{ csrf_field() }}
                </form>
              </li>
	      <li><a href="/cabinet">Account</a></li>
            </ul>
          </li>
        @endif
      </ul>
    </div>
  </div>
</nav>
-->

@yield('content')


<script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js" integrity="sha384-vhJnz1OVIdLktyixHY4Uk3OHEwdQqPppqYR8+5mjsauETgLOcEynD9oPHhhz18Nw" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-timeago/1.6.3/jquery.timeago.min.js"></script>
<script src="https://unpkg.com/summernote@0.8.11/dist/summernote.js"></script>
<script src="https://unpkg.com/sweetalert@2.1.2/dist/sweetalert.min.js"></script>
<script src="{{ URL::asset('owl/owl.carousel.min.js') }}"></script>
<script src="{{ URL::asset('js/main.js') }}"></script>
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
</body>
</html>
