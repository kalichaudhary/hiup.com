<?php

/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package hiuptwentyfour
 */

get_header();

?>
	<!-- Top header START -->
	<div class="navbar-top navbar-dark bg-light d-none d-xl-block py-2 mx-2 mx-md-4 rounded-bottom-4">
		<div class="container">
			<div class="d-lg-flex justify-content-lg-between align-items-center">
				<!-- Navbar top Left-->
				<!-- Top info -->
				<ul class="nav align-items-center justify-content-center">
					<li class="nav-item me-3" data-bs-toggle="tooltip" data-bs-animation="false"
						data-bs-placement="bottom" data-bs-original-title="Saturday & Sunday CLOSED">
						<span><i class="far fa-clock me-2"></i>Visit time: Mon-Fri 9:00-6:00</span>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#"><i class="fas fa-headset me-2"></i>Call us now: +977-1234567890</a>
					</li>
				</ul>

				<!-- Navbar top Right-->
				<div class="d-flex align-items-center justify-content-center">
					<!-- Career -->
					<ul class="nav align-items-center justify-content-center">
						<li class="nav-item me-3 dropdown nav-search">
							<a class="px-2 nav-link position-relative" href="#" id="navCareer" data-bs-toggle="dropdown"
								aria-expanded="true" data-bs-auto-close="outside" data-bs-display="static">
								Career
								<span
									class="position-absolute top-25 start-100 translate-middle p-1 bg-orange border border-light rounded-circle">
									<span class="visually-hidden">New career alerts</span>
								</span>
							</a>
							<div class="dropdown-menu dropdown-menu-end shadow rounded p-2" aria-labelledby="navCareer"
								data-bs-popper="none">

								<!-- Career alert -->
								<ul class="list-group list-group-borderless p-2 small">
									<li class="list-group-item d-flex justify-content-between align-items-center">
										<span class="fw-bold">Recent Career:</span>
										<a href="career.html" class="btn btn-sm btn-link mb-0 px-0">View all</a>
									</li>
									<li
										class="list-group-item text-primary-hover d-flex justify-content-between align-items-center">
										<a href="career.html" class="text-body  text-truncate">Digital marketing <span
												class="badge bg-secondary">3</span></a>
										<span> <i class="far fa-clock me-1"></i>3 days left</span>
									</li>
									<li
										class="list-group-item text-primary-hover d-flex justify-content-between align-items-center">
										<a href="career.html" class="text-body  text-truncate">Front-end Developer <span
												class="badge bg-secondary">2</span></a>
										<span> <i class="far fa-clock me-1"></i>1 week left</span>
									</li>
									<li
										class="list-group-item text-primary-hover d-flex justify-content-between align-items-center">
										<a href="career.html" class="text-body  text-truncate">UI/UX Designer <span
												class="badge bg-secondary">1</span></a>
										<span> <i class="far fa-clock me-1"></i>2 weeks left</span>
									</li>
									<li
										class="list-group-item text-primary-hover d-flex justify-content-between align-items-center">
										<a href="career.html" class="text-body  text-truncate">Back-End Developer <span
												class="badge bg-secondary">3</span></a>
										<span> <i class="far fa-clock me-1"></i>1 week left</span>
									</li>
								</ul>
							</div>
						</li>
					</ul>

					<!-- Top social -->
					<ul class="list-unstyled d-flex mb-0">
						<li> <a class="px-2 nav-link" href="#"><i class="fab fa-facebook"></i></a> </li>
						<li> <a class="px-2 nav-link" href="#"><i class="fab fa-instagram"></i></a> </li>
						<li> <a class="px-2 nav-link" href="#"><i class="fab fa-twitter"></i></a> </li>
						<li> <a class="ps-2 nav-link" href="#"><i class="fab fa-linkedin-in"></i></a> </li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<!-- Top header END -->

	<!-- Header START -->
	<header class="navbar-light header-static navbar-sticky">
		<!-- Logo Nav START -->
		<nav class="navbar navbar-expand-xl">
			<div class="container">
				<!-- Logo START -->
				<a class="navbar-brand me-0" href="index.html">
					<img class="light-mode-item navbar-brand-item" src="<?php echo bloginfo('template_directory');?>/src/assets/images/logo-dark-36.webp" alt="logo">
				</a>
				<!-- Logo END -->

				<!-- Responsive navbar toggler -->
				<button class="navbar-toggler ms-auto" type="button" data-bs-toggle="collapse"
					data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false"
					aria-label="Toggle navigation">
					<span class="navbar-toggler-animation">
						<span></span>
						<span></span>
						<span></span>
					</span>
				</button>

				<!-- Main navbar START -->
				<div class="navbar-collapse collapse" id="navbarCollapse">

					<!-- Navbar Start -->
					<ul class="navbar-nav navbar-nav-scroll ms-auto">
						<!-- Nav item 1 Demos -->
						<!--  <li class="nav-item">
							<a class="nav-link" href="vle.html">Microsoft Olive VLE</a>
						</li> -->

						<!-- Nav item 1 Pages -->
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="productsMenu" data-bs-toggle="dropdown"
								aria-haspopup="true" aria-expanded="false">Products</a>
							<ul class="dropdown-menu" aria-labelledby="productsMenu">
								<!-- Dropdown submenu -->
								<li><a class="dropdown-item" href="vle.html">Olive VLE</a> </li>
								<li><a class="dropdown-item" href="#">Olive AI Content Pro</a> </li>
								<li><a class="dropdown-item" href="#">Olive eDX</a> </li>
								<li>
									<hr class="dropdown-divider">
								</li>
								<li><a class="dropdown-item" href="#">Mykademy Enterprise</a> </li>
								<li><a class="dropdown-item" href="#">Mykademy ePortfolio</a> </li>
								<li><a class="dropdown-item" href="#">Mykademy Classes</a> </li>
								<li>
									<hr class="dropdown-divider">
								</li>
								<li><a class="dropdown-item" href="#">MyConnect</a> </li>
							</ul>
						</li>

						<!-- Nav item 2 Component-->
						<li class="nav-item"><a class="nav-link" href="skill-library.html">Skill library</a></li>

						<!-- Nav item 3 Resources -->
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="ResourcesMenu" data-bs-toggle="dropdown"
								aria-haspopup="true" aria-expanded="false">Resources</a>
							<ul class="dropdown-menu" aria-labelledby="ResourcesMenu">
								<!-- Dropdown submenu -->
								<li><a class="dropdown-item" href="blog.html">Success Stories</a> </li>
								<li><a class="dropdown-item" href="blog.html">News</a> </li>
								<li><a class="dropdown-item" href="blog.html">Blog</a> </li>
							</ul>
						</li>

						<!-- Nav item 4 Component-->
						<li class="nav-item"><a class="nav-link" href="about.html">About Us</a></li>

						<!-- Nav item 5 Support-->
						<!--  <li class="nav-item"><a class="nav-link" href="support.html">Support</a></li> -->

						<!-- Nav item 5 Contact-->
						<li class="nav-item"><a class="nav-link" href="contact-us.html">Contact Us</a></li>
					</ul>
				</div>
				<!-- Main navbar END -->
			</div>
		</nav>
		<!-- Logo Nav END -->
	</header>
	<!-- Header END -->

	<!-- **************** MAIN CONTENT START **************** -->
	<main>

		<!-- =======================
Main Banner START -->
		<section class="pt-0 position-relative overflow-hidden h-700px h-sm-600px h-lg-700px rounded-top-4 mx-2 mx-md-4"
			style="background-image:url(assets/images/bg/04.webp); background-position: center; background-size: cover;">
			<div class="bg-overlay bg-dark opacity-5"></div>
			<!-- SVG decoration for curve -->
			<figure class="position-absolute bottom-0 left-0 w-100 d-md-block mb-n3 z-index-9">
				<svg class="fill-body" width="100%" height="150" viewBox="0 0 500 150" preserveAspectRatio="none">
					<path d="M0,150 L0,40 Q250,150 500,40 L580,150 Z"></path>
				</svg>
			</figure>
			<!-- SVG decoration -->
			<figure class="position-absolute top-0 start-50 translate-middle-x z-index-9 mt-5">
				<svg width="29px" height="29px">
					<path class="fill-warning"
						d="M29.004,14.502 C29.004,22.512 22.511,29.004 14.502,29.004 C6.492,29.004 -0.001,22.512 -0.001,14.502 C-0.001,6.492 6.492,-0.001 14.502,-0.001 C22.511,-0.001 29.004,6.492 29.004,14.502 Z">
					</path>
				</svg>
			</figure>

			<div class="container z-index-9 position-relative">
				<!-- SVG decoration -->
				<figure class="position-absolute bottom-0 end-0 z-index-9 ms-5 mb-5">
					<svg width="23px" height="23px">
						<path class="fill-info"
							d="M23.003,11.501 C23.003,17.854 17.853,23.003 11.501,23.003 C5.149,23.003 -0.001,17.854 -0.001,11.501 C-0.001,5.149 5.149,-0.000 11.501,-0.000 C17.853,-0.000 23.003,5.149 23.003,11.501 Z">
						</path>
					</svg>
				</figure>

				<div class="row py-0 py-md-1 align-items-center text-center text-sm-start">
					<div class="col-sm-10 col-lg-8 col-xl-6 all-text-white my-5 mt-md-0">
						<div class="py-0 py-md-5 my-5">

							<!-- Badge with content -->
							<div class="d-inline-block bg-success px-3 py-2 rounded-pill mb-3">
								<p class="mb-0 text-white">
									Welcome to</p>
							</div>

							<!-- Title -->
							<h1 class="text-white display-5">Leaders in <br> <span class="text-warning"> learning
									technology</span></h1>
							<p class="text-white">We provide practical and modern learning solutions to empower
								enterprises and edupreneurs, irrespective of sector and scale.</p>

							<div class="d-sm-flex align-items-center mt-4">
								<!-- Video button -->
								<a data-glightbox data-gallery="office-tour" href="https://vimeo.com/386233926"
									class="d-block ms-0">
									<div
										class="btn btn-round btn-white-shadow text-danger mb-0 me-3 align-middle d-inline-block">
										<i class="fas fa-play"></i>
									</div>
									<span class="mb-0 text-white">Watch video</span>
								</a>
							</div>
							<!-- Partner -->
							<a href="#" class="d-sm-flex align-items-center mt-5"><img
									src="<?php echo bloginfo('template_directory');?>/src/assets/images/partner/VLE-Microsoft.png" alt="" class="w-75"></a>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- =======================
Main Banner END -->

		<!-- =======================
