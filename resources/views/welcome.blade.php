
<!DOCTYPE HTML>
<html>
	<head>
		<title>Bmtu_Vacancies</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<link rel="stylesheet" href="assets/css/main.css" />

		<!-- google fonts -->
	
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

	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

	<!-- Vendor CSS Files -->
	<link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
	<link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
	<link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
	<link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
	<link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
	<link href="assets/vendor/aos/aos.css" rel="stylesheet">
  
	<!-- Template Main CSS File -->
	<link href="assets/css/style1.css" rel="stylesheet">

	
	</head>

	<body>

		<!-- Header -->
		<header id="header" class="fixed-top d-flex align-items-center">
			<div class="container d-flex align-items-center">
		
			  <div class="logo me-auto">
				<div class="text-white"><a href="/"> <span>Vacancies</span> </a> </div>
			  </div>
		
			  <nav class="nav-menu d-none d-lg-block">
				<ul>
				  <li class="active"><a href="#/">Buxoro MTU UK</a></li>
				  <li><a href="#about">About</a></li>
				  <li><a href="#services">Services</a></li>
				  <li><a href="#portfolio">Portfolio</a></li>
				  <li><a href="#team">Team</a></li>
				  <li><a href="#pricing">Pricing</a></li>
				  <li><a href="#contact">Contact</a></li>
		
				  <li class="get-started"><a href="/">Bosh saxifa</a></li>
				</ul>
			  </nav><!-- .nav-menu -->
		
			</div>
		  </header>

	
			
		<!-- Banner -->
			<section id="banner">
				<div class="inner">
					<h2 data-aos="fade-up">Buxoro mintaqaviy temir yo'l uzeli</h2>
			
					<p data-aos="fade-up"> Bo'sh ish o'rinlari haqida ma'lumot ! </p>
				</div>
				<video autoplay loop muted playsinline src="images/banner.mp4"></video>
			</section>

			<div class="background-black text-grey">
				<div class="container text-center">	
					<div class="row">
						<div class="col-lg-3 padding-tb-45px" data-aos="fade-up">
							<h4><span class="font-2 font-weight-600" data-aos="fade-up">+200 </span></h4>
							<span class="text-medium text-grey-2" data-aos="fade-up">Barcha vakansiyalar</span>
						</div>
						<div class="col-lg-3 padding-tb-45px" data-aos="fade-up">
							<h4><span class="font-2 font-weight-600" data-aos="fade-up">+25 </span></h4>
							<span class="text-medium text-grey-2" data-aos="fade-up"> Ariza topshirilgan vakasiyalar </span>
						</div>
						<div class="col-lg-3 padding-tb-45px" data-aos="fade-up">
							<h4><span class="font-2 font-weight-600" data-aos="fade-up">+170 </span></h4>
							<span class="text-medium text-grey-2" data-aos="fade-up">Ariza topshirilmagan vakansiyalar</span>
						</div>
						<div class="col-lg-3 padding-tb-45px" data-aos="fade-up">
							<h4><span class="font-2 font-weight-600" data-aos="fade-up">+50 </span></h4>
							<span class="text-medium text-grey-2" data-aos="fade-up">Statistika</span>
						</div>
					</div>
				</div>
			</div>
		
	<div class="padding-tb-100px">
		<div class="container">

			<section id="about" class="about">
				<div class="container">
	
				<div class="section-title" data-aos="fade-up">
					<h2>Bo'sh ish o'rinlari</h2>
				</div>
			<div class="row">
				@foreach($tests as $test)
					<div class="col-lg-3 col-md-6">
						<div class="opacity-hover-9 hvr-bob margin-bottom-35px">
							<div class="img">
								<a href="{{ route('vacand', ['id' => $test]) }}"><img class="box-shadow border-radius-5" data-aos="fade-up"  src="assets/img/screenshoot/{{$test->id}}.jpg" alt=""></a>
							</div>
							 <P></P>																	
								@if ( $test->cout == 0 )
								<p class="text-dark fw-bold text-center" data-aos="fade-up"> <font  face="Times New Roman"> Bo'sh ish o'rni mavjud emas ! </font> </p>		
								@else
								<p class="text-danger fw-bold text-center" data-aos="fade-up"> <font  face="Times New Roman"> {{$test->cout}}	ta bosh ish orni! </font> </p>	
								@endif	 																											
							</a>
						</div>
					</div>
				@endforeach						
			</div>
				</div>
			</section>

		</div>
	</div>
		
	<section id="cta" class="wrapper">
		<div class="inner">
			<h2 data-aos="fade-up">--------</h2>
			<p  data-aos="fade-up">
			-----------------------	
			</p>
		</div>
	</section>


	<section class="wrapper">
		<div class="inner">
			<header class="special">
				
				<div class="section-title" data-aos="fade-up">
					<h2>Sistema administratorlari</h2>
					<p>Saytning qaysidir qismida tushunmovchiliklar bo'lsa murojat qilishingiz mumkin.</p>
				  </div>
			</header>
			<div class="testimonials">
				<section>
					<div class="content" data-aos="fade-up">
							<p class="text-center fw-bold text-primary" data-aos="fade-up"><font face="Times New Roman">Katta inspektor </font></p>
						<div class="author">
							<div class="image">
								<img src="images/pic01.jpg" data-aos="fade-up" alt="" />
							</div>
							<p class="credit" data-aos="fade-up">- <strong>Jane Doe</strong> <span>CEO - ABC Inc.</span></p>
						</div>
					</div>
				</section>
				<section>
					<div class="content" data-aos="fade-up">
						<p class="text-center fw-bold text-primary" data-aos="fade-up"><font face="Times New Roman">Katta inspektor </font></p>
						<div class="author">
							<div class="image">
								<img src="images/pic03.jpg" data-aos="fade-up" alt="" />
							</div>
							<p class="credit" data-aos="fade-up">- <strong>John Doe</strong> <span>CEO - ABC Inc.</span></p>
						</div>
					</div>
				</section>
				<section>
					<div class="content" data-aos="fade-up">
						<p class="text-center fw-bold text-primary" data-aos="fade-up"><font face="Times New Roman">Katta inspektor </font></p>	
						<div class="author">
							<div class="image">
								<img src="images/pic02.jpg" data-aos="fade-up" alt="" />
							</div>
							<p class="credit" data-aos="fade-up">- <strong>Janet Smith</strong> <span>CEO - ABC Inc.</span></p>
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
							<h4 class="text-dark">Sem turpis amet semper</h4>
							<ul class="alt text-dark">
								<li ><a class="text-primary" href="#">Dolor pulvinar sed etiam.</a></li>
								<li><a class="text-primary" href="#">Etiam vel lorem sed amet.</a></li>
								<li><a class="text-primary" href="#">Felis enim feugiat viverra.</a></li>
								<li><a class="text-primary" href="#">Dolor pulvinar magna etiam.</a></li>
							</ul>
						</section>
						<section>
							<h4>Ijtimoiy tarmoqlar</h4>
							<ul class="plain">
								<li><a href="#"><i class="icon fa-twitter">&nbsp;</i>Twitter</a></li>
								<li><a href="#"><i class="icon fa-facebook">&nbsp;</i>Facebook</a></li>
								<li><a href="#"><i class="icon fa-instagram">&nbsp;</i>Instagram</a></li>
							</ul>
						</section>
					</div>
					<div class="copyright">
						&copy; Handcrafted by   <a class="text-primary" href="https://unsplash.co"> Boboqulov Jobir </a>, Tel: <a class="text-primary" href="https://coverr.co"> +998977226656</a>.
					</div>
				</div>
			</footer>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

			<script src="assets/vendor/jquery/jquery.min.js"></script>
			<script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
			<script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
			<script src="assets/vendor/php-email-form/validate.js"></script>
			<script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script>
			<script src="assets/vendor/counterup/counterup.min.js"></script>
			<script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
			<script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
			<script src="assets/vendor/venobox/venobox.min.js"></script>
			<script src="assets/vendor/aos/aos.js"></script>

			<!-- Template Main JS File -->
			<script src="assets/js/main1.js"></script>

	</body>
</html>