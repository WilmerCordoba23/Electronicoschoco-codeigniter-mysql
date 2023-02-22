<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		 <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

		<title>Electronicos</title>

		<!-- Google font -->
		<link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700" rel="stylesheet">

		<!-- Bootstrap -->
		<link type="text/css" rel="stylesheet" href="<?php echo base_url().'assets/user/css/bootstrap.min.css'?>"/>

		<!-- Slick -->
		<link type="text/css" rel="stylesheet" href="<?php echo base_url().'assets/user/css/slick.css'?>"/>
		<link type="text/css" rel="stylesheet" href="<?php echo base_url().'assets/user/css/slick-theme.css'?>"/>

		<!-- nouislider -->
		<link type="text/css" rel="stylesheet" href="<?php echo base_url().'assets/user/css/nouislider.min.css'?>"/>

		<!-- Font Awesome Icon -->
		<link rel="stylesheet" href="<?php echo base_url().'assets/user/css/font-awesome.min.css'?>"/>

		<!-- Custom stlylesheet -->
		<link type="text/css" rel="stylesheet" href="<?php echo base_url().'assets/user/css/style.css'?>"/>




		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->

    </head>
	<body>
		<!-- HEADER -->
		<header>

			<!-- MAIN HEADER -->
			<div id="header">
				<!-- container -->
				<div class="container">
					<!-- row -->
					<div class="row">
						<!-- LOGO -->
						<div class="col-md-3">
							<div class="header-logo">
								<a href="<?php echo base_url().'index.php/user'?>" class="logo">
									<img src="<?php echo base_url().'assets/user/img/logo.png'?>" alt="">
								</a>
							</div>
						</div>
						<!-- /LOGO -->

						<!-- SEARCH BAR -->
						<div class="col-md-6">
							<div class="header-search">
								<form>
									<!--
									<select class="input-select">
										<option value="0">Categorias</option>
										<option value="1">Categoria 01</option>
										<option value="1">Categoria 02</option>
									</select>
		-->
									<input class="input" placeholder="Buscar">
									<button class="search-btn">Buscador</button>
								</form>
							</div>
						</div>
						<!-- /SEARCH BAR -->

						<!-- ACCOUNT -->
						<div class="col-md-3 clearfix">
							<div class="header-ctn">
								

								<!-- Cart -->
								<div class="dropdown">
									<a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
										<i class="fa fa-shopping-cart"></i>
										<span>Carrito</span>
										<div class="qty">3</div>
									</a>
									<div class="cart-dropdown">
										<div class="cart-list">
											<div class="product-widget">
												<div class="product-img">
													<img src="<?php echo base_url().'assets/user/img/product01.png'?>" alt="">
												</div>
												<div class="product-body">
													<h3 class="product-name"><a href="#">Portatil</a></h3>
													<h4 class="product-price"><span class="qty">1x</span>$1,680.000</h4>
												</div>
												<button class="delete"><i class="fa fa-close"></i></button>
											</div>

											<div class="product-widget">
												<div class="product-img">
													<img src="<?php echo base_url().'assets/user/img/product02.png'?>" alt="">
												</div>
												<div class="product-body">
													<h3 class="product-name"><a href="#">Audifonos</a></h3>
													<h4 class="product-price"><span class="qty">3x</span>$80.000</h4>
												</div>
												<button class="delete"><i class="fa fa-close"></i></button>
											</div>
										</div>
										<div class="cart-summary">
											<small>2 productos agregados</small>
											<h5>SUBTOTAL: $1,760.000</h5>
										</div>
										<div class="cart-btns">
											<a href="<?php echo base_url().'index.php/verificar_productos'?>">Ver Carrito</a>
											
										</div>
									</div>
								</div>
								<!-- /Cart -->

								<!-- Menu Toogle -->
								<div class="menu-toggle">
									<a href="#">
										<i class="fa fa-bars"></i>
										<span>Menu</span>
									</a>
								</div>
								<!-- /Menu Toogle -->
							</div>
						</div>
						<!-- /ACCOUNT -->
					</div>
					<!-- row -->
				</div>
				<!-- container -->
			</div>
			<!-- /MAIN HEADER -->
		</header>
		<!-- /HEADER -->

		<!-- NAVIGATION -->
		<nav id="navigation">
			<!-- container -->
			<div class="container">
				<!-- responsive-nav -->
				<div id="responsive-nav">
					<!-- NAV -->
					<ul class="main-nav nav navbar-nav">
						<li class="active"><a href="#">Inicio</a></li>
						<li><a href="<?php echo base_url().'index.php/categoria_productos'?>">Categorias</a></li>

					</ul>
					<!-- /NAV -->
				</div>
				<!-- /responsive-nav -->
			</div>
			<!-- /container -->
		</nav>
		<!-- /NAVIGATION -->

		<!-- SECTION -->
		<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<!-- shop -->
					<div class="col-md-4 col-xs-6">
						<div class="shop">
							<div class="shop-img">
								<img src="<?php echo base_url().'assets/user/img/shop01.png'?>" alt="">
							</div>
							<div class="shop-body">
								<h3>Portatiles<br>Colección</h3>
								
							</div>
						</div>
					</div>
					<!-- /shop -->

					<!-- shop -->
					<div class="col-md-4 col-xs-6">
						<div class="shop">
							<div class="shop-img">
								<img src="<?php echo base_url().'assets/user/img/shop03.png'?>" alt="">
							</div>
							<div class="shop-body">
								<h3>Accesorios<br>Colección</h3>
								
							</div>
						</div>
					</div>
					<!-- /shop -->

					<!-- shop -->
					<div class="col-md-4 col-xs-6">
						<div class="shop">
							<div class="shop-img">
								<img src="<?php echo base_url().'assets/user/img/shop02.png'?>" alt="">
							</div>
							<div class="shop-body">
								<h3>Camaras<br>Colección</h3>
								
							</div>
						</div>
					</div>
					<!-- /shop -->
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /SECTION -->

		<!-- SECTION -->
		<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">

					<!-- section title -->
					<div class="col-md-12">
						<div class="section-title">
							<h3 class="title">Nuevos productos</h3>
							<div class="section-nav">
								<ul class="section-tab-nav tab-nav">
									<li class="active"><a data-toggle="tab" href="#tab1">Portatiles</a></li>
									<li><a data-toggle="tab" href="#tab1">Celulares</a></li>
									<li><a data-toggle="tab" href="#tab1">Camaras</a></li>
									<li><a data-toggle="tab" href="#tab1">Accesorios</a></li>
								</ul>
							</div>
						</div>
					</div>
					<!-- /section title -->

					<!-- Products tab & slick -->
					<div class="col-md-12">
						<div class="row">
							<div class="products-tabs">
								<!-- tab -->
								<div id="tab1" class="tab-pane active">
									<div class="products-slick" data-nav="#slick-nav-1">
										<!-- product -->
										<div class="product">
											<div class="product-img">
												<img src="<?php echo base_url().'assets/user/img/product01.png'?>" alt="">
												<div class="product-label">
													<span class="sale">-30%</span>
													<span class="new">NUEVO</span>
												</div>
											</div>
											<div class="product-body">
												<p class="product-category">Categoria</p>
												<h3 class="product-name"><a href="#">Producto</a></h3>
												<h4 class="product-price">$980.00 <del class="product-old-price">$990.00</del></h4>
												<div class="product-rating">
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
												</div>
												<div class="product-btns">
													<button class="add-to-wishlist"><i class="fa fa-heart-o"></i><span class="tooltipp">añadir a la lista de deseos</span></button>
													<button class="add-to-compare"><i class="fa fa-exchange"></i><span class="tooltipp">Añadir a comparar</span></button>
													<button class="quick-view"><i class="fa fa-eye"></i><span class="tooltipp">Vista rápida</span></button>
												</div>
											</div>
											<div class="add-to-cart">
												<button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> añadir al carrito</button>
											</div>
										</div>
										<!-- /product -->

										<!-- product -->
										<div class="product">
											<div class="product-img">
												<img src="<?php echo base_url().'assets/user/img/product02.png'?>" alt="">
												<div class="product-label">
													<span class="new">NUEVO</span>
												</div>
											</div>
											<div class="product-body">
												<p class="product-category">Categoria</p>
												<h3 class="product-name"><a href="#">Producto</a></h3>
												<h4 class="product-price">$980.00 <del class="product-old-price">$990.00</del></h4>
												<div class="product-rating">
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star-o"></i>
												</div>
												<div class="product-btns">
													<button class="add-to-wishlist"><i class="fa fa-heart-o"></i><span class="tooltipp">añadir a la lista de deseos</span></button>
													<button class="add-to-compare"><i class="fa fa-exchange"></i><span class="tooltipp">Añadir a comparar</span></button>
													<button class="quick-view"><i class="fa fa-eye"></i><span class="tooltipp">Vista rápida</span></button>
												</div>
											</div>
											<div class="add-to-cart">
												<button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> añadir al carrito</button>
											</div>
										</div>
										<!-- /product -->

										<!-- product -->
										<div class="product">
											<div class="product-img">
												<img src="<?php echo base_url().'assets/user/img/product03.png'?>" alt="">
												<div class="product-label">
													<span class="sale">-30%</span>
												</div>
											</div>
											<div class="product-body">
												<p class="product-category">Categoria</p>
												<h3 class="product-name"><a href="#">Producto</a></h3>
												<h4 class="product-price">$980.00 <del class="product-old-price">$990.00</del></h4>
												<div class="product-rating">
												</div>
												<div class="product-btns">
													<button class="add-to-wishlist"><i class="fa fa-heart-o"></i><span class="tooltipp">añadir a la lista de deseos</span></button>
													<button class="add-to-compare"><i class="fa fa-exchange"></i><span class="tooltipp">Añadir a comparar</span></button>
													<button class="quick-view"><i class="fa fa-eye"></i><span class="tooltipp">Vista rápida</span></button>
												</div>
											</div>
											<div class="add-to-cart">
												<button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> añadir al carrito</button>
											</div>
										</div>
										<!-- /product -->

										<!-- product -->
										<div class="product">
											<div class="product-img">
												<img src="<?php echo base_url().'assets/user/img/product04.png'?>" alt="">
											</div>
											<div class="product-body">
												<p class="product-category">Categoria</p>
												<h3 class="product-name"><a href="#">Producto</a></h3>
												<h4 class="product-price">$980.00 <del class="product-old-price">$990.00</del></h4>
												<div class="product-rating">
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
												</div>
												<div class="product-btns">
													<button class="add-to-wishlist"><i class="fa fa-heart-o"></i><span class="tooltipp">añadir a la lista de deseos</span></button>
													<button class="add-to-compare"><i class="fa fa-exchange"></i><span class="tooltipp">Añadir a comparar</span></button>
													<button class="quick-view"><i class="fa fa-eye"></i><span class="tooltipp">Vista rápida</span></button>
												</div>
											</div>
											<div class="add-to-cart">
												<button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> añadir al carrito</button>
											</div>
										</div>
										<!-- /product -->

										<!-- product -->
										<div class="product">
											<div class="product-img">
												<img src="<?php echo base_url().'assets/user/img/product05.png'?>" alt="">
											</div>
											<div class="product-body">
												<p class="product-category">Categoria</p>
												<h3 class="product-name"><a href="#">Producto</a></h3>
												<h4 class="product-price">$980.00 <del class="product-old-price">$990.00</del></h4>
												<div class="product-rating">
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
												</div>
												<div class="product-btns">
													<button class="add-to-wishlist"><i class="fa fa-heart-o"></i><span class="tooltipp">añadir a la lista de deseos</span></button>
													<button class="add-to-compare"><i class="fa fa-exchange"></i><span class="tooltipp">Añadir a comparar</span></button>
													<button class="quick-view"><i class="fa fa-eye"></i><span class="tooltipp">Vista rápida</span></button>
												</div>
											</div>
											<div class="add-to-cart">
												<button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> añadir al carrito</button>
											</div>
										</div>
										<!-- /product -->
									</div>
									<div id="slick-nav-1" class="products-slick-nav"></div>
								</div>
								<!-- /tab -->
							</div>
						</div>
					</div>
					<!-- Products tab & slick -->
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /SECTION -->

		<!-- HOT DEAL SECTION -->
		<div id="hot-deal" class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<div class="col-md-12">
						<div class="hot-deal">
							<ul class="hot-deal-countdown">
								<li>
									<div>
										<h3>02</h3>
										<span>Días</span>
									</div>
								</li>
								<li>
									<div>
										<h3>10</h3>
										<span>Horas</span>
									</div>
								</li>
								<li>
									<div>
										<h3>34</h3>
										<span>Minutos</span>
									</div>
								</li>
								<li>
									<div>
										<h3>60</h3>
										<span>Segundos</span>
									</div>
								</li>
							</ul>
							<h2 class="text-uppercase">Gran oferta esta semana</h2>
							<p>Nueva Colección Hasta 50% DE DESCUENTO</p>
							
						</div>
					</div>
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /HOT DEAL SECTION -->

		<!-- SECTION -->
		<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">

					<!-- section title -->
					<div class="col-md-12">
						<div class="section-title">
							<h3 class="title">Más vendidos</h3>
							<div class="section-nav">
								<ul class="section-tab-nav tab-nav">
									<li class="active"><a data-toggle="tab" href="#tab2">Portatiles</a></li>
									<li><a data-toggle="tab" href="#tab2">Celulares</a></li>
									<li><a data-toggle="tab" href="#tab2">Camaras</a></li>
									<li><a data-toggle="tab" href="#tab2">Accesorios</a></li>
								</ul>
							</div>
						</div>
					</div>
					<!-- /section title -->

					<!-- Products tab & slick -->
					<div class="col-md-12">
						<div class="row">
							<div class="products-tabs">
								<!-- tab -->
								<div id="tab2" class="tab-pane fade in active">
									<div class="products-slick" data-nav="#slick-nav-2">
										<!-- product -->
										<div class="product">
											<div class="product-img">
												<img src="<?php echo base_url().'assets/user/img/product06.png'?>" alt="">
												<div class="product-label">
													<span class="sale">-30%</span>
													<span class="new">NUEVO</span>
												</div>
											</div>
											<div class="product-body">
												<p class="product-category">Categoria</p>
												<h3 class="product-name"><a href="#">Producto</a></h3>
												<h4 class="product-price">$980.00 <del class="product-old-price">$990.00</del></h4>
												<div class="product-rating">
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
												</div>
												<div class="product-btns">
												<button class="add-to-wishlist"><i class="fa fa-heart-o"></i><span class="tooltipp">añadir a la lista de deseos</span></button>
													<button class="add-to-compare"><i class="fa fa-exchange"></i><span class="tooltipp">Añadir a comparar</span></button>
													<button class="quick-view"><i class="fa fa-eye"></i><span class="tooltipp">Vista rápida</span></button>
												</div>
											</div>
											<div class="add-to-cart">
												<button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> añadir al carrito</button>
											</div>
										</div>
										<!-- /product -->

										<!-- product -->
										<div class="product">
											<div class="product-img">
												<img src="<?php echo base_url().'assets/user/img/product07.png'?>" alt="">
												<div class="product-label">
													<span class="new">NEW</span>
												</div>
											</div>
											<div class="product-body">
												<p class="product-category">Categoria</p>
												<h3 class="product-name"><a href="#">Producto</a></h3>
												<h4 class="product-price">$980.00 <del class="product-old-price">$990.00</del></h4>
												<div class="product-rating">
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star-o"></i>
												</div>
												<div class="product-btns">
												<button class="add-to-wishlist"><i class="fa fa-heart-o"></i><span class="tooltipp">añadir a la lista de deseos</span></button>
													<button class="add-to-compare"><i class="fa fa-exchange"></i><span class="tooltipp">Añadir a comparar</span></button>
													<button class="quick-view"><i class="fa fa-eye"></i><span class="tooltipp">Vista rápida</span></button>
												</div>
											</div>
											<div class="add-to-cart">
												<button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> añadir al carrito</button>
											</div>
										</div>
										<!-- /product -->

										<!-- product -->
										<div class="product">
											<div class="product-img">
												<img src="<?php echo base_url().'assets/user/img/product08.png'?>" alt="">
												<div class="product-label">
													<span class="sale">-30%</span>
												</div>
											</div>
											<div class="product-body">
												<p class="product-category">Categoria</p>
												<h3 class="product-name"><a href="#">Producto</a></h3>
												<h4 class="product-price">$980.00 <del class="product-old-price">$990.00</del></h4>
												<div class="product-rating">
												</div>
												<div class="product-btns">
												<button class="add-to-wishlist"><i class="fa fa-heart-o"></i><span class="tooltipp">añadir a la lista de deseos</span></button>
													<button class="add-to-compare"><i class="fa fa-exchange"></i><span class="tooltipp">Añadir a comparar</span></button>
													<button class="quick-view"><i class="fa fa-eye"></i><span class="tooltipp">Vista rápida</span></button>
												</div>
											</div>
											<div class="add-to-cart">
												<button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> añadir al carrito</button>
											</div>
										</div>
										<!-- /product -->

										<!-- product -->
										<div class="product">
											<div class="product-img">
												<img src="<?php echo base_url().'assets/user/img/product09.png'?>" alt="">
											</div>
											<div class="product-body">
												<p class="product-category">Categoria</p>
												<h3 class="product-name"><a href="#">Producto</a></h3>
												<h4 class="product-price">$980.00 <del class="product-old-price">$990.00</del></h4>
												<div class="product-rating">
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
												</div>
												<div class="product-btns">
												<button class="add-to-wishlist"><i class="fa fa-heart-o"></i><span class="tooltipp">añadir a la lista de deseos</span></button>
													<button class="add-to-compare"><i class="fa fa-exchange"></i><span class="tooltipp">Añadir a comparar</span></button>
													<button class="quick-view"><i class="fa fa-eye"></i><span class="tooltipp">Vista rápida</span></button>
												</div>
											</div>
											<div class="add-to-cart">
												<button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> añadir al carrito</button>
											</div>
										</div>
										<!-- /product -->

										<!-- product -->
										<div class="product">
											<div class="product-img">
												<img src="<?php echo base_url().'assets/user/img/product01.png'?>" alt="">
											</div>
											<div class="product-body">
												<p class="product-category">Categoria</p>
												<h3 class="product-name"><a href="#">Producto</a></h3>
												<h4 class="product-price">$980.00 <del class="product-old-price">$990.00</del></h4>
												<div class="product-rating">
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
												</div>
												<div class="product-btns">
												<button class="add-to-wishlist"><i class="fa fa-heart-o"></i><span class="tooltipp">añadir a la lista de deseos</span></button>
													<button class="add-to-compare"><i class="fa fa-exchange"></i><span class="tooltipp">Añadir a comparar</span></button>
													<button class="quick-view"><i class="fa fa-eye"></i><span class="tooltipp">Vista rápida</span></button>
												</div>
											</div>
											<div class="add-to-cart">
												<button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> añadir al carrito</button>
											</div>
										</div>
										<!-- /product -->
									</div>
									<div id="slick-nav-2" class="products-slick-nav"></div>
								</div>
								<!-- /tab -->
							</div>
						</div>
					</div>
					<!-- /Products tab & slick -->
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /SECTION -->

		<!-- SECTION -->
		<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<div class="col-md-4 col-xs-6">
						<div class="section-title">
							<h4 class="title">Top selling</h4>
							<div class="section-nav">
								<div id="slick-nav-3" class="products-slick-nav"></div>
							</div>
						</div>

						<div class="products-widget-slick" data-nav="#slick-nav-3">
							<div>
								<!-- product widget -->
								<div class="product-widget">
									<div class="product-img">
										<img src="<?php echo base_url().'assets/user/img/product07.png'?>" alt="">
									</div>
									<div class="product-body">
										<p class="product-category">Category</p>
										<h3 class="product-name"><a href="#">product name goes here</a></h3>
										<h4 class="product-price">$980.00 <del class="product-old-price">$990.00</del></h4>
									</div>
								</div>
								<!-- /product widget -->

								<!-- product widget -->
								<div class="product-widget">
									<div class="product-img">
										<img src="<?php echo base_url().'assets/user/img/product08.png'?>" alt="">
									</div>
									<div class="product-body">
									<p class="product-category">Categoria</p>
												<h3 class="product-name"><a href="#">Producto</a></h3>
										<h4 class="product-price">$980.00 <del class="product-old-price">$990.00</del></h4>
									</div>
								</div>
								<!-- /product widget -->

								<!-- product widget -->
								<div class="product-widget">
									<div class="product-img">
										<img src="<?php echo base_url().'assets/user/img/product09.png'?>" alt="">
									</div>
									<div class="product-body">
										<p class="product-category">Category</p>
										<h3 class="product-name"><a href="#">product name goes here</a></h3>
										<h4 class="product-price">$980.00 <del class="product-old-price">$990.00</del></h4>
									</div>
								</div>
								<!-- product widget -->
							</div>

							<div>
								<!-- product widget -->
								<div class="product-widget">
									<div class="product-img">
										<img src="<?php echo base_url().'assets/user/img/product01.png'?>" alt="">
									</div>
									<div class="product-body">
									<p class="product-category">Categoria</p>
												<h3 class="product-name"><a href="#">Producto</a></h3>
										<h4 class="product-price">$980.00 <del class="product-old-price">$990.00</del></h4>
									</div>
								</div>
								<!-- /product widget -->

								<!-- product widget -->
								<div class="product-widget">
									<div class="product-img">
										<img src="<?php echo base_url().'assets/user/img/product02.png'?>" alt="">
									</div>
									<div class="product-body">
									<p class="product-category">Categoria</p>
												<h3 class="product-name"><a href="#">Producto</a></h3>
										<h4 class="product-price">$980.00 <del class="product-old-price">$990.00</del></h4>
									</div>
								</div>
								<!-- /product widget -->

								<!-- product widget -->
								<div class="product-widget">
									<div class="product-img">
										<img src="<?php echo base_url().'assets/user/img/product03.png'?>" alt="">
									</div>
									<div class="product-body">
									<p class="product-category">Categoria</p>
												<h3 class="product-name"><a href="#">Producto</a></h3>
										<h4 class="product-price">$980.00 <del class="product-old-price">$990.00</del></h4>
									</div>
								</div>
								<!-- product widget -->
							</div>
						</div>
					</div>

					<div class="col-md-4 col-xs-6">
						<div class="section-title">
							<h4 class="title">Más vendidos</h4>
							<div class="section-nav">
								<div id="slick-nav-4" class="products-slick-nav"></div>
							</div>
						</div>

						<div class="products-widget-slick" data-nav="#slick-nav-4">
							<div>
								<!-- product widget -->
								<div class="product-widget">
									<div class="product-img">
										<img src="<?php echo base_url().'assets/user/img/product04.png'?>" alt="">
									</div>
									<div class="product-body">
									<p class="product-category">Categoria</p>
												<h3 class="product-name"><a href="#">Producto</a></h3>
										<h4 class="product-price">$980.00 <del class="product-old-price">$990.00</del></h4>
									</div>
								</div>
								<!-- /product widget -->

								<!-- product widget -->
								<div class="product-widget">
									<div class="product-img">
										<img src="<?php echo base_url().'assets/user/img/product05.png'?>" alt="">
									</div>
									<div class="product-body">
									<p class="product-category">Categoria</p>
												<h3 class="product-name"><a href="#">Producto</a></h3>
										<h4 class="product-price">$980.00 <del class="product-old-price">$990.00</del></h4>
									</div>
								</div>
								<!-- /product widget -->

								<!-- product widget -->
								<div class="product-widget">
									<div class="product-img">
										<img src="<?php echo base_url().'assets/user/img/product06.png'?>" alt="">
									</div>
									<div class="product-body">
									<p class="product-category">Categoria</p>
												<h3 class="product-name"><a href="#">Producto</a></h3>
										<h4 class="product-price">$980.00 <del class="product-old-price">$990.00</del></h4>
									</div>
								</div>
								<!-- product widget -->
							</div>

							<div>
								<!-- product widget -->
								<div class="product-widget">
									<div class="product-img">
										<img src="<?php echo base_url().'assets/user/img/product07.png'?>" alt="">
									</div>
									<div class="product-body">
									<p class="product-category">Categoria</p>
												<h3 class="product-name"><a href="#">Producto</a></h3>
										<h4 class="product-price">$980.00 <del class="product-old-price">$990.00</del></h4>
									</div>
								</div>
								<!-- /product widget -->

								<!-- product widget -->
								<div class="product-widget">
									<div class="product-img">
										<img src="<?php echo base_url().'assets/user/img/product08.png'?>" alt="">
									</div>
									<div class="product-body">
									<p class="product-category">Categoria</p>
												<h3 class="product-name"><a href="#">Producto</a></h3>
										<h4 class="product-price">$980.00 <del class="product-old-price">$990.00</del></h4>
									</div>
								</div>
								<!-- /product widget -->

								<!-- product widget -->
								<div class="product-widget">
									<div class="product-img">
										<img src="<?php echo base_url().'assets/user/img/product09.png'?>" alt="">
									</div>
									<div class="product-body">
									<p class="product-category">Categoria</p>
												<h3 class="product-name"><a href="#">Producto</a></h3>
										<h4 class="product-price">$980.00 <del class="product-old-price">$990.00</del></h4>
									</div>
								</div>
								<!-- product widget -->
							</div>
						</div>
					</div>

					<div class="clearfix visible-sm visible-xs"></div>

					<div class="col-md-4 col-xs-6">
						<div class="section-title">
							<h4 class="title">Más vendidos</h4>
							<div class="section-nav">
								<div id="slick-nav-5" class="products-slick-nav"></div>
							</div>
						</div>

						<div class="products-widget-slick" data-nav="#slick-nav-5">
							<div>
								<!-- product widget -->
								<div class="product-widget">
									<div class="product-img">
										<img src="<?php echo base_url().'assets/user/img/product01.png'?>" alt="">
									</div>
									<div class="product-body">
									<p class="product-category">Categoria</p>
												<h3 class="product-name"><a href="#">Producto</a></h3>
										<h4 class="product-price">$980.00 <del class="product-old-price">$990.00</del></h4>
									</div>
								</div>
								<!-- /product widget -->

								<!-- product widget -->
								<div class="product-widget">
									<div class="product-img">
										<img src="<?php echo base_url().'assets/user/img/product02.png'?>" alt="">
									</div>
									<div class="product-body">
									<p class="product-category">Categoria</p>
												<h3 class="product-name"><a href="#">Producto</a></h3>
										<h4 class="product-price">$980.00 <del class="product-old-price">$990.00</del></h4>
									</div>
								</div>
								<!-- /product widget -->

								<!-- product widget -->
								<div class="product-widget">
									<div class="product-img">
										<img src="<?php echo base_url().'assets/user/img/product03.png'?>" alt="">
									</div>
									<div class="product-body">
									<p class="product-category">Categoria</p>
												<h3 class="product-name"><a href="#">Producto</a></h3>
										<h4 class="product-price">$980.00 <del class="product-old-price">$990.00</del></h4>
									</div>
								</div>
								<!-- product widget -->
							</div>

							<div>
								<!-- product widget -->
								<div class="product-widget">
									<div class="product-img">
										<img src="<?php echo base_url().'assets/user/img/product04.png'?>" alt="">
									</div>
									<div class="product-body">
									<p class="product-category">Categoria</p>
												<h3 class="product-name"><a href="#">Producto</a></h3>
										<h4 class="product-price">$980.00 <del class="product-old-price">$990.00</del></h4>
									</div>
								</div>
								<!-- /product widget -->

								<!-- product widget -->
								<div class="product-widget">
									<div class="product-img">
										<img src="<?php echo base_url().'assets/user/img/product05.png'?>" alt="">
									</div>
									<div class="product-body">
									<p class="product-category">Categoria</p>
												<h3 class="product-name"><a href="#">Producto</a></h3>
										<h4 class="product-price">$980.00 <del class="product-old-price">$990.00</del></h4>
									</div>
								</div>
								<!-- /product widget -->

								<!-- product widget -->
								<div class="product-widget">
									<div class="product-img">
										<img src="<?php echo base_url().'assets/user/img/product06.png'?>" alt="">
									</div>
									<div class="product-body">
									<p class="product-category">Categoria</p>
												<h3 class="product-name"><a href="#">Producto</a></h3>
										<h4 class="product-price">$980.00 <del class="product-old-price">$990.00</del></h4>
									</div>
								</div>
								<!-- product widget -->
							</div>
						</div>
					</div>

				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /SECTION -->

		
		<!-- FOOTER -->
		<footer id="footer">
			<!-- top footer -->
			<div class="section">
				<!-- container -->
				<div class="container">
					<!--
					<div class="row">
						<div class="col-md-3 col-xs-6">
							<div class="footer">
								<h3 class="footer-title">Sobre nosotros</h3>
								<p>Somos un grupo de 3 estudiantes jugandose la vida en la Universidad.</p>
								<ul class="footer-links">
									<li><a href="#"><i class="fa fa-map-marker"></i>Colombia-Chocó-Quibdó-Universidad Claretiana</a></li>
									<li><a href="#"><i class="fa fa-phone"></i>+021-95-51-84</a></li>
									<li><a href="#"><i class="fa fa-envelope-o"></i>email@email.com</a></li>
								</ul>
							</div>
						</div>

						<div class="col-md-3 col-xs-6">
							<div class="footer">
								<h3 class="footer-title">Categorias</h3>
								<ul class="footer-links">
									<li><a href="http://localhost/electronicos/index.php/categoria_productos">Las mejores ofertas</a></li>
									<li><a href="http://localhost/electronicos/index.php/categoria_productos">Portatiles</a></li>
									<li><a href="http://localhost/electronicos/index.php/categoria_productos">Celulares</a></li>
									<li><a href="http://localhost/electronicos/index.php/categoria_productos">Camaras</a></li>
									<li><a href="http://localhost/electronicos/index.php/categoria_productos">Accesorios</a></li>
								</ul>
							</div>
						</div>

						<div class="clearfix visible-xs"></div>

						<div class="col-md-3 col-xs-6">
							<div class="footer">
								<h3 class="footer-title">Información</h3>
								<ul class="footer-links">
									<li><a href="#">Sobre nosotros</a></li>
									<li><a href="#">Contectanos</a></li>
									<li><a href="#">Política de privacidad</a></li>
									<li><a href="#">Pedidos y Devoluciones</a></li>
									<li><a href="#">Términos y condiciones</a></li>
								</ul>
							</div>
						</div>

						<div class="col-md-3 col-xs-6">
							<div class="footer">
								<h3 class="footer-title">Servicio</h3>
								<ul class="footer-links">
									<li><a href="#">Mi cuenta</a></li>
									<li><a href="http://localhost/electronicos/index.php/verificar_productos">ver carrito</a></li>
									<li><a href="#">Lista de deseos</a></li>
									<li><a href="#">Seguimiento de mi pedido</a></li>
									<li><a href="#">Ayuda</a></li>
								</ul>
							</div>
						</div>
					</div>
					 -->
				</div>
				<!-- /container -->
			</div>
			<!-- /top footer -->

			<!-- bottom footer -->
			<div id="bottom-footer" class="section">
				<div class="container">
					<!-- row -->
					<div class="row">
						<div class="col-md-12 text-center">
							<ul class="footer-payments">
								<li><a href="#"><i class="fa fa-cc-visa"></i></a></li>
								<li><a href="#"><i class="fa fa-credit-card"></i></a></li>
								<li><a href="#"><i class="fa fa-cc-paypal"></i></a></li>
								<li><a href="#"><i class="fa fa-cc-mastercard"></i></a></li>
								<li><a href="#"><i class="fa fa-cc-discover"></i></a></li>
								<li><a href="#"><i class="fa fa-cc-amex"></i></a></li>
							</ul>
							<span class="copyright">
								<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
								Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
							<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
							</span>
						</div>
					</div>
						<!-- /row -->
				</div>
				<!-- /container -->
			</div>
			<!-- /bottom footer -->
		</footer>
		<!-- /FOOTER -->

		<!-- jQuery Plugins -->
		<script src="<?php echo base_url().'assets/user/js/jquery.min.js'?>"></script>
		<script src="<?php echo base_url().'assets/user/js/bootstrap.min.js'?>"></script>
		<script src="<?php echo base_url().'assets/user/js/slick.min.js'?>"></script>
		<script src="<?php echo base_url().'assets/user/js/nouislider.min.js'?>"></script>
		<script src="<?php echo base_url().'assets/user/js/jquery.zoom.min.js'?>"></script>
		<script src="<?php echo base_url().'assets/user/js/main.js'?>"></script>

	</body>
</html>