Client START -->
		<section class="pb-0 pb-md-5">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-md-12">
						<!-- Slider START -->
						<div class="tiny-slider">
							<div class="d-flex align-items-center tiny-slider-inner" data-arrow="false"
								data-dots="false" data-gutter="80" data-items-xl="6" data-items-lg="5" data-items-md="4"
								data-items-sm="3" data-items-xs="2" data-autoplay="2000">
								<!-- Slide item START -->
								<div class="item"> <img class="grayscale" src="<?php echo bloginfo('template_directory');?>/src/assets/images/client/abe.webp"
										alt="client-logo"> </div>
								<div class="item"> <img class="grayscale" src="<?php echo bloginfo('template_directory');?>/src/assets/images/client/accor-hotels.webp"
										alt="client-logo"> </div>
								<div class="item"> <img class="grayscale" src="<?php echo bloginfo('template_directory');?>/src/assets/images/client/aramark.webp"
										alt="client-logo"> </div>
								<div class="item"> <img class="grayscale" src="<?php echo bloginfo('template_directory');?>/src/assets/images/client/aurizon.webp"
										alt="client-logo"> </div>
								<div class="item"> <img class="grayscale" src="<?php echo bloginfo('template_directory');?>/src/assets/images/client/Bidvest-Noonan.webp"
										alt="client-logo"> </div>
								<div class="item"> <img class="grayscale" src="<?php echo bloginfo('template_directory');?>/src/assets/images/client/dyson.webp"
										alt="client-logo"> </div>
								<div class="item"> <img class="grayscale" src="<?php echo bloginfo('template_directory');?>/src/assets/images/client/gilbarco.webp"
										alt="client-logo"> </div>
								<div class="item"> <img class="grayscale" src="<?php echo bloginfo('template_directory');?>/src/assets/images/client/IITD.webp"
										alt="client-logo"> </div>
								<div class="item"> <img class="grayscale" src="<?php echo bloginfo('template_directory');?>/src/assets/images/client/infosys.webp"
										alt="client-logo"> </div>
								<div class="item"> <img class="grayscale" src="<?php echo bloginfo('template_directory');?>/src/assets/images/client/lidl.webp"
										alt="client-logo"> </div>
								<div class="item"> <img class="grayscale" src="<?php echo bloginfo('template_directory');?>/src/assets/images/client/microsoft-2.webp"
										alt="client-logo"> </div>
								<div class="item"> <img class="grayscale" src="<?php echo bloginfo('template_directory');?>/src/assets/images/client/nhs.webp"
										alt="client-logo"> </div>
								<div class="item"> <img class="grayscale" src="<?php echo bloginfo('template_directory');?>/src/assets/images/client/nocn.webp"
										alt="client-logo"> </div>
								<div class="item"> <img class="grayscale" src="<?php echo bloginfo('template_directory');?>/src/assets/images/client/skillnet.webp"
										alt="client-logo"> </div>
								<div class="item"> <img class="grayscale" src="<?php echo bloginfo('template_directory');?>/src/assets/images/client/talos.webp"
										alt="client-logo"> </div>
								<div class="item"> <img class="grayscale" src="<?php echo bloginfo('template_directory');?>/src/assets/images/client/tesco.webp"
										alt="client-logo"> </div>
								<div class="item"> <img class="grayscale" src="<?php echo bloginfo('template_directory');?>/src/assets/images/client/transcend.webp"
										alt="client-logo"> </div>
								<div class="item"> <img class="grayscale" src="<?php echo bloginfo('template_directory');?>/src/assets/images/client/united-rentals.webp"
										alt="client-logo"> </div>
								<div class="item"> <img class="grayscale" src="<?php echo bloginfo('template_directory');?>/src/assets/images/client/work-care.webp"
										alt="client-logo"> </div>
								<div class="item"> <img class="grayscale" src="<?php echo bloginfo('template_directory');?>/src/assets/images/client/woz.webp"
										alt="client-logo"> </div>
								<!-- Slide item END -->
							</div>
						</div>
						<!-- Slider END -->
					</div>
				</div>
			</div>
		</section>
		<!-- =======================
Client END -->

		<!-- =======================
About START -->
		<section>
			<div class="container">
				<div class="row g-4 align-items-center">
					<div class="col-lg-5">
						<!-- Title -->
						<h2>Find Out More Products us, <span class="text-warning">Hiup</span> insides.</h2>
						<!-- Image -->
						<img src="<?php echo bloginfo('template_directory');?>/src/assets/images/about/03.jpg" class="rounded-2" alt="">
					</div>
					<div class="col-lg-7">
						<div class="row g-4">
							<!-- Item -->
							<div class="col-sm-6">
								<!-- <div class="icon-lg bg-orange bg-opacity-10 text-orange rounded-2"><i
										class="fas fa-user-tie fs-5"></i></div> -->
								<figure>
									<svg xmlns="http://www.w3.org/2000/svg" width="59" height="59" viewBox="0 0 59 59"
										class="rounded-2">
										<g id="Group_18981" data-name="Group 18981" transform="translate(-2526 -1648)">
											<rect id="Rectangle_3182" data-name="Rectangle 3182" width="59" height="59"
												transform="translate(2526 1648)" fill="#0cbc87" style="opacity: 0.1;">
											</rect>
											<g id="Group_18983" data-name="Group 18983"
												transform="translate(22862.926 5100.231)">
												<path id="Path_36" data-name="Path 36"
													d="M269.55,196.37l-.01,2.95,9.114.028.01-2.949-5.919-.019Z"
													transform="translate(-20578.459 -3614.858)" fill="#0cbc87"></path>
												<rect id="Rectangle_3071" data-name="Rectangle 3071" width="2.949"
													height="6.478"
													transform="matrix(0.003, -1, 1, 0.003, -20294.451, -3415.423)"
													fill="#0cbc87"></rect>
												<rect id="Rectangle_3074" data-name="Rectangle 3074" width="11.551"
													height="3.195"
													transform="translate(-20308.955 -3418.508) rotate(-90)"
													fill="#0cbc87"></rect>
												<path id="Path_37" data-name="Path 37"
													d="M512.765,30.71l-3.4-.01,5.665,14.518h0l3.4.01Z"
													transform="translate(-20835.295 -3460.686)" fill="#0cbc87"></path>
												<rect id="Rectangle_3075" data-name="Rectangle 3075" width="2.949"
													height="6.118"
													transform="translate(-20294.609 -3421.34) rotate(-90)"
													fill="#0cbc87"></rect>
												<rect id="Rectangle_3076" data-name="Rectangle 3076" width="2.949"
													height="6.478"
													transform="matrix(0.003, -1, 1, 0.003, -20294.412, -3426.973)"
													fill="#0cbc87"></rect>
												<path id="Path_38" data-name="Path 38"
													d="M753.638,31.47l-.018,5.653,3.195.01.008-2.7.01-2.949Z"
													transform="translate(-21051.234 -3461.402)" fill="#0cbc87"></path>
												<path id="Path_39" data-name="Path 39"
													d="M753.21,121.767l3.2.01.009-2.949.01-2.95.009-2.949-3.195-.01Z"
													transform="translate(-21050.854 -3537.2)" fill="#0cbc87"></path>
												<path id="Path_40" data-name="Path 40"
													d="M628.185,43.557l5-12.587-3.4-.01L626.5,39.244Z"
													transform="translate(-20944.297 -3460.928)" fill="#0cbc87"></path>
											</g>
										</g>
									</svg>
								</figure>
								<h5 class="mt-2">Microsoft Teams Olive VLE</h5>
								<p class="mb-0">A complete portal to take all your training needs online via Microsoft
									App Source.</p>
							</div>
							<!-- Item -->
							<div class="col-sm-6">
								<figure>
									<svg xmlns="http://www.w3.org/2000/svg" width="59" height="59" viewBox="0 0 59 59"
										class="rounded-2">
										<g id="Group_18329" data-name="Group 18329" transform="translate(-2526 -1648)">
											<rect id="Rectangle_3182" data-name="Rectangle 3182" width="59" height="59"
												transform="translate(2526 1648)" fill="#fd7e14" style="opacity: 0.1;">
											</rect><text id="EDX" transform="translate(2537 1684)" fill="#fd7e14"
												font-size="17" font-family="Montserrat-ExtraBold, Montserrat"
												font-weight="700">
												<tspan x="0" y="0">EDX</tspan>
											</text>
										</g>
									</svg>
								</figure>
								<h5 class="mt-2">Olive EDX</h5>
								<p class="mb-0">An immersive virtual classroom experience for the modern world.</p>
							</div>
							<!-- Item -->
							<div class="col-sm-6">
								<figure>
									<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
										width="59" height="59" viewBox="0 0 59 59" class="rounded-2">
										<defs>
											<linearGradient id="linear-gradient" x1="0.75" x2="0.178" y2="0.833"
												gradientUnits="objectBoundingBox">
												<stop offset="0" stop-color="#1e1e1e"></stop>
												<stop offset="1" stop-color="#1e1e1e" stop-opacity="0"></stop>
											</linearGradient>
										</defs>
										<g id="Group_18328" data-name="Group 18328" transform="translate(-3038 -1481)">
											<rect id="Rectangle_3179" data-name="Rectangle 3179" width="59" height="59"
												transform="translate(3038 1481)" fill="#6f42c1" style="opacity: 0.1;">
											</rect>
											<g id="Group_18326" data-name="Group 18326"
												transform="translate(24112.975 3249.337)">
												<path id="Vector_10" data-name="Vector 10"
													d="M5.991,13.431.76.93H5.2l5.073,12.5Z"
													transform="translate(-21044.068 -1749.533)" fill="#6f42c1"></path>
												<path id="Vector_11" data-name="Vector 11"
													d="M.579,12.105l3.17,2.744L9.773.977H5.334Z"
													transform="translate(-21043.729 -1735.209)"
													fill="url(#linear-gradient)"></path>
												<path id="Vector_12" data-name="Vector 12"
													d="M2.252,15.244.191,10.213,4.313,0H8.751Z"
													transform="translate(-21034.703 -1752.79)" fill="#6f42c1"></path>
												<path id="m"
													d="M.026,13.211H3.217V6.319A2.8,2.8,0,0,1,5.976,3.255c1.635,0,2.118,1.243,2.118,2.762v7.194h3.191V6.319a2.791,2.791,0,0,1,2.733-3.063c1.648,0,2.131,1.268,2.131,2.812v7.144H19.34V5.678c0-2.649-1.36-5.273-4.681-5.273a4.744,4.744,0,0,0-4.184,2.21A3.993,3.993,0,0,0,6.617.405,3.882,3.882,0,0,0,3.086,2.238V.669H0Z"
													transform="translate(-21065 -1749.883)" fill="#6f42c1"></path>
											</g>
										</g>
									</svg>
								</figure>
								<h5 class="mt-2">MyConnect</h5>
								<p class="mb-0">A virtual learning platform to access diverse e-learning courses and
									career support.</p>
							</div>
							<!-- Item -->
							<div class="col-sm-6">
								<figure>
									<svg xmlns="http://www.w3.org/2000/svg" width="59" height="59" viewBox="0 0 59 59"
										class="rounded-2">
										<g id="Group_18329" data-name="Group 18329" transform="translate(-2526 -1648)">
											<rect id="Rectangle_3182" data-name="Rectangle 3182" width="59" height="59"
												transform="translate(2526 1648)" fill="#17a2b8" style="opacity: 0.1;">
											</rect><text id="MXi" transform="translate(2537 1684)" fill="#17a2b8"
												font-size="17" font-family="Montserrat-ExtraBold, Montserrat"
												font-weight="700">
												<tspan x="0" y="0">MXi</tspan>
											</text>
										</g>
									</svg>
								</figure>
								<h5 class="mt-2">Olive AI Content Pro</h5>
								<p class="mb-0">A powerful AI tool to seamlessly convert learning content into highly
									immersive e-learning videos</p>
							</div>
							<!-- Item -->
							<div class="col-sm-6">
								<!-- Button -->
								<a href="#" class="btn btn-primary-soft mb-0 mt-3 mt-lg-0">More products <i
										class="bi bi-arrow-right"></i></a>
								<!-- <a href="#" class="btn btn-primary-soft mb-0">View more<i class="fas fa-sync ms-2"></i></a> -->
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- =======================
About END -->


		<!-- =======================
AI START -->
		<section class="overflow-hidden bg-warning bg-opacity-15 position-relative">
			<!-- SVG Image -->
			<figure class="position-absolute end-0 bottom-0 mb-0 z-index-9">
				<img src="<?php echo bloginfo('template_directory');?>/src/assets/images/element/bg-ai.svg" class="h-300px opacity-3" alt="">
			</figure>

			<div class="container">
				<div class="row g-4 align-items-center">
					<div class="col-md-5 position-relative z-index-9">
						<!-- Title -->
						<h2>We Create
							The Most Realistic
							Artificial Intelligence</h2>
						<p>consectetur adipisicing elit. Labore eius molestiae facere, natus reprehenderit eaque eum,
							autem ipsam. Magni, error. Tempora odit laborum iure inventore possimus laboriosam qui nam.!
						</p>
						<!-- Download button -->
						<div class="row">
							<!-- Readmore button -->
							<div class="col-6 col-sm-4 col-md-6 col-lg-4">
								<!-- Button -->
								<a href="#" class="btn btn-warning-soft mb-0 mt-3 mt-lg-0">More info <i
										class="bi bi-arrow-right"></i></a>
							</div>
						</div>
					</div>

					<div class="col-md-7 text-md-end position-relative">
						<!-- SVG decoration -->
						<!-- <figure class="position-absolute top-50 end-0 translate-middle-y me-n8">
							<svg width="632.6px" height="540.4px" viewBox="0 0 632.6 540.4">
								<path class="fill-primary opacity-1"
									d="M531.4,46.9c46.3,27.4,81.4,79.8,91.1,136.2c9.7,56.8-6.4,117.7-38.3,166s-79.4,84.2-138.6,119.3 c-59.6,35.1-130.6,69.7-201.5,62.1c-70.5-7.7-141.4-57.6-185.4-126.5C14.4,335.5-2.9,247.2,23.7,179.5 c26.2-68.1,96.7-116.5,161.6-140.2c64.9-24.2,124.5-24.6,183.3-23.4C427,17.1,485.1,19.5,531.4,46.9z" />
							</svg>
						</figure> -->

						<!-- Image -->
						<img src="<?php echo bloginfo('template_directory');?>/src/assets/images/element/ai-home.webp" class="position-relative rounded-4" alt="">
					</div>
				</div>
			</div>
		</section>
		<!-- =======================
