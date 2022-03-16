<!DOCTYPE HTML>
<html lang="{{ app()->getLocale() }}">
	<head>
  	<meta charset="utf-8">
  	<meta http-equiv="X-UA-Compatible" content="IE=edge">
  	<!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
      
  	<title>@yield('title')</title>
  	
  	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<meta name="description" content="Free HTML5 Website Template by freehtml5.co" />
  	<meta name="keywords" content="free website templates, free html5, free template, free bootstrap, free website template, html5, css3, mobile first, responsive" />
  	<meta name="author" content="freehtml5.co" />
  	<!-- <link href="https://fonts.googleapis.com/css?family=Work+Sans:300,400,500,700,800" rel="stylesheet">	 -->
  	<link href="https://fonts.googleapis.com/css?family=Inconsolata:400,700" rel="stylesheet">
  	
  	<!--Animate.css -->
  	<link rel="stylesheet" href="{{ asset('/css/animate.css') }}">
  	<!--Icomoon Icon Fonts-->
  	<link rel="stylesheet" href="{{ asset('/css/icomoon.css') }}">
  	<!--Bootstrap  -->
  	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
  	<link rel="stylesheet" href="{{ asset('/css/bootstrap.css') }}">
  	 <!--Flexslider  -->
  	<link rel="stylesheet" href="{{ asset('/css/flexslider.css') }}">
  	 <!--Theme style  -->
  	<link rel="stylesheet" href="{{ asset('/css/style.css') }}">
  	 <!--Modernizr JS -->
  	<script src="{{ asset('/js/modernizr-2.6.2.min.js') }}"></script>
  	
  	 <!--jQuery -->
  	<script src="{{ asset('/js/jquery.min.js') }}"></script>
  	 <!--jQuery Easing -->
  	<script src="{{ asset('/js/jquery.easing.1.3.js') }}"></script>
  	 <!--Bootstrap -->
  	<script src="{{ asset('/js/bootstrap.min.js') }}"></script>
  	 <!--Waypoints -->
  	<script src="{{ asset('/js/jquery.waypoints.min.js') }}"></script>
  	 <!--Flexslider -->
  	<script src="{{ asset('/js/jquery.flexslider-min.js') }}"></script>
  	<!--Main--> 
  	<script src="{{ asset('/js/main.js') }}"></script>
  	<link href="{{ asset('css/candidate_index.css') }}" rel="stylesheet">
  	<!--chat-->
  	<script src="{{ asset('/js/chat.js') }}"></script>
  
    <!--Icon -->
    <link href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" rel="stylesheet">
	</head>
	
	<body>
	<div class="fh5co-loader"></div>
  	<div id="page">
  	  <nav class="fh5co-nav" role="navigation">
    		<div class="top-menu">
    			<div class="container">
    				<div class="row">
    					<div class="col-xs-1 col-md-1">
    						<div id="fh5co-logo"><a href="/">Cheers<span>.</span></a></div>
    					</div>
    					<div class="col-xs-11 col-md-11 text-right menu-1">
    						<ul>
    							<li><a href="{{ action('Admin\TopController@display') }}", class="fas fa-home"> ホーム</a></li>
    							<li><a href="{{ action('Admin\ProfileController@edit') }}", class="fa fa-cog"> プロフィール</a></li>
    							<li><a href="{{ action('Admin\CandidateController@index') }}", class="fas fa-users"> 相手を探す</a></li>
    							<li><a href="{{ action('Admin\MatchController@index') }}", class="fas fa-heartbeat"> マッチ一覧</a></li>
    							<li><a href="{{ action('Admin\RestaurantController@index') }}", class="fas fa-utensils"> お店を探す</a></li>
                  @guest
                    <li class="btn-cta"><a class="nav-link " href="{{ route('login') }}">{{ __('Login') }}</a></li>
                  {{-- ログインしていたらユーザー名とログアウトボタンを表示 --}}
                  @else
                    <li class="nav-item dropdown">
                      <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ Auth::user()->name }} 
                      </a>
                      <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                          {{ __('Logout') }}
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                          @csrf
                        </form>
                      </div>
                    </li>
                  @endguest
    						</ul>
    					</div>
    				</div>
    			</div>
    		</div>
    	</nav>
    	@if (session('flash_message'))
        <div class="flash_message bg-success text-center py-3 my-0">
          {{ session('flash_message') }}  
        </div>
      @endif
    	<main class="py-4">
        @yield('content')
      </main>
  	</div>
	</div>
	</body>
</heml>