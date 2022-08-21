<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>

	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="author" content="SemiColonWeb" />

	<!-- Stylesheets
	============================================= -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,900&display=swap" rel="stylesheet" type="text/css" />
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200;0,300;0,500;0,600;0,800;1,700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="{{asset('css/bootstrap.css')}}" type="text/css" />
	<link rel="stylesheet" href="{{asset('css/style.css')}}" type="text/css" />

	<link rel="stylesheet" href="{{asset('css/dark.css')}}" type="text/css" />
	<link rel="stylesheet" href="{{asset('css/font-icons.css')}}" type="text/css" />
	<link rel="stylesheet" href="{{asset('css/animate.css')}}" type="text/css" />
	<link rel="stylesheet" href="{{asset('css/magnific-popup.css')}}" type="text/css" />

	<!-- Bootstrap Switch CSS -->
	<link rel="stylesheet" href="{{asset('css/components/bs-switches.css')}}" type="text/css" />

	<link rel="stylesheet" href="{{asset('css/custom.css')}}" type="text/css" />
	<meta name='viewport' content='initial-scale=1, viewport-fit=cover'>

	<!-- Seo Demo Specific Stylesheet -->
	{{-- <link rel="stylesheet" href="css/colors.php?color=FE9603" type="text/css" demos/seo/css/fonts.css /> <!-- Theme Color --> --}}
	<link rel="stylesheet" href="{{asset('css/theme/seo/css/fonts.css')}}" type="text/css" />
	<!-- <link rel="stylesheet" href="demos/seo/seo.css" type="text/css" /> -->
	<!-- / -->

	<!-- Document Title
	============================================= -->
	<title>Essayroo Clone</title>


	<style>

	</style>
</head>