AI END -->


		<!-- =======================
ML START -->
		<section class="pb-0 pb-lg-5 bg-warning bg-opacity-15 position-relative">
			<div class="container">
				<div class="row g-4 g-lg-5 align-items-center">
					<div class="col-lg-6 position-relative order-2">
						<!-- SVG decoration -->
						<!-- <figure class="position-absolute top-50 start-50 translate-middle ms-n8 d-none d-sm-block">
							<svg width="625.8px" height="550px" viewBox="0 0 625.8 630.8"
								style="enable-background:new 0 0 625.8 630.8;">
								<path class="fill-primary opacity-1"
									d="M445.8,133.5c59.7,50.3,122.9,96,149.7,161c26.5,64.6,15.9,148.6-29.9,197.7C520.3,541,439,555,364.9,578.1 c-74.5,23.1-142.1,55.2-200.4,42.3S57.2,549.7,32.6,487.3c-24.2-62-24.2-128.9-17.8-199.6C21.7,217,34.5,142.6,78.7,89.6 S198.6,5,264.4,16.7S386.1,83.2,445.8,133.5z" />
							</svg>
						</figure> -->
						<!-- Image -->
						<img src="<?php echo bloginfo('template_directory');?>/src/assets/images/element/ml-home.webp" class="position-relative rounded-4" alt="">
					</div>

					<div class="col-lg-6 position-relative order-1 order-lg-2">
						<!-- Title -->
						<h2>Use Machine Learning
							To Drive Intelligent
							Optimisation</h2>
						<!-- Info list -->
						<p class="mb-2">consectetur adipisicing elit. Labore eius molestiae facere, natus reprehenderit
							eaque eum,
							autem ipsam. Magni, error. Tempora odit laborum iure inventore possimus laboriosam qui nam.
						</p>
						<!-- Button -->
						<a href="#" class="btn btn-warning-soft mb-0 mt-3 mt-lg-0">More info <i
								class="bi bi-arrow-right"></i></a>
					</div>
				</div>
			</div>
		</section>
		<!-- =======================
ML END -->




		<!-- =======================
Video divider START -->
		<section class="bg-light position-relative">
			<!-- SVG decoration -->
			<figure class="position-absolute bottom-0 start-0 d-none d-lg-block">
				<svg width="822.2px" height="301.9px" viewBox="0 0 822.2 301.9">
					<path class="fill-warning"
						d="M752.5,51.9c-4.5,3.9-8.9,7.8-13.4,11.8c-51.5,45.3-104.8,92.2-171.7,101.4c-39.9,5.5-80.2-3.4-119.2-12.1 c-32.3-7.2-65.6-14.6-98.9-13.9c-66.5,1.3-128.9,35.2-175.7,64.6c-11.9,7.5-23.9,15.3-35.5,22.8c-40.5,26.4-82.5,53.8-128.4,70.7 c-2.1,0.8-4.2,1.5-6.2,2.2L0,301.9c3.3-1.1,6.7-2.3,10.2-3.5c46.1-17,88.1-44.4,128.7-70.9c11.6-7.6,23.6-15.4,35.4-22.8 c46.7-29.3,108.9-63.1,175.1-64.4c33.1-0.6,66.4,6.8,98.6,13.9c39.1,8.7,79.6,17.7,119.7,12.1C634.8,157,688.3,110,740,64.6 c4.5-3.9,9-7.9,13.4-11.8C773.8,35,797,16.4,822.2,1l-0.7-1C796.2,15.4,773,34,752.5,51.9z" />
				</svg>
			</figure>

			<!-- SVG decoration -->
			<figure class="position-absolute top-0 end-0">
				<svg width="822.2px" height="301.9px" viewBox="0 0 822.2 301.9">
					<path class="fill-primary"
						d="M752.5,51.9c-4.5,3.9-8.9,7.8-13.4,11.8c-51.5,45.3-104.8,92.2-171.7,101.4c-39.9,5.5-80.2-3.4-119.2-12.1 c-32.3-7.2-65.6-14.6-98.9-13.9c-66.5,1.3-128.9,35.2-175.7,64.6c-11.9,7.5-23.9,15.3-35.5,22.8c-40.5,26.4-82.5,53.8-128.4,70.7 c-2.1,0.8-4.2,1.5-6.2,2.2L0,301.9c3.3-1.1,6.7-2.3,10.2-3.5c46.1-17,88.1-44.4,128.7-70.9c11.6-7.6,23.6-15.4,35.4-22.8 c46.7-29.3,108.9-63.1,175.1-64.4c33.1-0.6,66.4,6.8,98.6,13.9c39.1,8.7,79.6,17.7,119.7,12.1C634.8,157,688.3,110,740,64.6 c4.5-3.9,9-7.9,13.4-11.8C773.8,35,797,16.4,822.2,1l-0.7-1C796.2,15.4,773,34,752.5,51.9z" />
				</svg>
			</figure>

			<!-- SVG decoration -->
			<figure class="position-absolute bottom-0 start-50 translate-middle-x ms-n9 mb-5">
				<svg width="23px" height="23px">
					<path class="fill-primary"
						d="M23.003,11.501 C23.003,17.854 17.853,23.003 11.501,23.003 C5.149,23.003 -0.001,17.854 -0.001,11.501 C-0.001,5.149 5.149,-0.000 11.501,-0.000 C17.853,-0.000 23.003,5.149 23.003,11.501 Z">
					</path>
				</svg>
			</figure>

			<!-- SVG decoration -->
			<figure class="position-absolute bottom-0 end-0 me-5 mb-5">
				<svg width="22px" height="22px">
					<path class="fill-warning"
						d="M22.003,11.001 C22.003,17.078 17.077,22.003 11.001,22.003 C4.925,22.003 -0.001,17.078 -0.001,11.001 C-0.001,4.925 4.925,-0.000 11.001,-0.000 C17.077,-0.000 22.003,4.925 22.003,11.001 Z">
					</path>
				</svg>
			</figure>

			<div class="container position-relative">
				<div class="row justify-content-between align-items-center my-5">

					<div class="col-lg-5 position-relative">
						<!-- SVG decoration -->
						<figure class="position-absolute top-0 start-0 translate-middle mt-n5">
							<svg width="29px" height="29px">
								<path class="fill-orange"
									d="M29.004,14.502 C29.004,22.512 22.511,29.004 14.502,29.004 C6.492,29.004 -0.001,22.512 -0.001,14.502 C-0.001,6.492 6.492,-0.001 14.502,-0.001 C22.511,-0.001 29.004,6.492 29.004,14.502 Z">
								</path>
							</svg>
						</figure>

						<!-- Title -->
						<h2 class="h1">Learning whenever you want, from any place in the world.</h2>
					</div>

					<div class="col-lg-5 position-relative mt-4 mt-lg-0">
						<!-- Image -->
						<img src="<?php echo bloginfo('template_directory');?>/src/assets/images/about/04.jpg" class="border border-5 border-white rounded-2" alt="">
						<div class="position-absolute top-50 start-50 translate-middle">
							<!-- Video link -->
							<a href="https://vimeo.com/386233926"
								class="btn text-danger btn-round btn-white-shadow btn-lg mb-0" data-glightbox
								data-gallery="video-tour">
								<i class="fas fa-play"></i>
							</a>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- =======================
Video divider END -->

		<!-- =======================
Client feedback START -->
		<section class="bg-light position-relative">
			<!-- SVG Image -->
			<figure class="position-absolute start-0 bottom-0 mb-0">
				<img src="<?php echo bloginfo('template_directory');?>/src/assets/images/element/10.svg" class="h-200px" alt="">
			</figure>

			<div class="container">
				<!-- Title -->
				<div class="row mb-4">
					<div class="col-lg-8 mx-auto text-center">
						<h2>Our Customer Feedback</h2>
						<p class="mb-0">Perceived end knowledge certainly day sweetness why cordially</p>
					</div>
				</div>

				<!-- Feedback START -->
				<div class="row">
					<!-- Slider START -->
					<div class="tiny-slider arrow-round arrow-creative arrow-dark arrow-hover">
						<div class="tiny-slider-inner" data-autoplay="true" data-edge="5" data-arrow="true"
							data-dots="false" data-items="4" data-items-xl="3" data-items-md="2" data-items-xs="1">

							<!-- Feedback item -->
							<div>
								<div class="bg-body text-center p-4 rounded-3 border border-1 position-relative">
									<!-- member -->
									<div class="member member-lg mb-3">
										<img class="member-img rounded-circle"
											src="<?php echo bloginfo('template_directory');?>/src/assets/images/testimonial/Geraldine-King.webp" alt="member">
									</div>
									<!-- Title -->
									<h6 class="mb-2"> – Adrian Cummins <br> <small> Restaurant Association of Ireland
										</small></h6>
									<!-- Content -->
									<blockquote class="mt-1">
										<p>
											<span class="me-1 small"><i class="fas fa-quote-left"></i></span>
											The NRF and Olive Group’s missions are aligned to improve the accessibility
											of education and training to the NRF’s members.
											<span class="ms-1 small"><i class="fas fa-quote-right"></i></span>
										</p>
									</blockquote>
								</div>
							</div>

							<!-- Feedback item -->
							<div>
								<div class="bg-body text-center p-4 rounded-3 border border-1 position-relative">
									<!-- member -->
									<div class="member member-lg mb-3">
										<img class="member-img rounded-circle"
											src="<?php echo bloginfo('template_directory');?>/src/assets/images/testimonial/Eimhear-ODalaigh-.webp" alt="member">
									</div>
									<!-- Title -->
									<h6 class="mb-2"> – Eimhear O’Dalaigh <br> <small>Training Consultant</small> </h6>
									<!-- Content -->
									<blockquote class="mt-1">
										<p>
											<span class="me-1 small"><i class="fas fa-quote-left"></i></span>
											Olive’s online training platform is a world class learning environment,
											low-cost and very easy-to-use.
											<span class="ms-1 small"><i class="fas fa-quote-right"></i></span>
										</p>
									</blockquote>
								</div>
							</div>

							<!-- Feedback item -->
							<div>
								<div class="bg-body text-center p-4 rounded-3 border border-1 position-relative">
									<!-- member -->
									<div class="member member-lg mb-3">
										<img class="member-img rounded-circle"
											src="<?php echo bloginfo('template_directory');?>/src/assets/images/testimonial/Adrian-Cummins.webp" alt="member">
									</div>
									<!-- Title -->
									<h6 class="mb-2">– Adrian Cummins <br> <small> Restaurant Association of Ireland
										</small></h6>
									<!-- Content -->
									<blockquote class="mt-1">
										<p>
											<span class="me-1 small"><i class="fas fa-quote-left"></i></span>
											We used to face considerable high prices for compliance training. However,
											now with Olive’s high-quality, cost-effective and content-rich online
											training, they helped us to achieve greater levels of compliance than we
											thought possible.
											<span class="ms-1 small"><i class="fas fa-quote-right"></i></span>
										</p>
									</blockquote>
								</div>
							</div>

						</div>
					</div>
					<!-- Slider START -->
				</div>
				<!-- Feedback END -->
			</div>
		</section>
		<!-- =======================
Client feedback END -->

		<!-- =======================
