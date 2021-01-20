<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
	<title>TheNile HTML5 Multipurpose Travel Template</title>
	<meta name="author" content="Nile-Theme">
	<meta name="robots" content="index follow">
	<meta name="googlebot" content="index follow">
	<meta http-equiv="content-type" content="text/html; charset=utf-8">
	<meta name="keywords" content="Travel, HTML5, CSS3, Hotel , Multipurpose, Template, Create a Travel website fast">
	<meta name="description" content="HTML5 Multipurpose Template, Create a website fast">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- google fonts -->
	 <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,800%7CPoppins:200,300,300i,400,700,400i,500%7CDosis:300" rel="stylesheet">
	
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
	
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<!-- animate -->
	<link rel="stylesheet" href="{{ asset('assets/css/animate.css') }}" />
	<!-- owl Carousel assets -->
	<link href="{{ asset('assets/css/owl.carousel.css') }}" rel="stylesheet">
	<link href="{{ asset('assets/css/owl.theme.css')}}" rel="stylesheet">
	<!-- bootstrap -->
	<link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
	<!-- hover anmation -->
	<link rel="stylesheet" href="{{ asset('assets/css/hover-min.css') }}">
	<!-- flag icon -->
	<link rel="stylesheet" href="{{ asset('assets/css/flag-icon.min.css') }}">
	<!-- main style -->
	<link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
	<!-- colors -->
	<link rel="stylesheet" href="{{ asset('assets/css/colors/main.css') }}">
	<!-- elegant icon -->
	<link rel="stylesheet" href="{{ asset('assets/css/elegant_icon.css') }}">
	<!-- jquery library  -->
	<script type="text/javascript" src="{{ asset('assets/js/jquery-3.2.1.min.js') }}"></script>
	<!-- fontawesome  -->
	<script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>  
	<!-- google maps api  -->
    <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script> 
	<script type="text/javascript" src="{{ asset('assets/js/jquery.gomap-1.3.3.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('assets/js/typewriter.js') }}"></script>

	<style>
		.container {
			max-width: 1400px;
		}

	</style>
	
</head>
<body class="background-white">

	<header class="background-main-color">
		<div class="header-output">
			<div class="container header-in">
				<div class="row">
					<div class="col-lg-3">
						<h5 class="margin-tb-3px"><a id="logo" href="01-home.html" class="font-weight-700 d-inline-block margin-tb-5px"><img src="{{ asset('assets/img/logo-light-2.png') }}" alt=""></a></h5>
					</div>
					<div class="col-lg-9 position-inherit">
						
					</div>
				</div>
			</div>
		</div>
	</header>

    <div class="padding-tb-100px">
		<div class="container text-center">

			<div class="title margin-bottom-30px">
			
			 	 <div class="row text-center">
                    @yield('testques')
				</div>

			</div>
		</div>
	</div>
	




</body>

</html>

</html>