<body class="stretched">

	<!-- Document Wrapper
	============================================= -->
	<div id="wrapper" class="clearfix">

	

		<!-- Slider
		
          
		============================================= -->
		
		<section id="slider" class="slider-element swiper_wrapper min-vh-60 min-vh-md-100" >
			<div class="slider-inner" style="background: #FFF  url('css/theme/seo/images/hero/hero-1.jpg') center center no-repeat; background-size: cover;">

				<div class="vertical-middle">
					
					<div class="container">
						<div class="row">
							<div class="col-md-7  py-5">
								<div class="slider-title" >
									<blockquote class="quote">
										<br>
										<h2 class="display-4" style="font-weight: 800; color: #fd9c3c;  text-transform: capitalize;">Get your<br>perfect essay <br> today</br></h2>
									</blockquote>
									
									
								</div>
							</div>
							<div class="col-md-5">
								<div class="form-widget mb-3">
									
									<div class="form-section px-4 py-3 bg-white rounded shadow-lg">
										<div class="heading-block border-bottom-0 center">
											<h4 class="ls0">Quote Builder</h4>
										</div>
										
										<div class="col-12 form-group">
											<div class="row">
												<div class="col-sm-4 col-form-label">
													<label>Type of service:</label>
												</div>
												<div class="col-sm-8">
													
													<select class = "form-select required valid"  id = "my_service" name="" id="">
														<option> select a service</option>
															@foreach ($services as $service)
															<option value="{{$service->id}}">{{$service->name}}</option>
															@endforeach
														
														

													</select>
												</div>
											</div>
											
										</div>
										<div class="col-12 form-group">
											<div class="row">
												<div class="col-sm-4 col-form-label">
													<label>Type of paper</label>
												</div>
												<div class="col-sm-8">
													<select class = "form-select required valid" name="" id="">
															
														<option value="1">Essay</option>
														<option value="2">Dissertation</option>
														<option value="3">Admission services</option>
														<option value="4">Editing</option>

													</select>
												</div>
											</div>
											
										</div>

										<div class="col-12 form-group">
											<div class="row">
												<div class="col-sm-4 col-form-label">
													<label>No of pages : </label>
												</div>
												<div class="col-sm-8 ">
											
													<input type="number" name="numberOfSources" class="form-select" min="0" id="">
												</div>

												
											</div>
											
										</div>
										<div class="col-12 form-group">
											<div class="row">
												<div class="col-sm-4 col-form-label">
													<label>Academic level: </label>
												</div>
												<div class="col-sm-8">
													
													<select class = "form-select required valid" name="" id="">
															
														<option value="1">High school</option>
														<option value="2">Dissertation</option>
														<option value="3">Admission services</option>
														<option value="4">Editing</option>

													</select>
												</div>

												
											</div>
											
										</div>
										<div class="col-12 form-group">
											<div class="row">
												<div class="col-sm-4 col-form-label">
													<label>Urgency: </label>
												</div>
												<div class="col-sm-8">
													
													<select class = "form-select required valid" name="" id="">
															
														<option value="1">14 days</option>
														<option value="2">7 days</option>
														<option value="3">6 hrs</option>
														<option value="4">4 hrs</option>

													</select>
												</div>
												{{-- <small >price per page: $12.99</small> --}}
												
											</div>
											
										</div>

										
										<div class="col-12">
											<div class="row">
												<div class="col-sm-7">
													<div class="heading-block border-bottom-0 center">
														<h4 class="ls0">Total price</h4>
													</div>
												</div>
												<div class="col-sm-5 ">
													<h4 id = "price_id" class="ls0 center"></h4>
													
												</div>
												
											</div>
										</div>


										<div class="col-12">
											<a href="" class="button button-small button-3d button-large button-circle w-100 text-center">ORDER</a>
										</div>
			
												
											
									</div>
								</div>	
							</div>
							
						</div>
					</div>

				</div>

				

			</div>
		</section>

		
		
		<!-- #slider end -->

		<!-- Content
		============================================= -->
		<section id="content">

			<div class="content-wrap pt-0">

				

				<!-- Why choose us
				============================================= -->
				<div class="section bg-transparent pb-0 mb-2">
					<div class="container">
						<div class="heading-block border-bottom-0 center mx-auto mb-0" style="max-width: 550px">

							<h3 class="ls0">Why Choose Us</h3>
							
						</div>
						<div class="row">
							<div class="col-md-4 mt-5">
								<div class="feature-box fbox-center border-0">
									<div class="fbox-icon">
										<img src="{{asset('css/theme/seo/images/icons/research.svg')}}" alt="Feature Icon" class="bg-transparent rounded-0">
									</div>
									<div class="fbox-content">
										<h3 class="nott ls0"> Only high quality papers</h3>
										<p class="paragraph">We hire the most qualified and experienced writers that pass multiple verification processes.
										</p>
									</div>
								</div>
							</div>
	
							<div class="col-md-4 mt-5">
								<div class="feature-box fbox-center border-0">
									<div class="fbox-icon">
										<img src="{{asset('css/theme/seo/images/icons/discount.svg')}}" alt="Feature Icon" class="bg-transparent rounded-0">
									</div>
									<div class="fbox-content">
										<h3 class="nott ls0">Reasonable price of each order</h3>
										<p class="paragraph">Price depends on difficulty, number of pages and urgency. Our discounts may help you save.
										</p>
									</div>
								</div>
							</div>
	
							<div class="col-md-4 mt-5">
								<div class="feature-box fbox-center border-0">
									<div class="fbox-icon">
										<img src="{{asset('css/theme/seo/images/icons/analysis.svg')}}" alt="Feature Icon" class="bg-transparent rounded-0">
									</div>
									<div class="fbox-content">
										<h3 class="nott ls0">Privacy and security gurantee</h3>
										<p class="paragraph">
											All connection data is encrypted and secured. We protect customers using the latest standards.
										</p>
									</div>
								</div>
							</div>
						</div>
						
					</div>
				</div>


				<!-- Who we are
				============================================= -->
				<div class="section pb-2 mb-2" style="background: url('demos/seo/images/sections/4.png') no-repeat center top; background-size: cover; padding: 140px 0 0;">
					<div class="container">
						<div class="heading-block border-bottom-0 center mx-auto mb-0" style="max-width: 550px">

							<h1 class="ls0">WELCOME TO ESSAYROO!
								A RELIABLE ESSAY WRITING SERVICE
							</h1>
							
						</div>
						<div class="row">
							<div class="col-md-6 mt-5">
								<p class = "paragraph">
									
									If you have been looking for an academic writing service that can handle all of your assignment and project needs, you are, quite simply, at the right place. 
									Essay Roo is a professional online agency that serves students in high school, college, and graduate programs.

								</p>

								<p class = "paragraph">

									If you have been disappointed by other essay writing services in the past, 
									we are here to change all of that for you. Our company creates only original, custom writing products, 
									produced by professional researchers and writers who have the appropriate degrees and background for each order we assign to them. Every customer will get a personal writer who knows exactly how to craft the perfect piece of writing. Sit back, relax, and read on – you will understand exactly why we are the most popular and trusted writing service.

								</p>

								<h4 class="ls0">
									Variety of Essay Writing Services

								</h4>
								<p class = "paragraph">

									Whatever your academic level, 
									if you have a need for any of the following products or services, we are ready to go to work for you. 
									The following are the most common orders we receive:

								</p>

								


							</div>
							<div class="col-md-6 mt-5">
								<h4 class="ls0">
									Writes of our essay writing service

								</h4>

								<p class = "paragraph">
									
									Because our focus is on academic writing services,
									we use only native expert researchers and writers. In this way, 
									we know that they style, language, and structure of all writing products will meet the academic 
									standards of educational institutions.

								</p>

								<p class="paragraph">
									Only when they have passed through these steps will we add them to our trusted writing staff.
									There is then a 90-day probationary period, during which we assign more basic orders that we carefully review and evaluate. If that goes well, they are then placed on permanent writer status and given orders based on their degrees and degree levels.

								</p>

								<h4 class="ls0">
									Assigning writers to orders
								</h4>

								<p class="paragraph">
									We employ writers with all levels of degrees – Bachelor’s through Ph.D.’s. Unlike other essay services, we insist that the writer degree match each customer’s order.

									High school students who request writing products or services will get a writer with a Bachelor’s degree in the content field of the order. Thus, if a student orders a world history research paper, the assigned writer will have a Bachelor’s degree in history.

									

								</p>

							</div>
							
						</div>
						
					</div>
				</div>
				<!-- Customer feedback
				============================================= -->
				

				<div class="section mt-0" style="background: url('demos/seo/images/sections/3.jpg') no-repeat top center; background-size: cover; padding: 80px 0 70px;">
					<div class="container">
						<div class="heading-block border-bottom-0 center">
							
							<h3 class="ls0">What Clients Says</h3>
						</div>

						<div id="oc-testi" class="owl-carousel testimonials-carousel carousel-widget clearfix mb-3" data-margin="0" data-pagi="true" data-loop="true" data-center="true" data-autoplay="5000" data-items-sm="1" data-items-md="2" data-items-xl="3">
							
							<div class="oc-item">
								<div class="testimonial col-xs-12">
									<div class="testi-image">
										<a href="#"><img src="{{asset('css/theme/pet/images/testimonials/1.jpg')}}" alt="Customer Testimonails"></a>
									</div>
									<div class="testi-content">
										<p>Incidunt deleniti blanditiis quas aperiam recusandae consequatur ullam quibusdam cum libero illo rerum repellendus!</p>
										<div class="testi-meta">
											John Doe
											<span>XYZ Inc.</span>
										</div>
									</div>
								</div>
							</div>

							<div class=" oc-item">
								<div class="testimonial">
									<div class="testi-image">
										<a href="#"><img src="{{asset('css/theme/pet/images/testimonials/2.jpg')}}" alt="Customer Testimonails"></a>
									</div>
									<div class="testi-content">
										<p>Natus voluptatum enim quod necessitatibus quis expedita harum provident eos obcaecati id culpa corporis molestias.</p>
										<div class="testi-meta">
											Collis Ta'eed
											<span>Envato Inc.</span>
										</div>
									</div>
								</div>
							</div>
							<div class=" oc-item">
								<div class="testimonial">
									<div class="testi-image">
										<a href="#"><img src="{{asset('css/theme/pet/images/testimonials/3.jpg')}}" alt="Customer Testimonails"></a>
									</div>
									<div class="testi-content">
										<p>Natus voluptatum enim quod necessitatibus quis expedita harum provident eos obcaecati id culpa corporis molestias.</p>
										<div class="testi-meta">
											Collis Ta'eed
											<span>Envato Inc.</span>
										</div>
									</div>
								</div>
							</div>
							<div class=" oc-item">
								<div class="testimonial">
									<div class="testi-image">
										<a href="#"><img src="{{asset('css/theme/pet/images/testimonials/1.jpg')}}" alt="Customer Testimonails"></a>
									</div>
									<div class="testi-content">
										<p>Natus voluptatum enim quod necessitatibus quis expedita harum provident eos obcaecati id culpa corporis molestias.</p>
										<div class="testi-meta">
											Mary Jane
											<span>Google Inc.</span>
										</div>
									</div>
								</div>
							</div>
							{{-- <div class="oc-item">
								<div class="testimonial">
									<div class="testi-image">
										<a href="#"><img src="images/testimonials/5.jpg" alt="Customer Testimonails"></a>
									</div>
									<div class="testi-content">
										<p>Natus voluptatum enim quod necessitatibus quis expedita harum provident eos obcaecati id culpa corporis molestias.</p>
										<div class="testi-meta">
											Steve Jobs
										<span>Apple Inc.</span>
										</div>
									</div>
								</div>
							</div> --}}
						</div>

						
					</div>
				</div>


				

				<!-- Features
				============================================= -->
				<div class="section bg-white pb-0 mb-2">
					<div class="container">
						<div class="heading-block border-bottom-0 center mx-auto mb-0" style="max-width: 550px">

							<h3 class="ls0">Free Features</h3>
							
						</div>
						<div class="row">
							<div class="col-md-3 mt-5">
								<div class="feature-box fbox-center border-0">
									<div class="fbox-icon">
										<img src="{{asset('css/theme/seo/images/icons/research.svg')}}" alt="Feature Icon" class="bg-transparent rounded-0">
									</div>
									<div class="fbox-content">
										<h3 class="nott ls0"> Only high quality papers</h3>
										<p>We hire the most qualified and experienced writers that pass multiple verification processes.
											</p>
									</div>
								</div>
							</div>
	
							<div class="col-md-3 mt-5">
								<div class="feature-box fbox-center border-0">
									<div class="fbox-icon">
										<img src="{{asset('css/theme/seo/images/icons/discount.svg')}}" alt="Feature Icon" class="bg-transparent rounded-0">
									</div>
									<div class="fbox-content">
										<h3 class="nott ls0">Reasonable price of each order</h3>
										<p>Price depends on difficulty, number of pages and urgency. Our discounts may help you save.
											</p>
									</div>
								</div>
							</div>
	
							<div class="col-md-3 mt-5">
								<div class="feature-box fbox-center border-0">
									<div class="fbox-icon">
										<img src="{{asset('css/theme/seo/images/icons/analysis.svg')}}" alt="Feature Icon" class="bg-transparent rounded-0">
									</div>
									<div class="fbox-content">
										<h3 class="nott ls0">Privacy and security gurantee</h3>
										<p>
											All connection data is encrypted and secured. We protect customers using the latest standards.
										</p>
									</div>
								</div>
							</div>

							<div class="col-md-3 mt-5">
								<div class="feature-box fbox-center border-0">
									<div class="fbox-icon">
										<img src="{{asset('css/theme/seo/images/icons/analysis.svg')}}" alt="Feature Icon" class="bg-transparent rounded-0">
									</div>
									<div class="fbox-content">
										<h3 class="nott ls0">Privacy and security gurantee</h3>
										<p>
											All connection data is encrypted and secured. We protect customers using the latest standards.
										</p>
									</div>
								</div>
							</div>

							
						</div>
						
					</div>
				</div>
				
			</div>
		</section><!-- #content end -->

		<!-- Footer
		============================================= -->
		<footer id="footer" class="border-0 bg-white">
			<div class="container">
				<!-- Footer Widgets
				============================================= -->
				<div class="footer-widgets-wrap pb-5 clearfix">

					<div class="row col-mb-50">
						<div class="col-md-8">

							<div class="widget clearfix">

								<img src="images/footer-widget-logo.png" alt="Footer Logo" class="alignleft" style="margin-top: 8px; padding-right: 18px; border-right: 1px solid #DDD;">

								<p>We believe in <strong>Simple</strong>, <strong>Creative</strong> &amp; <strong>Flexible</strong> Design Standards with a Retina &amp; Responsive Approach. Browse the amazing Features this template offers.</p>

								<div class="line line-sm"></div>

								<div class="row">
									<div class="col-lg-3 col-6 bottommargin-sm widget_links">
										<ul>
											<li><a href="#">Home</a></li>
											<li><a href="#">About</a></li>
											<li><a href="#">FAQs</a></li>
											<li><a href="#">Support</a></li>
											<li><a href="#">Contact</a></li>
										</ul>
									</div>

									<div class="col-lg-3 col-6 bottommargin-sm widget_links">
										<ul>
											<li><a href="#">Shop</a></li>
											<li><a href="#">Portfolio</a></li>
											<li><a href="#">Blog</a></li>
											<li><a href="#">Events</a></li>
											<li><a href="#">Forums</a></li>
										</ul>
									</div>

									<div class="col-lg-3 col-6 bottommargin-sm widget_links">
										<ul>
											<li><a href="#">Corporate</a></li>
											<li><a href="#">Agency</a></li>
											<li><a href="#">eCommerce</a></li>
											<li><a href="#">Personal</a></li>
											<li><a href="#">One Page</a></li>
										</ul>
									</div>

									<div class="col-lg-3 col-6 bottommargin-sm widget_links">
										<ul>
											<li><a href="#">Restaurant</a></li>
											<li><a href="#">Wedding</a></li>
											<li><a href="#">App Showcase</a></li>
											<li><a href="#">Magazine</a></li>
											<li><a href="#">Landing Page</a></li>
										</ul>
									</div>
								</div>

							</div>

						</div>

						<div class="col-md-4">
							<div class="widget clearfix">

								<div class="row clearfix">
									<div class="col-12">
										<div class="feature-box fbox-plain fbox-sm align-items-center">
											<div class="fbox-icon">
												<i class="icon-envelope text-dark"></i>
											</div>
											<div class="fbox-content">
												<span class="text-muted">Call Us:</span><br>
												<h3 class="nott ls0 fw-semibold">(10) 22 33445566</h3>
											</div>
										</div>
									</div>

									<div class="col-12 mt-4">
										<div class="feature-box fbox-plain fbox-sm align-items-center">
											<div class="fbox-icon">
												<i class="icon-phone3 text-dark"></i>
											</div>
											<div class="fbox-content">
												<span class="text-muted">Email Us:</span><br>
												<h3 class="nott ls0 fw-semibold">info@canvas.com</h3>
											</div>
										</div>
									</div>
								</div>

							</div>

							<div class="widget subscribe-widget clearfix">
								<h5><strong>Subscribe</strong> to Our Newsletter to get Important News, Amazing Offers &amp; Inside Scoops:</h5>
								<div class="widget-subscribe-form-result"></div>
								<form id="widget-subscribe-form" action="include/subscribe.php" method="post" class="mb-0">
									<div class="input-group mx-auto">
										<div class="input-group-text bg-transparent"><i class="icon-email2"></i></div>
										<input type="email" id="widget-subscribe-form-email" name="widget-subscribe-form-email" class="form-control required email" placeholder="Enter your Email">
										<button class="btn btn-success button button-color nott ls0 m-0" type="submit">Subscribe</button>
									</div>
								</form>
							</div>

							<div class="widget">

								<div class="row col-mb-30">
									<div class="col-lg-6 col-md-12 col-6">
										<a href="https://facebook.com/semicolonweb" target="_blank" class="social-icon si-dark si-colored si-facebook mb-0" style="margin-right: 10px;">
											<i class="icon-facebook"></i>
											<i class="icon-facebook"></i>
										</a>
										<a href="https://facebook.com/semicolonweb" target="_blank" class="text-dark"><small style="display: block; margin-top: 3px;"><strong>Like us</strong><br>on Facebook</small></a>
									</div>
									<div class="col-lg-6 col-md-12 col-6">
										<a href="https://themeforest.net/user/SemiColonWeb/follow" target="_blank" class="social-icon si-dark si-colored si-rss mb-0" style="margin-right: 10px;">
											<i class="icon-rss"></i>
											<i class="icon-rss"></i>
										</a>
										<a href="https://themeforest.net/user/SemiColonWeb/follow" target="_blank" class="text-dark"><small style="display: block; margin-top: 3px;"><strong>Subscribe</strong><br>to RSS Feeds</small></a>
									</div>
								</div>

							</div>
						</div>
					</div>

				</div><!-- .footer-widgets-wrap end -->
			</div>

			<!-- Copyrights
			============================================= -->
			<div id="copyrights" style="background: url('demos/seo/images/hero/footer.svg') no-repeat top center; background-size: cover; padding-top: 70px;">
				<div class="container clearfix">

					<div class="row justify-content-between col-mb-30">
						<div class="col-12 col-lg-auto text-center text-lg-start">
							Copyrights &copy; 2020 All Rights Reserved by Canvas Inc.<br>
							<div class="copyright-links"><a href="#">Terms of Use</a> / <a href="#">Privacy Policy</a></div>
						</div>

						<div class="col-12 col-lg-auto text-center text-lg-end">
							<div class="copyrights-menu copyright-links clearfix">
								<a href="#">Home</a>/<a href="#">About Us</a>/<a href="#">Team</a>/<a href="#">Clients</a>/<a href="#">FAQs</a>/<a href="#">Contact</a>
							</div>
						</div>
					</div>

				</div>
			</div><!-- #copyrights end -->
		</footer>
		
		<!-- #footer end -->

	</div><!-- #wrapper end -->

	<!-- Go To Top
	============================================= -->
	<div id="gotoTop" class="icon-angle-up"></div>

	<!-- JavaScripts
	============================================= -->
	<script src="{{asset('js/jquery.js')}}"></script>
	<script src="{{asset('js/plugins.min.js')}}"></script>
	{{-- <script src="{{asset('js/quoteBuilder.js')}}"></script> --}}
	<!-- Footer Scripts
	============================================= -->
	<script src="{{asset('js/functions.js')}}"></script>

	<!-- Footer Scripts
	============================================= -->
	{{-- <script type="text/javascript">
		$(document).ready(function(){

			$('#my_service').on('change' , function (){
				var service_id = $(this).val();

				if(service_id){
					$.ajax({

						url: '/updatePriceBasedOnService' + service_id,
						type : "POST",
						data : {
							service_id = service_id,
							
						}

						dataType : 'json',

						success: function (result).html
					})
				}

				
			});

		});
	
	</script> --}}

</body>
</html>