Counter START -->
		<section class="py-0 py-lg-7 pb-lg-6">
			<div class="container">
				<div class="row">
					<div class="col-12 position-relative z-index-1">
						<!-- Image -->
						<div class="d-none d-lg-block position-absolute bottom-0 start-0 ms-5">
							<img src="<?php echo bloginfo('template_directory');?>/src/assets/images/element/02.png" alt="Image">
						</div>
						<div class="bg-warning p-4 p-sm-5 rounded position-relative z-index-n1 overflow-hidden">
							<!-- SVG decoration -->
							<figure class="position-absolute top-50 end-0 translate-middle-y me-n7">
								<svg class="fill-orange rotate-193 opacity-2" width="676px" height="161.3px"
									viewBox="0 0 676 161.3" style="enable-background:new 0 0 676 161.3;"
									xml:space="preserve">
									<path
										d="M53.6,18.8c28.6,8.8,50.3,27.3,70.9,48c19.9,19.9,39.5,40.8,65.3,53c53.3,24.9,116,12.4,168.2-9.1 c58.4-23.9,113.2-59.8,176.2-70.3c30.9-5.1,64.1-2.6,90.9,14.7c22.4,14.4,34.4,36.9,39.5,62.4c2.9,14.5,3.9,29.2,4.6,43.9h6.8 c-0.2-4.2-0.5-8.3-0.8-12.5c-1.7-24.1-4.9-49.1-17.6-70.3c-14.5-23.9-40-39.2-67-44.8c-32.9-6.8-67.2-0.3-98.5,10.2 c-30.3,10-59,24.2-87.7,38.1c-54.8,26.4-115.5,53.1-177.9,42c-14.5-2.6-28.7-7.4-41.7-14.7c-12.8-7.3-23.9-16.7-34.6-26.7 c-20.7-19.6-39.4-42-64.1-56.8c-25.6-15.4-56.4-22.2-86-19H0v6.9C17.9,11.8,36.3,13.5,53.6,18.8z" />
								</svg>
							</figure>

							<div class="row align-items-end justify-content-end position-relative">
								<div class="col-lg-10">
									<div class="row g-3 d-flex align-items-center justify-content-center">

										<!-- Counter item -->
										<div class="col-sm-6 col-lg-3 text-center">
											<div class="d-flex justify-content-center">
												<h4 class="purecounter display-6 text-white fw-bold mb-0"
													data-purecounter-start="0" data-purecounter-end="300"
													data-purecounter-delay="200">0</h4>
												<span class="display-6 text-white mb-0">+</span>
											</div>
											<h6 class="text-dark mb-0 fw-bold">Dedicated People</h6>
										</div>

										<!-- Counter item -->
										<div class="col-sm-6 col-lg-3 text-center">
											<div class="d-flex justify-content-center">
												<h4 class="purecounter display-6 text-white fw-bold mb-0"
													data-purecounter-start="0" data-purecounter-end="20000"
													data-purecounter-delay="200">0</h4>
												<span class="display-6 text-white mb-0">+</span>
											</div>
											<h6 class="text-dark mb-0 fw-bold">Trainers Onboarded</h6>
										</div>

										<!-- Counter item -->
										<div class="col-sm-6 col-lg-3 text-center">
											<div class="d-flex justify-content-center">
												<h4 class="purecounter display-6 text-white fw-bold mb-0"
													data-purecounter-start="0" data-purecounter-end="8"
													data-purecounter-delay="200">0</h4>
												<span class="display-6 text-white mb-0">K+</span>
											</div>
											<h6 class="text-dark mb-0 fw-bold">Trainers Onboarded</h6>
										</div>

										<!-- Counter item -->
										<div class="col-sm-6 col-lg-3 text-center">
											<div class="d-flex justify-content-center">
												<h4 class="purecounter display-6 text-white fw-bold mb-0"
													data-purecounter-start="0" data-purecounter-end="3"
													data-purecounter-delay="200">0</h4>
												<span class="display-6 text-white mb-0">M+</span>
											</div>
											<h6 class="text-dark mb-0 fw-bold">Types of CouLearners Benefitedrses</h6>
										</div>
									</div>
								</div>
							</div> <!-- Row END -->
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- =======================
Counter END -->

		<!-- =======================
