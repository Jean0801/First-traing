<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>前台首頁</title>
	<!-- 插件規模越大的 放上面 -->
	<!-- bootstrap Core CSS CDN -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"
		integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
	<!-- swiper Core CSS CDN -->
	<link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css"/>
	<!-- fontawesome Core CSS CDN -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
		integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ=="
		crossorigin="anonymous" referrerpolicy="no-referrer" />

	<!-- layout CSS -->
	<link rel="stylesheet" href="{{ asset('/css/layout.css') }}">
	<link rel="stylesheet" href="{{ asset('/css/template.css') }}">
	@yield('css')

</head>

<body>
	<nav class="navbar navbar-expand-lg navbar-light table-warning">
		<div class="container">
			<a class="navbar-brand" href="/">
				<img src="//cdn1.cybassets.com/s/files/12991/theme/40198/assets/img/1630560629_f7f18f32_navbar_logo.png?1630560629" width="50" height="30"
					alt="">
			</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
				aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>

			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item">
						<a class="nav-link" href="/news">最新消息</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="/products">全部商品</a>
					</li>
					<div class="nav-item">
						<a class="nav-link" href="#">關於我們</a>
					</div>
					<div class="nav-item">
						<a class="nav-link" href="#contact-us">聯絡我們</a>
					</div>
					<div class="nav-item">
						<a class="nav-link" href="./checkout1.html">
							<i class="fas fa-shopping-cart"></i>
						</a>
					</div>
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
							data-toggle="dropdown" aria-expanded="false">
							<i class="fas fa-user"></i>
						</a>
						<div class="dropdown-menu" aria-labelledby="navbarDropdown">
							<a class="dropdown-item" href="">Login</a>
						</div>
					</li>
				</ul>
			</div>
		</div>
	</nav>

	@yield('main')

	<footer>
		<div class="py-5">
			<div class="container">
				<div class="row">
					<div class="col">
					</div>
					<div class="col">
						<ul class="footer-menu">
							<li class="footer-menu-item">CATEGORIES</li>
							<li class="footer-menu-item">First Link</li>
							<li class="footer-menu-item">Second Link</li>
							<li class="footer-menu-item">Third Link</li>
							<li class="footer-menu-item">Fourth Link</li>
						</ul>
					</div>
					<div class="col">
						<ul class="footer-menu">
							<li class="footer-menu-item">CATEGORIES</li>
							<li class="footer-menu-item">First Link</li>
							<li class="footer-menu-item">Second Link</li>
							<li class="footer-menu-item">Third Link</li>
							<li class="footer-menu-item">Fourth Link</li>
						</ul>
					</div>
					<div class="col">
						<ul class="footer-menu">
							<li class="footer-menu-item">CATEGORIES</li>
							<li class="footer-menu-item">First Link</li>
							<li class="footer-menu-item">Second Link</li>
							<li class="footer-menu-item">Third Link</li>
							<li class="footer-menu-item">Fourth Link</li>
						</ul>
					</div>
					<div class="col">
						<ul class="footer-menu">
							<li class="footer-menu-item">CATEGORIES</li>
							<li class="footer-menu-item">First Link</li>
							<li class="footer-menu-item">Second Link</li>
							<li class="footer-menu-item">Third Link</li>
							<li class="footer-menu-item">Fourth Link</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<div class="bg-light py-1">
			<div class="container d-flex justify-content-between">
				<div class="copyright">
					© 2020 Tailblocks — @knyttneve
				</div>
				<div class="community">
					<i class="fab fa-facebook-f"></i>
					<i class="fab fa-twitter"></i>
					<i class="fab fa-instagram"></i>
					<i class="fab fa-linkedin-in"></i>
				</div>
			</div>
		</div>
	</footer>

	<!-- jquery Core JS CDN -->
	<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
		integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
		crossorigin="anonymous"></script>
	<!-- popper Core JS CDN -->
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
		integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
		crossorigin="anonymous"></script>
	<!-- bootstrap Core JS CDN -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js"
		integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2"
		crossorigin="anonymous"></script>
	<!-- swiper Core JS CDN -->
	<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

	<!-- carousel JS -->
	<script src="{{ asset('/js/carousel.js') }}"></script>

	@yield('js')
</body>

</html>