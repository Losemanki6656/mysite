
<!DOCTYPE HTML>
<!--
	Industrious by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html>
	<head>
		<title>bmtu</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<link rel="stylesheet" href="assets2/css/main.css" />

	<meta name="author" content="Nile-Theme">
	<meta name="robots" content="index follow">
	<meta name="googlebot" content="index follow">
	<meta http-equiv="content-type" content="text/html; charset=utf-8">
	<meta name="keywords" content="Travel, HTML5, CSS3, Hotel , Multipurpose, Template, Create a Travel website fast">
	<meta name="description" content="HTML5 Multipurpose Template, Create a website fast">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- google fonts -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,800%7CPoppins:200,300,300i,400,700,400i,500%7CDosis:300" rel="stylesheet">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

	<!-- animate -->
	<link rel="stylesheet" href="assets/css/animate.css" />
	<!-- owl Carousel assets -->
	<link href="assets/css/owl.carousel.css" rel="stylesheet">
	<link href="assets/css/owl.theme.css" rel="stylesheet">
	<!-- bootstrap -->
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<!-- hover anmation -->
	<link rel="stylesheet" href="assets/css/hover-min.css">
	<!-- flag icon -->
	<link rel="stylesheet" href="assets/css/flag-icon.min.css">
	<!-- main style -->
	<link rel="stylesheet" href="assets/css/style.css">
	<!-- colors -->
	<link rel="stylesheet" href="assets/css/colors/main.css">
	<!-- elegant icon -->
	<link rel="stylesheet" href="assets/css/elegant_icon.css">

	<!-- jquery library  -->
	<script type="text/javascript" src="assets/js/jquery-3.2.1.min.js"></script>
	<!-- fontawesome  -->
	<script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
	<!-- google maps api  -->
	<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
	<script type="text/javascript" src="assets/js/jquery.gomap-1.3.3.min.js"></script>
	<script type="text/javascript" src="assets/js/typewriter.js"></script>
	
	<style>
		.container {
			max-width: 1400px;
		}

	</style>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	</head>

	<body class="is-preload">

		<!-- Header -->
			<header id="header">
				<a class="logo" href="index.html">  BMTU</a>
				<nav>
					<a href="#menu">Menu</a>
				</nav>
			</header>

		<!-- Nav -->
			<nav id="menu">
				<ul class="links">
					<li><a href="index.html">Bosh saxifa</a></li>
					<li><a href="elements.html">Vakansiyalar</a></li>
					<li><a href="generic.html">Ariza topshirish</a></li>
				</ul>
			</nav>

		<!-- Banner -->
			<section id="banner">
				<div class="inner">
					<h1>Buxoro mintaqaviy temir yo'l uzeli</h1>
			
					<p> Bo'sh ish o'rinlari haqida ma'lumot ! </p>
				</div>
				<video autoplay loop muted playsinline src="videos/banner.mp4"></video>
			</section>

		
			<div class="background-dark text-grey">
				<div class="container text-center">
					<div class="row">
						<div class="col-lg-3 padding-tb-45px">
							<h4><span class="font-2 font-weight-600">+200 </span></h4>
							<span class="text-medium text-grey-2">Barcha vakansiyalar</span>
						</div>
						<div class="col-lg-3 padding-tb-45px">
							<h4><span class="font-2 font-weight-600">+25 </span></h4>
							<span class="text-medium text-grey-2"> Ariza topshirilgan vakasiyalar </span>
						</div>
						<div class="col-lg-3 padding-tb-45px">
							<h4><span class="font-2 font-weight-600">+170 </span></h4>
							<span class="text-medium text-grey-2">Ariza topshirilmagan vakansiyalar</span>
						</div>
						<div class="col-lg-3 padding-tb-45px">
							<h4><span class="font-2 font-weight-600">+50 </span></h4>
							<span class="text-medium text-grey-2">Statistika</span>
						</div>
					</div>
				</div>
			</div>
		
	<div class="padding-tb-100px">
		<div class="container">

			<div class="title text-center margin-bottom-30px">
				<h1>Korxonalar!</h1>
				<p>Sizga qaysi korxonada ishlash qulay?!</p>
			
			</div>
			<div class="row">
				@foreach($tests as $test)
					<div class="col-lg-3 col-md-6">
						<div class="opacity-hover-9 hvr-bob margin-bottom-35px">
							<div class="img">
								<a href="{{ route('vacand', ['id' => $test]) }}"><img class="box-shadow border-radius-5" src="assets/img/screenshoot/1.png" alt=""></a>
							</div>
							 <P></P>
							         <p class="fst-normal text-center">{{$test->otdel}}</p>																		
									<p class="text-primary text-center">{{$test->cout}}	ta bo'sh ish o'rni!</p>																											
							</a>
						</div>
					</div>
				@endforeach							
			</div>

		</div>
	</div>
		
	<section class="wrapper">
		<div class="inner">
			<header class="special">
				<h2>Faucibus consequat lorem</h2>
				<p>In arcu accumsan arcu adipiscing accumsan orci ac. Felis id enim aliquet. Accumsan ac integer lobortis commodo ornare aliquet accumsan erat tempus amet porttitor.</p>
			</header>
			<div class="testimonials">
				<section>
					<div class="content">
						<blockquote>
							<p>Nunc lacinia ante nunc ac lobortis ipsum. Interdum adipiscing gravida odio porttitor sem non mi integer non faucibus.</p>
						</blockquote>
						<div class="author">
							<div class="image">
								<img src="videos/pic01.jpg" alt="" />
							</div>
							<p class="credit">- <strong>Jane Doe</strong> <span>CEO - ABC Inc.</span></p>
						</div>
					</div>
				</section>
				<section>
					<div class="content">
						<blockquote>
							<p>Nunc lacinia ante nunc ac lobortis ipsum. Interdum adipiscing gravida odio porttitor sem non mi integer non faucibus.</p>
						</blockquote>
						<div class="author">
							<div class="image">
								<img src="videos/pic03.jpg" alt="" />
							</div>
							<p class="credit">- <strong>John Doe</strong> <span>CEO - ABC Inc.</span></p>
						</div>
					</div>
				</section>
				<section>
					<div class="content">
						<blockquote>
							<p>Nunc lacinia ante nunc ac lobortis ipsum. Interdum adipiscing gravida odio porttitor sem non mi integer non faucibus.</p>
						</blockquote>
						<div class="author">
							<div class="image">
								<img src="videos/pic02.jpg" alt="" />
							</div>
							<p class="credit">- <strong>Janet Smith</strong> <span>CEO - ABC Inc.</span></p>
						</div>
					</div>
				</section>
			</div>
		</div>
	</section>


		<!-- Footer -->
			<footer id="footer">
				<div class="inner">
					<div class="content">
						<section>
							<h3>Accumsan montes viverra</h3>
							<p>Nunc lacinia ante nunc ac lobortis. Interdum adipiscing gravida odio porttitor sem non mi integer non faucibus ornare mi ut ante amet placerat aliquet. Volutpat eu sed ante lacinia sapien lorem accumsan varius montes viverra nibh in adipiscing. Lorem ipsum dolor vestibulum ante ipsum primis in faucibus vestibulum. Blandit adipiscing eu felis iaculis volutpat ac adipiscing sed feugiat eu faucibus. Integer ac sed amet praesent. Nunc lacinia ante nunc ac gravida.</p>
						</section>
						<section>
							<h4>Sem turpis amet semper</h4>
							<ul class="alt">
								<li><a href="#">Dolor pulvinar sed etiam.</a></li>
								<li><a href="#">Etiam vel lorem sed amet.</a></li>
								<li><a href="#">Felis enim feugiat viverra.</a></li>
								<li><a href="#">Dolor pulvinar magna etiam.</a></li>
							</ul>
						</section>
						<section>
							<h4>Magna sed ipsum</h4>
							<ul class="plain">
								<li><a href="#"><i class="icon fa-twitter">&nbsp;</i>Twitter</a></li>
								<li><a href="#"><i class="icon fa-facebook">&nbsp;</i>Facebook</a></li>
								<li><a href="#"><i class="icon fa-instagram">&nbsp;</i>Instagram</a></li>
								<li><a href="#"><i class="icon fa-github">&nbsp;</i>Github</a></li>
							</ul>
						</section>
					</div>
					<div class="copyright">
						&copy; Untitled. Photos <a href="https://unsplash.co">Unsplash</a>, Video <a href="https://coverr.co">Coverr</a>.
					</div>
				</div>
			</footer>

		<!-- Scripts -->
			<script src="assets2/js/jquery.min.js"></script>
			<script src="assets2/js/browser.min.js"></script>
			<script src="assets2/js/breakpoints.min.js"></script>
			<script src="assets2/js/util.js"></script>
			<script src="assets2/js/main.js"></script>

	</body>
</html>