Course START -->
		<section class="bg-light py-5 position-relative overflow-hidden">
			<!-- SVG decoration -->
			<figure class="position-absolute top-0 start-0">
				<svg width="818.6px" height="235.1px">
					<path class="fill-orange opacity-5"
						d="M735,226.3c-5.7,0.6-11.5,1.1-17.2,1.7c-66.2,6.8-134.7,13.7-192.6-16.6c-34.6-18.1-61.4-47.9-87.3-76.7 c-21.4-23.8-43.6-48.5-70.2-66.7c-53.2-36.4-121.6-44.8-175.1-48c-13.6-0.8-27.5-1.4-40.9-1.9c-46.9-1.9-95.4-3.9-141.2-16.5 C8.3,1.2,6.2,0.6,4.2,0H0c3.3,1,6.6,2,10,3c46,12.5,94.5,14.6,141.5,16.5c13.4,0.6,27.3,1.1,40.8,1.9 c53.4,3.2,121.5,11.5,174.5,47.7c26.5,18.1,48.6,42.7,70,66.5c26,28.9,52.9,58.8,87.7,76.9c58.3,30.5,127,23.5,193.3,16.7 c5.8-0.6,11.5-1.2,17.2-1.7c26.2-2.6,55-4.2,83.5-2.2v-1.2C790,222,761.2,223.7,735,226.3z" />
				</svg>
			</figure>

			<!-- SVG decoration -->
			<figure class="position-absolute bottom-0 start-0 mb-3">
				<svg enable-background="new 0 0 223 134" xml:space="preserve" xmlns="http://www.w3.org/2000/svg">
					<path class="fill-success"
						d="m216.6 78.7c-1.8-0.3-4.1 0.1-5.9 0.3-2.4 0.2-4.8 0.7-7.1 0.9-1.6 0.1-3.1 0.2-4.6 0.3-1.8 0.1-3.7 0.1-5.6 0.1-1.3-0.1-2.6-0.1-3.9-0.1-2.5 0-4.9-0.3-7.3-0.4-2.3-0.1-4.5 0.5-6.8 0.5-4 0.1-8.6-0.3-12.2 1.6-0.2 0.1-0.2 0.5-0.1 0.6 0.6 1.1 2.6 1.6 3.7 2 0.3 0.1 0.7 0.3 1 0.3 0.9 0.6 1.8 1.2 2.8 1.8 0.7 0.5 1.5 0.8 2.2 1.2 0.1 0.1 0.3 0.2 0.4 0.3 0.3 0.2 1 0.4 1.2 0.7 0.3 0.5 0 1.6-0.1 2.1-0.3 1.3-0.6 2.5-0.8 3.8-0.3 2.1-1 4.1-1.5 6-0.1 0.1-0.3 0.3-0.4 0.5-0.3 0.4 0.1 0.8 0.5 0.7v0.2c0 0.2 0.4 0.1 0.5 0 0.2-0.1 0.3-0.3 0.5-0.4s0.3-0.2 0.5-0.3c2-0.8 4-1.5 5.8-2.6 0.7 1.4 1.4 2.9 2 4.3 0.5 1.1 1.4 3.1 2.9 3.2 1.8 0.1 3.8-2.6 5.1-3.7 2.1-1.6 4.4-3.1 6.5-4.7 3.9-2.8 7.7-5.7 11.4-8.8 0.9-0.8 1.4-1.8 2.3-2.6 1-1 2.2-1.6 3.3-2.4 0.9-0.7 1.5-1.5 2.2-2.3 0.7-0.7 1.6-1.5 2.1-2.5-0.2-0.3-0.3-0.6-0.6-0.6zm-46.5 7 0.6 0.3 0.9 0.6c-0.6-0.3-1.1-0.6-1.5-0.9zm2.4 0.6c-0.7-0.7-1.2-1-2.1-1.4-1.2-0.5-2.6-1-3.8-1.4h-0.1c-0.3-0.2-0.7-0.4-1-0.5-0.5-0.3-1.5-0.4-0.9-0.9 0.2-0.1 0.7-0.1 0.9-0.2 1.2-0.3 2.4-0.5 3.7-0.7 2.6-0.1 5.2 0.1 7.5-0.1 1.2-0.1 2.3-0.2 3.5-0.3h1.9 0.1c0.7 0 1.4 0.1 2.2 0.1 1.9 0.2 3.8 0.1 5.7 0.2 4.3 0.1 8.4 0.1 12.7-0.3 2.1-0.2 4.2-0.5 6.3-0.7 1.2-0.1 2.3-0.2 3.5-0.2-0.5 0.1-1 0.3-1.5 0.3-1.8 0.3-3.5 0.6-5.2 0.9-3.4 0.4-6.8 0.9-10.1 1.6-3.4 0.7-6.8 1.5-10.3 2.2-3.7 0.7-7 2.4-10.7 3.3-0.1-0.1-0.2-0.1-0.3-0.1-0.6-0.9-1.2-1.1-2-1.8zm1.5 9.8c0.1-0.5 0.3-0.9 0.4-1.3 0.3-1.1 0.4-2.3 0.6-3.5 0.1-0.8 0.4-1.6 0.4-2.5 0 0 0-0.1 0.1-0.1 0.3-0.2 1.8-0.3 2-0.3 1.4-0.4 2.9-1 4.3-1.5 1.2-0.5 2.5-0.9 3.8-1.2 3.3-0.7 6.5-1.3 9.8-2.2 3.5-0.9 7.1-1.2 10.7-1.7 1.6-0.2 3.3-0.5 4.9-0.8 1-0.2 2-0.5 3.1-0.7-0.6 0.3-1.2 0.7-1.9 1-1.2 0.5-2.4 0.8-3.6 1.2-2.5 1.1-4.8 2.5-7.1 3.8-1 0.4-2 0.8-3.1 1.2-2.2 0.9-4.3 1.8-6.4 2.7-1.5 0.6-3.1 1.1-4.6 1.8-1.1 0.5-2.2 1-3.3 1.5-0.2 0.1-0.5 0.2-0.7 0.3-0.5 0.2-1 0.4-1.4 0.5-1.1 0.3-2.4 0.6-3.3 1.1-0.1-0.1-0.3-0.1-0.4 0.1-1.3 0.9-2.6 2-3.8 2.9-0.3 0.3-0.7 0.5-1 0.8 0.1-0.8 0.3-1.9 0.5-3.1zm4.7 1.9c-1.4 0.8-3.1 1.4-4.6 2 0.1-0.2 0.3-0.3 0.3-0.4 0.3-0.2 0.5-0.3 0.7-0.5 1-0.9 2.1-1.8 3.2-2.6 0.2 0.5 0.4 0.9 0.6 1.4-0.1 0.1-0.2 0.1-0.2 0.1zm34.9-16.3c-0.5 0.4-0.9 0.9-1.3 1.2l-0.4 0.4c-0.2 0.1-0.3 0.3-0.5 0.4-1 0.7-2 1.4-2.9 2.2-0.5 0.5-0.9 1-1.2 1.5-1 0.9-1.9 1.8-2.9 2.6-0.8 0.6-1.6 1.2-2.3 1.8-1.6 1.4-3.4 2.7-5.2 4-3.3 2.4-6.7 4.6-9.8 7.3-0.7 0.5-1.2 1-1.9 1.6-0.7 0.4-1.3 0.5-2-0.1-0.2-0.3-0.3-0.7-0.4-0.9-0.5-1-1-2-1.4-3-0.7-1.6-1.2-3.3-2.3-4.6 1.4-0.8 3.4-1 4.8-1.6s2.8-1.5 4.3-2l9.6-3.6c2.9-1.2 5.4-2.7 8.2-4.1 0.1-0.1 0.3-0.1 0.4-0.1 1.7-0.7 3.3-1.6 5-2.3 0.7-0.3 1.4-0.5 2.1-0.8 0.1-0.1 0.3-0.2 0.5-0.3l-0.4 0.4z">
					</path>
					<path class="fill-success"
						d="m89.1 0c-0.5 0-1 0.1-1.4 0.3-0.3 0.1-0.5 0.3-0.8 0.3-0.3 0.1-0.6 0-0.9 0.1-0.1 0-0.3 0.2-0.3 0.3v0.2c-0.1 0.5 0.7 0.8 0.9 0.3 0.4-0.1 0.7 0 1.1-0.2 0.5-0.3 0.9-0.4 1.4-0.4 0.6 0 0.6-0.9 0-0.9z">
					</path>
					<path class="fill-success"
						d="m77.1 0.9c-0.7 0-1.4-0.1-2.2-0.1-0.6 0-1.4 0-1.8 0.5s0.3 1.1 0.7 0.7c0.3-0.3 1.2-0.2 1.6-0.2 0.5 0 1.1 0.1 1.6 0.1 0.7-0.1 0.7-1 0.1-1z">
					</path>
					<path class="fill-success" d="m65.5 1.5h-2.9c-0.6 0-0.6 0.9 0 0.9h2.9c0.6 0 0.6-0.9 0-0.9z"></path>
					<path class="fill-success"
						d="m55.7 2.1c-0.9-0.3-2.7-0.7-3.1 0.5-0.1 0.6 0.7 0.8 0.9 0.3 0.1-0.4 1.7 0 2 0.1 0.5 0.2 0.7-0.6 0.2-0.9z">
					</path>
					<path class="fill-success"
						d="m46.1 2.7c-0.7 0-1.3-0.1-2 0s-1.2 0.4-1.8 0.4-0.6 0.9 0 0.9 1.1-0.2 1.6-0.3c0.7-0.2 1.4-0.1 2.2-0.1 0.6 0.1 0.6-0.9 0-0.9z">
					</path>
					<path class="fill-success"
						d="m35 4.5c-1 0.4-2.3 0.6-3.1 1.4-0.5 0.4 0.2 1 0.7 0.7 0.7-0.7 1.8-0.9 2.7-1.2 0.5-0.3 0.3-1.1-0.3-0.9z">
					</path>
					<path class="fill-success"
						d="m24 9c-0.6 0.5-1.6 0.6-1.8 1.4-0.1 0.6 0.7 0.8 0.9 0.3 0.1-0.3 0.5-0.4 0.7-0.5 0.3-0.2 0.7-0.3 0.9-0.5 0.4-0.4-0.3-1.1-0.7-0.7z">
					</path>
					<path class="fill-success"
						d="m15.7 15c-0.3 0.5-0.5 0.9-0.7 1.4-0.2 0.6-0.5 1.1-0.7 1.7-0.1 0.6 0.8 0.9 0.9 0.3 0.1-0.5 0.4-1 0.6-1.5s0.3-0.9 0.7-1.4-0.4-1-0.8-0.5z">
					</path>
					<path class="fill-success"
						d="m10.6 23.6c-0.3-0.1-0.5 0.1-0.6 0.3-0.3 0.7-0.5 1.3-0.5 2 0 0.6 0.9 0.6 0.9 0 0-0.7 0.1-1.2 0.4-1.8 0.2-0.1 0-0.4-0.2-0.5z">
					</path>
					<path class="fill-success" d="m6.4 36.1v2.6c0 0.6 0.9 0.6 0.9 0v-2.6c0-0.6-0.9-0.6-0.9 0z"></path>
					<path class="fill-success"
						d="m7.1 45.8c-0.1-0.3 0-0.7 0-1 0-0.6-0.9-0.6-0.9 0 0 0.3-0.1 0.7 0 1 0.1 0.4 0.3 0.7 0.2 1-0.1 0.6 0.9 0.6 0.9 0 0.1-0.3-0.1-0.6-0.2-1z">
					</path>
					<path class="fill-success"
						d="m8.7 57.4c-0.4-0.7-0.6-1.6-1.1-2.2-0.4-0.5-1 0.2-0.7 0.7 0.5 0.6 0.7 1.4 1 2 0.2 0.5 1.1 0 0.8-0.5z">
					</path>
					<path class="fill-success"
						d="m13.3 63.9c-0.8-0.8-1.4-1.6-2.4-2.2-0.5-0.3-1 0.5-0.5 0.8 0.9 0.5 1.5 1.3 2.2 2 0.5 0.4 1.1-0.2 0.7-0.6z">
					</path>
					<path class="fill-success"
						d="m20.9 69.2c-0.5-0.1-1-0.4-1.5-0.7-0.5-0.2-0.9-0.5-1.2-0.9-0.4-0.4-1 0.3-0.7 0.7 0.4 0.4 0.9 0.8 1.4 1 0.6 0.3 1.1 0.7 1.8 0.7 0.5 0.2 0.7-0.7 0.2-0.8z">
					</path>
					<path class="fill-success"
						d="m31.1 72c-0.2 0-0.3-0.1-0.5-0.1-0.2-0.1-0.4 0-0.6-0.1-0.5-0.1-1-0.3-1.3-0.5-0.5-0.4-1.1 0.3-0.7 0.7 0.5 0.4 1 0.6 1.5 0.7 0.3 0.1 0.5 0 0.8 0.1s0.5 0.2 0.8 0.2c0.6-0.2 0.6-1.1 0-1z">
					</path>
					<path class="fill-success"
						d="m36.2 74.5c-0.1 0-0.3-0.2-0.3-0.3-0.1-0.1-0.3-0.3-0.4-0.5-0.4-0.4-1 0.2-0.7 0.7 0.4 0.4 0.7 0.9 1.4 1 0.3 0 0.5-0.2 0.5-0.5-0.1-0.2-0.3-0.4-0.5-0.4z">
					</path>
					<path class="fill-success"
						d="m46.7 80.6c-0.3 0-0.7-0.5-0.9-0.7-0.4-0.3-0.9-0.4-1.3-0.7-0.5-0.4-1.1 0.3-0.7 0.7 0.5 0.4 1.1 0.5 1.6 0.9 0.4 0.3 0.7 0.7 1.2 0.7 0.7 0.1 0.7-0.8 0.1-0.9z">
					</path>
					<path class="fill-success"
						d="m54.3 86.1c-0.4-0.4-0.7-0.8-1-1.2-0.3-0.5-1.2 0-0.8 0.5 0.3 0.4 0.5 0.8 0.9 1.1 0.2 0.2 0.7 0.5 0.7 0.7 0.1 0.6 1 0.6 0.9 0-0.1-0.5-0.3-0.8-0.7-1.1z">
					</path>
					<path class="fill-success"
						d="m60.3 93.1c0.1 0 0-0.1-0.1-0.1-0.1-0.1-0.1-0.1-0.1-0.2-0.1-0.2-0.3-0.3-0.5-0.5-0.3-0.3-0.7-0.7-0.7-1.2-0.1-0.6-1-0.3-0.9 0.3s0.5 1.1 0.9 1.5c0.2 0.2 0.4 0.4 0.5 0.7s0.3 0.4 0.6 0.5c0.6 0 0.9-0.8 0.3-1z">
					</path>
					<path class="fill-success"
						d="m64.9 100.9v-0.9c0-0.6-0.9-0.6-0.9 0 0 0.5-0.1 0.9 0.1 1.4 0.1 0.1 0.1 0.3 0.3 0.3h0.2c0.3 0.1 0.5-0.1 0.6-0.3 0-0.2-0.2-0.4-0.3-0.5z">
					</path>
					<path class="fill-success"
						d="m66.5 110.5c-0.5-0.4 0.1-1.7 0.1-2.2 0.1-0.6-0.9-0.6-0.9 0-0.1 0.9-0.7 2.2 0.1 2.9 0.5 0.3 1.1-0.3 0.7-0.7z">
					</path>
					<path class="fill-success"
						d="m64.2 116.7c-0.4 0.7-0.8 1.2-0.9 2-0.1 0.6 0.8 0.9 0.9 0.3 0.1-0.7 0.5-1.2 0.8-1.8 0.3-0.5-0.4-1-0.8-0.5z">
					</path>
					<path class="fill-success"
						d="m59.6 126.6c-0.1-0.3-0.4-0.3-0.7-0.2s-0.6 0.3-0.9 0.4-0.4 0.3-0.3 0.6 0.3 0.3 0.6 0.3c0.4-0.1 0.8-0.3 1.2-0.5 0.2 0 0.2-0.4 0.1-0.6z">
					</path>
					<path class="fill-success"
						d="m48.5 127.2c-0.8 0.1-1.6 0.2-2.3 0.2-0.6 0-0.6 0.9 0 0.9 0.8 0 1.6-0.1 2.3-0.2 0.6-0.1 0.6-1 0-0.9z">
					</path>
					<path class="fill-success"
						d="m40.9 126.6c-0.3-0.3-0.5-0.5-0.8-0.7-0.1-0.1-0.3-0.1-0.5-0.2s-0.3-0.1-0.4-0.1c-0.4-0.5-1 0.2-0.7 0.7 0.3 0.3 0.6 0.3 0.9 0.4s0.6 0.4 0.8 0.7c0.4 0.3 1.1-0.3 0.7-0.8z">
					</path>
					<path class="fill-success"
						d="m38.9 127.3c-0.3-0.5-0.7-0.9-1.1-1.4-0.4-0.4-1 0.2-0.7 0.7 0.4 0.4 0.7 0.7 1 1.2s1.1 0 0.8-0.5z">
					</path>
					<path class="fill-success"
						d="m33.7 119.8c-0.1-0.1-0.3-0.3-0.3-0.5 0-0.6-0.9-0.6-0.9 0 0 0.5 0.3 0.9 0.6 1.2 0.4 0.3 1.1-0.3 0.6-0.7z">
					</path>
					<path class="fill-success"
						d="m34.2 110c0 0.1-0.3 0.3-0.3 0.3-0.1 0.1-0.3 0.3-0.4 0.5-0.2 0.4-0.3 0.8-0.3 1.2-0.1 0.6 0.9 0.6 0.9 0 0.1-0.5 0.2-0.9 0.5-1.2s0.5-0.5 0.5-1c0.1-0.4-0.8-0.4-0.9 0.2z">
					</path>
					<path class="fill-success"
						d="m40.8 103.2c-0.5 0.1-0.9 0.5-1.3 0.7-0.5 0.3-0.8 0.7-1 1.2-0.3 0.5 0.5 1 0.8 0.5 0.2-0.4 0.5-0.7 0.8-0.9 0.4-0.3 0.8-0.6 1.2-0.7 0.1 0 0.3-0.2 0.3-0.3s0-0.1 0.1-0.2c0.1-0.5-0.7-0.8-0.9-0.3z">
					</path>
					<path class="fill-success"
						d="m49.4 100.3c-0.7-0.1-1.4 0.1-2 0.3-0.6 0.1-1 0.3-1.4 0.7-0.4 0.5 0.3 1.1 0.7 0.7s0.8-0.5 1.3-0.5c0.5-0.1 1-0.2 1.6-0.2 0.4-0.1 0.4-1-0.2-1z">
					</path>
					<path class="fill-success"
						d="m57 100.4c-0.8-0.6-1.7-0.7-2.6-0.8-0.6 0-0.6 0.9 0 0.9 0.7 0 1.4 0.1 2 0.5 0.4 0.4 1-0.3 0.6-0.6z">
					</path>
					<path class="fill-success"
						d="m66.5 103.9c-1.1-0.3-2.1-0.9-3.3-0.9-0.6 0.1-0.6 1 0 0.9 1.1-0.1 2 0.6 3 0.9 0.6 0 0.8-0.8 0.3-0.9z">
					</path>
					<path class="fill-success"
						d="m79.7 109.4c-0.6-0.7-1.1-1.4-1.8-2-0.8-0.6-1.6-0.9-2.5-1.3-0.5-0.3-1 0.5-0.5 0.8 0.8 0.4 1.6 0.7 2.3 1.1 0.7 0.5 1.2 1.3 1.8 2 0.5 0.5 1.1-0.1 0.7-0.6z">
					</path>
					<path class="fill-success"
						d="m87 114.4c-0.6-0.1-1.2-0.7-1.6-1.1s-1 0.2-0.7 0.7c0.6 0.6 1.3 1.3 2.2 1.4 0.7 0 0.7-1 0.1-1z">
					</path>
					<path class="fill-success"
						d="m97.7 120.6c-0.8-0.8-1.6-1.4-2.6-1.8-0.9-0.4-1.6-0.9-2.6-0.9-0.6 0-0.6 0.9 0 0.9 1.6 0 3.5 1.4 4.5 2.4 0.5 0.5 1.1-0.1 0.7-0.6z">
					</path>
					<path class="fill-success"
						d="m108.9 123.7c-0.5 0-1-0.3-1.5-0.4-0.4-0.1-1 0.1-1.4-0.1-0.5-0.4-1 0.3-0.7 0.7 0.5 0.5 1 0.4 1.6 0.4 0.7 0 1.2 0.5 1.9 0.4 0.7-0.2 0.8-1.1 0.1-1z">
					</path>
					<path class="fill-success"
						d="m118.2 126c-0.5 0-1 0.1-1.5 0s-0.9-0.3-1.3-0.4c-0.5-0.2-0.8 0.7-0.3 0.9 1 0.4 2 0.5 3.1 0.5 0.6-0.1 0.6-1 0-1z">
					</path>
					<path class="fill-success"
						d="m125.5 124c-0.5 0.5-1 0.8-1.7 0.9-0.6 0.1-0.3 1 0.3 0.9 0.8-0.2 1.5-0.6 2.1-1.2 0.4-0.4-0.3-1-0.7-0.6z">
					</path>
					<path class="fill-success"
						d="m128.7 117c-0.5 0.5-0.4 1.2-0.4 1.8-0.1 0.8-0.6 1.4-0.6 2.3 0 0.6 0.9 0.6 0.9 0 0-0.7 0.4-1.2 0.5-1.8 0.1-0.5-0.1-1.3 0.2-1.6 0.4-0.4-0.2-1.1-0.6-0.7z">
					</path>
					<path class="fill-success"
						d="m130.1 112c-0.3-0.5-0.1-1.2-0.3-1.8-0.1-0.3-0.1-0.7-0.3-0.9-0.1-0.3-0.3-0.6-0.4-1-0.1-0.6-1-0.3-0.9 0.3 0.1 0.3 0.3 0.6 0.4 0.9 0.1 0.4 0.3 0.8 0.3 1.2 0.2 0.7 0.1 1.2 0.4 1.8 0.2 0.6 1 0.1 0.8-0.5z">
					</path>
					<path class="fill-success"
						d="m127.7 104.9c-0.2-0.5-0.4-1.1-0.3-1.6 0.1-0.6-0.9-0.6-0.9 0-0.1 0.7 0.2 1.5 0.5 2.2 0.2 0.4 1-0.1 0.7-0.6z">
					</path>
					<path class="fill-success"
						d="m131 96.8c-0.3 0.3-0.7 0.3-0.9 0.5-0.4 0.2-0.7 0.5-1 0.9-0.4 0.4 0.3 1 0.7 0.7 0.3-0.3 0.6-0.6 0.9-0.8 0.3-0.1 0.7-0.3 1-0.5 0.4-0.5-0.3-1.2-0.7-0.8z">
					</path>
					<path class="fill-success"
						d="m136.4 96c-0.6 0-0.6 0.9 0 0.9 0.5 0 0.9-0.1 1.4-0.1 0.3 0 0.6 0 0.9 0.1 0.1 0 0.2 0.1 0.3 0.1h0.1c0.1 0.5 0.9 0.5 0.9-0.1-0.1-1.4-2.9-0.9-3.6-0.9z">
					</path>
					<path class="fill-success"
						d="m144.9 99.2c-0.5-0.3-1 0.5-0.5 0.8 0.7 0.5 2.5 1.1 2.3 2.2-0.1 0.6 0.8 0.9 0.9 0.3 0.3-1.7-1.6-2.5-2.7-3.3z">
					</path>
					<path class="fill-success"
						d="m156.6 106c-1.5-0.1-2.9-0.5-4.3-1-0.5-0.2-0.8 0.7-0.3 0.9 1.4 0.5 2.9 1 4.6 1 0.6 0 0.6-0.9 0-0.9z">
					</path>
					<path class="fill-success"
						d="m163 104.9c-0.4 0-0.7-0.1-1.1 0-0.3 0.1-0.7 0.3-1 0.2-0.6-0.1-0.6 0.9 0 0.9 0.3 0 0.7-0.1 1-0.2 0.4-0.1 0.8 0 1.1 0 0.6 0 0.6-0.9 0-0.9z">
					</path>
					<path class="fill-success"
						d="m168.1 103.9c0.5-0.1 0.5-0.9-0.1-0.9-0.5 0-0.9 0.4-1.2 0.7-0.1 0.2-0.3 0.4-0.3 0.7s0.3 0.5 0.5 0.6c0.3 0.1 0.5-0.1 0.6-0.3 0-0.1 0-0.3-0.1-0.4l0.2-0.2c0.1-0.1 0.1-0.1 0.2-0.1 0.1-0.1 0.1-0.1 0.2-0.1z">
					</path>
				</svg>
			</figure>

			<!-- SVG image decoration -->
			<div class="position-absolute bottom-0 end-0 d-none d-lg-block">
				<img src="<?php echo bloginfo('template_directory');?>/src/assets/images/element/rocket.svg" alt="">
			</div>

			<div class="container position-relative py-5">
				<!-- Title -->
				<div class="row">
					<div class="col-lg-8 mb-4">
						<h2>Awards and Recognition</h2>
						<p class="mb-0">Perceived end knowledge certainly day sweetness why cordially</p>
					</div>
				</div>
				<div class="row g-4 g-lg-5">
					<!-- Item -->
					<div class="col-sm-6 col-md-3 col-xl-2">
						<div class="bg-body shadow rounded-3 text-center p-4 position-relative">
							<!-- Image -->
							<img src="<?php echo bloginfo('template_directory');?>/src/assets/images/awards/tech-excellence-award-2015.webp" class="img-fluid mb-3"
								alt="">
						</div>
					</div>

					<!-- Item -->
					<div class="col-sm-6 col-md-3 col-xl-2">
						<div class="bg-body shadow rounded-3 text-center p-4 position-relative">
							<!-- Image -->
							<img src="<?php echo bloginfo('template_directory');?>/src/assets/images/awards/retail-excellence-award.webp" class="img-fluid mb-3" alt="">
						</div>
					</div>

					<!-- Item -->
					<div class="col-sm-6 col-md-3 col-xl-2">
						<div class="bg-body shadow rounded-3 text-center p-4 position-relative">
							<!-- Image -->
							<img src="<?php echo bloginfo('template_directory');?>/src/assets/images/awards/tech-excellence-award.webp" class="img-fluid mb-3" alt="">
						</div>
					</div>

					<!-- Item -->
					<div class="col-sm-6 col-md-3 col-xl-2">
						<div class="bg-body shadow rounded-3 text-center p-4 position-relative">
							<!-- Image -->
							<img src="<?php echo bloginfo('template_directory');?>/src/assets/images/awards/learning-technologies-award.webp" class="img-fluid mb-3"
								alt="">
						</div>
					</div>

					<!-- Item -->
					<div class="col-sm-6 col-md-3 col-xl-2">
						<div class="bg-body shadow rounded-3 text-center p-4 position-relative">
							<!-- Image -->
							<img src="<?php echo bloginfo('template_directory');?>/src/assets/images/awards/olive-product-of-the-year.webp" class="img-fluid mb-3"
								alt="">
						</div>
					</div>

					<!-- Item -->
					<div class="col-sm-6 col-md-3 col-xl-2">
						<div class="bg-body shadow rounded-3 text-center p-4 position-relative">
							<!-- Image -->
							<img src="<?php echo bloginfo('template_directory');?>/src/assets/images/awards/olive-national-training-awards.webp" class="img-fluid mb-3"
								alt="">
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- =======================
Course END -->


		<!-- =======================
Live courses START -->
		<section class="bg-light position-relative">

			<!-- SVG decoration -->
			<figure class="position-absolute top-50 start-0 translate-middle-y ms-5 d-none d-xxl-block">
				<svg width="29px" height="29px">
					<path class="fill-orange"
						d="M29.004,14.502 C29.004,22.512 22.511,29.004 14.502,29.004 C6.492,29.004 -0.001,22.512 -0.001,14.502 C-0.001,6.492 6.492,-0.001 14.502,-0.001 C22.511,-0.001 29.004,6.492 29.004,14.502 Z">
					</path>
				</svg>
			</figure>

			<!-- SVG decoration -->
			<figure class="position-absolute bottom-0 start-50 translate-middle-x">
				<svg width="23px" height="23px">
					<path class="fill-primary"
						d="M23.003,11.501 C23.003,17.854 17.853,23.003 11.501,23.003 C5.149,23.003 -0.001,17.854 -0.001,11.501 C-0.001,5.149 5.149,-0.000 11.501,-0.000 C17.853,-0.000 23.003,5.149 23.003,11.501 Z">
					</path>
				</svg>
			</figure>

			<!-- SVG decoration -->
			<figure class="position-absolute top-50 end-0 translate-middle-y ms-5">
				<svg width="22px" height="22px">
					<path class="fill-warning"
						d="M22.003,11.001 C22.003,17.078 17.077,22.003 11.001,22.003 C4.925,22.003 -0.001,17.078 -0.001,11.001 C-0.001,4.925 4.925,-0.000 11.001,-0.000 C17.077,-0.000 22.003,4.925 22.003,11.001 Z">
					</path>
				</svg>
			</figure>

			<div class="container">
				<!-- Live course START -->
				<div class="row g-4 align-items-center justify-content-between">
					<!-- Content -->
					<div class="col-md-6 col-xl-4">
						<h2 class="fs-1">Stories of business transformation</h2>
						<p>The following events stand witness of our exemplary track record of helping enterprises and
							edupreneurs transform their journeys by effectively training their human resources. Here are
							a few of the notable mentions of how beneficiaries turned great supporters and friends
							changed their journeys with us over the years!</p>
						<!-- Truested slider START -->
						<div class="row justify-content-center">
							<!-- Sub tittle -->
							<h5 class="mb-3">Trusted by</h5>
							<div class="col-md-12">
								<!-- Slider START -->
								<div class="tiny-slider arrow-round storyTrusted">
									<div class="tiny-slider-inner" data-arrow="false" data-dots="false" data-gutter="80"
										data-items="3" data-items-sm="2" data-autoplay="2000">
										<!-- Slide item START -->
										<div class="item">
											<img class="grayscale" src="<?php echo bloginfo('template_directory');?>/src/assets/images/story/jaguar-landrover.webp"
												class="img-fluid" alt="">
										</div>
										<div class="item">
											<img class="grayscale" src="<?php echo bloginfo('template_directory');?>/src/assets/images/story/Microsoft_logo_(2012).svg"
												class="img-fluid" alt="">
										</div>
										<div class="item">
											<img class="grayscale" src="<?php echo bloginfo('template_directory');?>/src/assets/images/story/nocn.webp" class="img-fluid"
												alt="">
										</div>
										<div class="item">
											<img class="grayscale" src="<?php echo bloginfo('template_directory');?>/src/assets/images/story/sport-ireland.webp"
												class="img-fluid" alt="">
										</div>
										<div class="item">
											<img class="grayscale" src="<?php echo bloginfo('template_directory');?>/src/assets/images/story/tesco.webp"
												class="img-fluid" alt="">
										</div>
										<!-- Slide item END -->
									</div>
								</div>
								<!-- Slider END -->
							</div>
						</div>
						<!-- Truested slider END -->

						<!-- Get more view the story -->
						<a href="#" class="btn btn-orange mb-0 mt-4">Get more stores</a>

					</div>

					<!-- Course video START -->
					<div class="col-md-6 col-xl-8">
						<div class="row">
							<!-- Slider START -->
							<div class="tiny-slider arrow-round arrow-blur">
								<div class="tiny-slider-inner" data-autoplay="false" data-edge="2" data-arrow="true"
									data-dots="false" data-items-lg="1" data-items-xl="2">

									<!-- Card START -->
									<div>
										<div class="card p-2">
											<div class="position-relative">
												<!-- Image -->
												<img src="<?php echo bloginfo('template_directory');?>/src/assets/images/story/img/jrl-olive.webp"
													class="card-img rounded-2" alt="Card image">
											</div>

											<!-- Card body -->
											<div class="card-body">
												<!-- Title -->
												<h5><a href="#">The JLR Partnership</a></h5>
												<!-- Member group and button -->
												<div
													class="d-sm-flex justify-content-sm-between align-items-center mt-3">
													<!-- Member Group -->
													<div>
														<h6 class="mb-1 fw-normal"><i
																class="fas fa-circle fw-bold text-success small me-2"></i>Members
														</h6>
														<ul class="member-group mb-2 mb-sm-0">
															<li class="member member-xs-w">
																<img class="member-img"
																	src="<?php echo bloginfo('template_directory');?>/src/assets/images/story/clients/jaguar.png"
																	alt="member">
															</li>
															<li class="member member-xs-w">
																<img class="member-img"
																	src="<?php echo bloginfo('template_directory');?>/src/assets/images/story/clients/landrover.jpg"
																	alt="member">
															</li>
														</ul>
													</div>
													<!-- Button -->
													<button class="btn btn-sm btn-success mb-0">Know more</button>
												</div>
											</div>
										</div>
									</div>
									<!-- Card END -->

									<!-- Card START -->
									<div>
										<div class="card p-2">
											<div class="position-relative">
												<!-- Image -->
												<img src="<?php echo bloginfo('template_directory');?>/src/assets/images/story/img/nocn-partnership.webp"
													class="card-img rounded-2" alt="Card image">
											</div>

											<!-- Card body -->
											<div class="card-body">
												<!-- Title -->
												<h5><a href="#">The NOCN Partnership</a></h5>
												<!-- Member group and button -->
												<div
													class="d-sm-flex justify-content-sm-between align-items-center mt-3">
													<!-- Member Group -->
													<div>
														<h6 class="mb-1 fw-normal"><i
																class="fas fa-circle fw-bold text-success small me-2"></i>Members
														</h6>
														<ul class="member-group mb-2 mb-sm-0">
															<li class="member member-xs-w">
																<img class="member-img"
																	src="<?php echo bloginfo('template_directory');?>/src/assets/images/story/clients/nocn.webp"
																	alt="member">
															</li>
														</ul>
													</div>
													<!-- Button -->
													<button class="btn btn-sm btn-success mb-0">Know more</button>
												</div>
											</div>
										</div>
									</div>
									<!-- Card END -->

									<!-- Card START -->
									<div>
										<div class="card p-2">
											<div class="position-relative">
												<!-- Image -->
												<img src="<?php echo bloginfo('template_directory');?>/src/assets/images/story/img/tesco-partnership.webp"
													class="card-img rounded-2" alt="Card image">
											</div>

											<!-- Card body -->
											<div class="card-body">
												<!-- Title -->
												<h5><a href="#">The TESCO Partnership</a></h5>
												<!-- Member group and button -->
												<div
													class="d-sm-flex justify-content-sm-between align-items-center mt-3">
													<!-- Member Group -->
													<div>
														<h6 class="mb-1 fw-normal"><i
																class="fas fa-circle fw-bold text-success small me-2"></i>Members
														</h6>
														<ul class="member-group mb-2 mb-sm-0">
															<li class="member member-xs-w">
																<img class="member-img"
																	src="<?php echo bloginfo('template_directory');?>/src/assets/images/story/clients/tesco.webp"
																	alt="member">
															</li>
														</ul>
													</div>
													<!-- Button -->
													<button class="btn btn-sm btn-success mb-0">Know more</button>
												</div>
											</div>
										</div>
									</div>
									<!-- Card END -->

								</div>
							</div>
							<!-- Slider END -->
						</div>
					</div>
					<!-- Course video END -->
				</div>
				<!-- Live course END -->
			</div>
		</section>
		<!-- =======================
Live courses END -->

		<!-- =======================
Latest news START -->
		<section>
			<div class="container">
				<!-- Title -->
				<div class="row mb-4">
					<div class="d-md-flex justify-content-md-between align-items-center">
						<h2 class="mb-2 mb-md-0">
							<div class="d-inline-block text-warning py-2 rounded-pill mb-3">
								Hiup
							</div> Latest News
						</h2>
						<!-- <h2 class="mb-2 mb-md-0">
							<div class="d-inline-block bg-warning px-3 py-2 rounded-pill mb-3 ws-n3">
								<span class="badge text-dark p-0"><strong>Hi</strong></span>
								<span class="badge text-white p-0"><strong>up</strong></span>
							</div> Latest News
						</h2> -->
						<div>
							<span class="me-2">Want to read more?</span>
							<a href="#" class="btn btn-sm btn-primary-soft mb-0">Go here<i
									class="fas fa-angle-right ms-2"></i></a>
						</div>
					</div>
				</div>

				<div class="row g-4">
					<div class="col-md-6 col-lg-4">
						<!-- Card item START -->
						<div class="card bg-transparent">
							<div class="overflow-hidden rounded-3">
								<img src="<?php echo bloginfo('template_directory');?>/src/assets/images/news/virtual-reality-learning.webp" class="card-img"
									alt="Card image">
								<!-- Overlay -->
								<div class="bg-overlay bg-dark opacity-4"></div>
								<div class="card-img-overlay d-flex align-items-start flex-column p-3">
									<!-- badge -->
									<a href="https://www.irishtimes.com/topics/topics-7.1213540?article=true&tag_person=Brendan+Kavanagh"
										class="badge bg-danger text-white">irishtimes</a>
								</div>
							</div>
							<!-- Card body -->
							<div class="card-body px-3">
								<!-- Title -->
								<h5 class="card-title"><a href="#">Olive Group rolls out new online training
										platform</a></h5>
								<p class="text-truncate-2">Irish-founded educational technology group Olive has launched
									a new online training platform that it expects will add an extra €8 million to
									company revenues by year-end 2022.
									The company, founded by entrepreneur Brendan Kavanagh in 2006, has invested €5
									million in My Virtual Tutor, which allows for remote staff learning, upskilling and
									regulatory compliance.
									Olive Group has gone live with
								</p>
								<!-- Info -->
								<div class="d-flex justify-content-between">
									<h6 class="mb-0"><a
											href="https://www.irishtimes.com/topics/topics-7.1213540?article=true&tag_person=Brendan+Kavanagh">Brendan
											Kavanagh</a></h6>
									<span class="small">March 30, 2020</span>
								</div>
							</div>
						</div>
						<!-- Card item END -->
					</div>

					<div class="col-md-6 col-lg-8">
						<div class="row g-4">
							<div class="col-lg-7">
								<!-- Card item START -->
								<div class="card bg-light p-3 mb-4">
									<div class="card-body">
										<!-- Badge -->
										<a href="#" class="badge bg-success text-white mb-2">Covid-9</a>
										<!-- Title -->
										<h5 class="card-title"><a href="#">Covid-19 and the college experienced</a></h5>
										<p class="text-truncate-2">Rooms oh fully taken by worse do. Points afraid but
											may end law.Points afraid
											but may end law.</p>
										<!-- Info -->
										<div class="d-flex justify-content-between">
											<h6 class="mb-0"><a href="#">Covid-9</a></h6>
											<span class="small">November 8, 2021</span>
										</div>
									</div>
								</div>
								<!-- Card item END -->

								<!-- Card item START -->
								<div class="card bg-transparent">
									<div class="overflow-hidden rounded-3">
										<img src="<?php echo bloginfo('template_directory');?>/src/assets/images/news/digital-business.webp" alt="Card image">
										<!-- Overlay -->
										<div class="bg-overlay bg-dark opacity-4"></div>
										<div class="card-img-overlay d-flex align-items-start flex-column p-3">
											<!-- badge -->
											<a href="#" class="badge bg-info text-white">OliveGroup</a>
										</div>
									</div>
									<!-- Card body -->
									<div class="card-body px-3">
										<!-- Title -->
										<h5 class="card-title"><a href="#">Digital Business Ireland partners with Olive
												Group</a>
										</h5>
										<p class="text-truncate-2">Commenting on the partnership, Lorraine Higgins,
											Chief Executive of Digital Business Ireland </p>

										<!-- Info -->
										<div class="d-flex justify-content-between">
											<h6 class="mb-0"><a href="#">Digital Business</a></h6>
											<span class="small">August 17, 2020</span>
										</div>
									</div>
								</div>
								<!-- Card item END -->
							</div>

							<div class="col-lg-5">
								<!-- Card item START -->
								<div class="card bg-transparent">
									<div class="overflow-hidden rounded-3">
										<img src="<?php echo bloginfo('template_directory');?>/src/assets/images/news/RAI.webp" class="card-img-top" alt="course image">
										<!-- Overlay -->
										<div class="bg-overlay bg-dark opacity-2 rounded-2"></div>
										<div class="card-img-overlay d-flex align-items-start flex-column p-3">
											<!-- badge -->
											<a href="https://www.rai.ie/"
												class="badge bg-purple text-white">www.rai.ie</a>
										</div>
									</div>
									<!-- Card body -->
									<div class="card-body px-3">
										<!-- Title -->
										<h5 class="card-title"><a href="#">RAI and Olive Learning partner to launch
												digital training packages for RAI members</a></h5>
										<p class="text-truncate-2">The Restaurant Association of Ireland and Olive
											Learning have partnered to
											launch a new online training platform, available for purchase by all
											association members.</p>
										<!-- Info -->
										<div class="d-flex justify-content-between">
											<h6 class="mb-0"><a href="https://www.rai.ie/">www.rai.ie</a></h6>
											<span class="small">November 8, 2021</span>
										</div>
									</div>
								</div>
								<!-- Card item END -->
							</div>
						</div><!-- Row END -->
					</div><!-- Row END -->
				</div>
			</div><!-- Row END -->
			</div>
		</section>
		<!-- =======================
Latest news END -->

		<!-- =======================
Blog START -->
		<section class="pb-0 pb-md-5">
			<div class="container">
				<!-- Title -->
				<div class="row mb-4">
					<h2 class="mb-0">Blog <span class="text-warning">Hiup</span> Insights</h2>
				</div>
				<div class="row">
					<!-- Slider START -->
					<div class="tiny-slider arrow-round arrow-creative arrow-blur arrow-hover">
						<div class="tiny-slider-inner" data-autoplay="false" data-arrow="true" data-dots="false"
							data-items-xl="3" data-items-md="2" data-items-xs="1">

							<!-- Card item START -->
							<div class="card bg-transparent">
								<div class="position-relative">
									<!-- Image -->
									<img src="<?php echo bloginfo('template_directory');?>/src/assets/images/blog/impact-lms-training.jpg" class="card-img"
										alt="course image">
									<!-- Overlay -->
									<div class="card-img-overlay d-flex align-items-start flex-column p-3">
										<div class="w-100 mt-auto">
											<!-- Category -->
											<a href="#" class="badge text-dark bg-white fs-6 rounded-1"><i
													class="far fa-calendar-alt text-orange me-2"></i>29 September
												2021</a>
										</div>
									</div>
								</div>

								<!-- Card body -->
								<div class="card-body px-2">
									<!-- Title -->
									<h5 class="card-title"><a href="#">Impact of LMS in corporate training</a>
									</h5>
									<!-- Address and button -->
									<div class="d-flex justify-content-between align-items-center">
										<Address class="mb-0"><i class="fas fa-map-marker-alt me-2"></i>Ireland
										</Address>
										<a href="#" class="btn btn-sm btn-primary-soft mb-0">Read more</a>
									</div>
								</div>
							</div>
							<!-- Card item END -->

							<!-- Card item START -->
							<div class="card bg-transparent">
								<div class="position-relative">
									<!-- Image -->
									<img src="<?php echo bloginfo('template_directory');?>/src/assets/images/blog/virtual-learning-platforms.webp" class="card-img"
										alt="course image">
									<!-- Overlay -->
									<div class="card-img-overlay d-flex align-items-start flex-column p-3">
										<div class="w-100 mt-auto">
											<!-- Category -->
											<a href="#" class="badge text-dark bg-white fs-6 rounded-1"><i
													class="far fa-calendar-alt text-orange me-2"></i>2 July 2022</a>
										</div>
									</div>
								</div>

								<!-- Card body -->
								<div class="card-body px-2">
									<!-- Title -->
									<h5 class="card-title"><a href="#">Tech Excellence Awards 2016</a></h5>
									<!-- Address and button -->
									<div class="d-flex justify-content-between align-items-center">
										<Address class="mb-0"><i class="fas fa-map-marker-alt me-2"></i>California
										</Address>
										<a href="#" class="btn btn-sm btn-primary-soft mb-0">Read more</a>
									</div>
								</div>
							</div>
							<!-- Card item END -->

							<!-- Card item START -->
							<div class="card bg-transparent">
								<div class="position-relative">
									<!-- Image -->
									<img src="<?php echo bloginfo('template_directory');?>/src/assets/images/blog/asbestos-look-like.jpg" class="card-img"
										alt="course image">
									<!-- Overlay -->
									<div class="card-img-overlay d-flex align-items-start flex-column p-3">
										<div class="w-100 mt-auto">
											<!-- Category -->
											<a href="#" class="badge text-dark bg-white fs-6 rounded-1"><i
													class="far fa-calendar-alt text-orange me-2"></i>29 September
												2021</a>
										</div>
									</div>
								</div>

								<!-- Card body -->
								<div class="card-body px-2">
									<!-- Title -->
									<h5 class="card-title"><a href="#">What Does Asbestos Look Like?</a></h5>
									<!-- Address and button -->
									<div class="d-flex justify-content-between align-items-center">
										<Address class="mb-0"><i class="fas fa-map-marker-alt me-2"></i>London</Address>
										<a href="#" class="btn btn-sm btn-primary-soft mb-0">Read more</a>
									</div>
								</div>
							</div>
							<!-- Card item END -->

							<!-- Card item START -->
							<div class="card bg-transparent">
								<div class="position-relative">
									<!-- Image -->
									<img src="<?php echo bloginfo('template_directory');?>/src/assets/images/blog/impact-lms-training.jpg" class="card-img"
										alt="course image">
									<!-- Overlay -->
									<div class="card-img-overlay d-flex align-items-start flex-column p-3">
										<div class="w-100 mt-auto">
											<!-- Category -->
											<a href="#" class="badge text-dark bg-white fs-6 rounded-1"><i
													class="far fa-calendar-alt text-orange me-2"></i>29 September
												2021</a>
										</div>
									</div>
								</div>

								<!-- Card body -->
								<div class="card-body px-2">
									<!-- Title -->
									<h5 class="card-title"><a href="#">Impact of LMS in corporate training</a>
									</h5>
									<!-- Address and button -->
									<div class="d-flex justify-content-between align-items-center">
										<Address class="mb-0"><i class="fas fa-map-marker-alt me-2"></i>Ireland
										</Address>
										<a href="#" class="btn btn-sm btn-primary-soft mb-0">Read more</a>
									</div>
								</div>
							</div>
							<!-- Card item END -->

							<!-- Card item START -->
							<div class="card bg-transparent">
								<div class="position-relative">
									<!-- Image -->
									<img src="<?php echo bloginfo('template_directory');?>/src/assets/images/blog/virtual-learning-platforms.webp" class="card-img"
										alt="course image">
									<!-- Overlay -->
									<div class="card-img-overlay d-flex align-items-start flex-column p-3">
										<div class="w-100 mt-auto">
											<!-- Category -->
											<a href="#" class="badge text-dark bg-white fs-6 rounded-1"><i
													class="far fa-calendar-alt text-orange me-2"></i>2 July 2022</a>
										</div>
									</div>
								</div>

								<!-- Card body -->
								<div class="card-body px-2">
									<!-- Title -->
									<h5 class="card-title"><a href="#">Tech Excellence Awards 2016</a></h5>
									<!-- Address and button -->
									<div class="d-flex justify-content-between align-items-center">
										<Address class="mb-0"><i class="fas fa-map-marker-alt me-2"></i>California
										</Address>
										<a href="#" class="btn btn-sm btn-primary-soft mb-0">Read more</a>
									</div>
								</div>
							</div>
							<!-- Card item END -->

							<!-- Card item START -->
							<div class="card bg-transparent">
								<div class="position-relative">
									<!-- Image -->
									<img src="<?php echo bloginfo('template_directory');?>/src/assets/images/blog/asbestos-look-like.jpg" class="card-img"
										alt="course image">
									<!-- Overlay -->
									<div class="card-img-overlay d-flex align-items-start flex-column p-3">
										<div class="w-100 mt-auto">
											<!-- Category -->
											<a href="#" class="badge text-dark bg-white fs-6 rounded-1"><i
													class="far fa-calendar-alt text-orange me-2"></i>29 September
												2021</a>
										</div>
									</div>
								</div>

								<!-- Card body -->
								<div class="card-body px-2">
									<!-- Title -->
									<h5 class="card-title"><a href="#">What Does Asbestos Look Like?</a></h5>
									<!-- Address and button -->
									<div class="d-flex justify-content-between align-items-center">
										<Address class="mb-0"><i class="fas fa-map-marker-alt me-2"></i>London</Address>
										<a href="#" class="btn btn-sm btn-primary-soft mb-0">Read more</a>
									</div>
								</div>
							</div>
							<!-- Card item END -->

						</div>
					</div>
					<!-- Slider END -->
				</div>
			</div>
		</section>
		<!-- =======================
Blog END -->

		<!-- =======================
Newsletter START -->
		<section class="mb-n9 position-relative z-index-9">
			<div class="container">
				<div class="row">
					<div class="col-11 col-md-10 mx-auto">
						<div class="bg-warning rounded-3 shadow p-3 p-sm-4 position-relative overflow-hidden">
							<!-- SVG decoration -->
							<figure class="position-absolute top-100 start-100 translate-middle mt-n6 ms-n5">
								<svg width="211px" height="211px">
									<path class="fill-white opacity-4"
										d="M210.030,105.011 C210.030,163.014 163.010,210.029 105.012,210.029 C47.013,210.029 -0.005,163.014 -0.005,105.011 C-0.005,47.015 47.013,-0.004 105.012,-0.004 C163.010,-0.004 210.030,47.015 210.030,105.011 Z">
									</path>
								</svg>
							</figure>
							<!-- SVG decoration -->
							<figure class="position-absolute top-100 start-0 translate-middle mt-n6 ms-5">
								<svg width="141px" height="141px">
									<path class="fill-white opacity-4"
										d="M140.520,70.258 C140.520,109.064 109.062,140.519 70.258,140.519 C31.454,140.519 -0.004,109.064 -0.004,70.258 C-0.004,31.455 31.454,-0.003 70.258,-0.003 C109.062,-0.003 140.520,31.455 140.520,70.258 Z">
									</path>
								</svg>
							</figure>
							<!-- SVG decoration -->
							<figure class="position-absolute top-0 start-50 mt-4 ms-n9">
								<svg width="41px" height="41px">
									<path class="fill-white opacity-4"
										d="M40.531,20.265 C40.531,31.458 31.457,40.531 20.265,40.531 C9.072,40.531 -0.001,31.458 -0.001,20.265 C-0.001,9.073 9.072,-0.001 20.265,-0.001 C31.457,-0.001 40.531,9.073 40.531,20.265 Z">
									</path>
								</svg>
							</figure>

							<!-- Icon logos START -->
							<div
								class="p-2 bg-white shadow rounded-3 rotate-74 position-absolute top-0 start-0 ms-3 mt-5 d-none d-sm-block">
								<img src="<?php echo bloginfo('template_directory');?>/src/assets/images/subscribe/icon-email-subscribe-1.svg" class="h-30px" alt="Icon">
							</div>
							<div
								class="p-1 bg-white shadow rounded-3 rotate-320 position-absolute top-0 end-0 mt-5 me-5 d-none d-sm-block">
								<img src="<?php echo bloginfo('template_directory');?>/src/assets/images/subscribe/icon-email-subscribe-3.svg" class="h-30px" alt="Icon">
							</div>
							<div
								class="p-2 bg-white shadow rounded-3 rotate-0 position-absolute bottom-0 start-50 ms-5 mb-2 d-none d-lg-block">
								<img src="<?php echo bloginfo('template_directory');?>/src/assets/images/subscribe/icon-email-subscribe-2.svg" class="h-20px" alt="Icon">
							</div>
							<!-- Icon logos END -->

							<div class="row">
								<div class="col-md-12 mx-auto text-center py-5 position-relative">
									<div class="row justify-content-center">
										<div class="col-xl-9 col-lg-10 col-md-11">
											<!-- Title -->
											<h3
												class="h1 d-md-inline-block position-relative mb-md-5 mb-sm-4 text-sm-start text-center">
												Don't Want to Miss Anything?

												<!-- Arrow shape -->
												<svg class="d-md-block d-none position-absolute top-0 ms-4 ps-1"
													style="left: 100%;" xmlns="http://www.w3.org/2000/svg" width="65"
													height="68" fill="#6366f1">
													<path
														d="M53.9527 51.0012c8.396-10.5668 2.0302-26.0134-11.7481-26.7511-.6899-.0646-1.4612.0015-2.1258.0431.1243 9.0462-4.1714 18.8896-11.5618 21.3814-6.6695 2.2133-10.3337-4.2224-7.5813-9.676 3.2966-6.4755 9.103-11.8504 16.1678-13.8189-.5654-5.6953-3.3436-10.7672-9.485-12.48517C17.2678 6.8204 6.49364 16.3681 4.98841 26.127c-.09276 1.0297-1.68569.9497-1.59293-.0801C3.98732 12.9139 19.7395 2.55212 31.9628 8.5787c4.7253 2.3813 7.2649 7.3963 7.9368 13.067 7.4237-.9311 14.5154 3.3683 18.3422 9.5422 4.3988 7.1623 2.3584 15.1401-2.6322 21.1108-.7826.9653-2.3331-.3572-1.6569-1.2975zM26.7754 32.1845c-1.9411 2.2411-4.076 5.0872-4.3542 8.1764-.3036 2.9829 3.7601 3.0525 5.4905 2.7645 2.1568-.3863 3.7221-2.3164 4.8863-4.0419 2.6228-3.6308 4.3657-9.0752 4.4844-14.2563-4.0808 1.279-7.6514 4.2327-10.507 7.3573zm24.6311 25.592c-.7061-2.9738-1.2243-6.1031-1.1591-9.143.0423-1.242 1.767-1.0805 1.8313.1372.1284 2.435.815 4.8532 1.4764 7.1651l4.1619-1.4098c1.0153-.4586 2.4373-1.5714 3.6544-1.1804.6087.1954.7347.7264.6475 1.3068-.2302 1.3976-2.4683 1.9147-3.5901 2.398-1.8429.7619-3.6293 1.2865-5.5477 1.7298-.6391.1476-1.3233-.3665-1.4746-1.0037z" />
												</svg>
											</h3>

											<!-- Title + checkboxes -->
											<div class="row gy-4 align-items-center mb-lg-5 mb-4 pb-0">
												<div class="col-md-3">
													<h3 class="h5 mb-0 text-sm-start text-center">Sign up for
														Newsletters</h3>
												</div>
												<div class="col-md-9">
													<div class="row row-cols-sm-3 row-cols-2 gy-2">
														<div class="col text-sm-start">
															<div class="form-check mb-0">
																<input type="checkbox" id="s-daily-newsletter"
																	class="form-check-input">
																<label for="s-daily-newsletter"
																	class="form-check-label text-dark-gray ">Daily
																	Newsletter</label>
															</div>
														</div>
														<div class="col text-sm-start">
															<div class="form-check mb-0">
																<input type="checkbox" id="s-advertising-updates"
																	class="form-check-input" checked>
																<label for="s-advertising-updates"
																	class="form-check-label text-dark-gray ">Advertising
																	Updates</label>
															</div>
														</div>
														<div class="col text-sm-start">
															<div class="form-check mb-0">
																<input type="checkbox" id="s-week-in-review"
																	class="form-check-input">
																<label for="s-week-in-review"
																	class="form-check-label text-dark-gray ">Week in
																	Review</label>
															</div>
														</div>
														<div class="col text-sm-start">
															<div class="form-check mb-0">
																<input type="checkbox" id="s-event-updates"
																	class="form-check-input">
																<label for="s-event-updates"
																	class="form-check-label text-dark-gray ">Event
																	Updates</label>
															</div>
														</div>
														<div class="col text-sm-start">
															<div class="form-check mb-0">
																<input type="checkbox" id="s-startups-weekly"
																	class="form-check-input">
																<label for="s-startups-weekly"
																	class="form-check-label text-dark-gray ">Startups
																	Weekly</label>
															</div>
														</div>
														<div class="col text-sm-start">
															<div class="form-check mb-0">
																<input id="s-podcasts" type="checkbox"
																	class="form-check-input">
																<label for="s-podcasts"
																	class="form-check-label text-dark-gray ">Podcasts</label>
															</div>
														</div>
													</div>
												</div>
											</div>
											<!-- Form -->
											<form class="row align-items-center justify-content-center mt-3">
												<div class="col-lg-8">
													<div class="bg-body shadow rounded-pill p-2">
														<div class="input-group">
															<input class="form-control border-0 me-1" type="email"
																placeholder="Enter your email">
															<button type="button"
																class="btn btn-blue mb-0 rounded-pill">Subscribe!</button>
														</div>
													</div>
												</div>
											</form>
											<div class="form-text fs-sm text-center text-dark-gray">
												* Yes, I agree to the <a href="#">terms</a> and <a href="#">privacy
													policy</a>.
											</div>
										</div>
									</div>

								</div>
							</div> <!-- Row END -->
						</div>
					</div>
				</div> <!-- Row END -->
			</div>
		</section>
		<!-- =======================
Newsletter END -->

	</main>
	<!-- **************** MAIN CONTENT END **************** -->
<?php get_footer();?>  