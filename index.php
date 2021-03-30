<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" href="images/fav.ico" type="image">
	<title>Euler</title>
	<script src="js/modernizr.min.js" type="text/javascript"></script>
	<link rel="stylesheet" href="css/normalize.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link href="css/aos.css" rel="stylesheet">
	<link rel="stylesheet" href="css/slick.min.css">
	<link href="css/slick-theme.min.css" rel="stylesheet">
	<link rel="stylesheet" href="css/animate.min.css">
	<link rel="stylesheet" href="css/burger-menu.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/custom.css">
	<script src="js/prefixfree.min.js"></script>
	
</head>

<body>
	<!-- Header -->
	<header class="header">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-lg-3">
					<a href="https://www.eulermotors.com/"><img src="images/logo.png" class="logo" alt="Euler Logo"></a>
				</div>
				<div class="col-lg-9">
					<div class="mob_menu">
						<div class="lan mr-4">
							<div class="lan-btn">En <span class="caret"></span></div>
							<ul class="lan-selector">
								<li><a href="#" class="small">Hi</a></li>
								<li><a href="#" class="small">Ar</a></li>
								<li><a href="#" class="small">Fr</a></li>
							</ul>
						</div>
						<div class="offcanvas d-flex justify-content-end d-lg-none">
							<button type="button" class="offcanvas-menu-btn menu-status-open"> <span class="btn-icon-wrap">
                                <span></span>
								<span></span>
								<span></span>
								</span>
							</button>
						</div>
					</div>
					<nav class="header_menu">
						<ul class="menu-items">
							<li> <a href="about.html">About</a></li>
							<li> <a href="lease.html">Euler Lease</a></li>
							<li class=""> <a href="#">HiLoad</a></li>
							<li> <a href="#">Charging Network</a></li>
							<li> <a href="#">Technology</a></li>
							<li class="btns">	
								<a class="btn btn-primary"><span>Test Ride</span></a> 	
								<a class="btn btn-white"><span>Book Now</span></a>
							</li>
							<li>
								<div class="lan">
									<div class="lan-btn">En <span class="caret"></span></div>
									<ul class="lan-selector">
										<li><a href="#" class="small">Hi</a></li>
										<li><a href="#" class="small">Ar</a></li>
										<li><a href="#" class="small">Fr</a></li>
									</ul>
								</div>
							</li>
						</ul>
					</nav>
				</div>
			</div>
		</div>
	</header>
	<!-- Hero Banner -->
	<section class="home-hero">
		<div class="prd-thumb">
			<img data-aos="fade-left" src="images/spotligt-prd-thumb.png">
		</div>
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="home-hero-text">
						<h2 class="home-hero-heading text-white"><span class="d-inline-flex align-items-center" data-aos="fade-left"><img src="images/logo-sign.png" class="logo-sign" alt="Euler Logo Sign"> Moving today,</span> <span class="d-inline-block" data-aos="fade-right"><img src="images/spotlight-line-right.png"></span><br/><span class="d-inline-block" data-aos="fade-left"><img src="images/spotlight-line-left.png"></span> <span class="d-inline-block" data-aos="fade-right">for tomorrow</span></h2>
					</div>
				</div>
			</div>
		</div>
		<div class="kilometers wow zoomIn">
			<h2>
				<span id="count"></span>+ kms
			</h2>
			<h4 class="text-primary">Covered Sucessfully</h4>
		</div>
	</section>
	<!-- Coming Soon -->
	<section class="coming-soon pb-5 pb-sm-0 dot-bg bg-dark">
		<ul class="list-none ani-sec">
			<li class="wow fadeInLeft"><img src="images/dot-black-bg-l.png"></li>
			<li class="wow fadeInRight"><img src="images/dot-black-bg-r.png"></li>
		</ul>
		<div class="container">
			<div class="row align-items-center">
				<div class="col-sm-7 text-center">
					<img src="images/coming-soon-img.jpg" data-aos="zoom-in">
				</div>
				<div class="col-sm-5 wow fadeInRight">
					<div class="coming-soon-right">
						<p class="text-big mb-1 text-white">Coming Soon</p>
						<h3 class="heading mb-3 mb-md-4 text-white">Euler HiLoad</h3>
						<a href="#" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal"><span>Get Updates</span></a>
					</div>
				</div>
			</div>
		</div>
		<!-- Popup -->
		<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
			<div class="modal-dialog" role="document">
			<div class="modal-content">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
				<form action="" class="form-popup">
					<div class="form-row">
						<div class="col-sm-3 mb-3">
							<select class="custom-select" id="" required="">
								<option value="1">Mr</option>
								<option value="2">Ms</option>
								<option value="3">Mrs</option>
							</select>
						</div>
						<div class="col-12 col-sm mb-3">
							<input type="text" class="form-control" placeholder="First Name" required="">
						</div>
						<div class="col-12 col-sm mb-3">
							<input type="text" class="form-control" placeholder="Last Name" required="">
						</div>
					</div>
					<div class="form-row">
						<div class="col-12 mb-3">
							<input type="email" class="form-control" placeholder="Email" required="">
						</div>
						<div class="col-12 mb-3">
							<input type="tel" class="form-control" placeholder="Mobile No." required="">
						</div>
						<div class="col-12 mb-3">
							<input type="text" class="form-control" placeholder="Designation" required="">
						</div>
						<div class="col-12 mb-3">
							<input type="text" class="form-control" placeholder="Industry" required="">
						</div>
						<div class="col-12 mb-3">
							<input type="text" class="form-control" placeholder="Organization" required="">
						</div>
						
						<div class="col-12">
							<button class="btn btn-primary"><span>Submit</span></button>
						</div>
					</div>
				</form>
			</div>
			</div>
		</div>
	</section>
	<!-- Electrifying India. One EV at a time -->
	<section class="section-three">
		<div class="container position-relative">
			<div class="row">
				<div class="col-md-7 sec-space">
					<div class="who-we-are">
						<h3 class="heading mb-3 mb-md-4" data-aos="fade-right">Electrifying India. One EV at a time.</h3>
						<div class="desc" data-aos="fade-right">
							<p>We are an automotive technology startup devoted to spark the EV revolution in India. Through our smart mobility solutions we are enabling India’s transition to sustainable mobility.</p>
							<p>With our sustainable logistics  for E-Commerce & 3PL businesses, we have already started to lay the groundwork for the future.</p>
						</div>
						<a href="#" class="btn btn-dark" data-aos="fade-right"><span>Find out more</span></a>
					</div>
				</div>
			</div>
			<div class="ev" data-aos="fade-right">
				<img src="images/vehicle.png">
			</div>
		</div>
	</section>
	<!-- Widespread Charging Network -->
	<section class="section-four sec-space dot-bg bg-dark">
		<ul class="list-none ani-sec">
			<li class="wow fadeInLeft"><img src="images/dot-black-bg-l.png"></li>
			<li class="wow fadeInRight"><img src="images/dot-black-bg-r.png"></li>
		</ul>
		<div class="container">
			<div class="row align-items-center flex-column-reverse flex-md-row">
				<div class="col-md-6">
					<div id="map_canvas"></div>					
				</div>
				<div class="col-md-6 mb-3 mb-md-0">
					<div class="map-details">
						<h3 class="heading text-white mb-3 mb-md-4">Widespread Charging Network</h3>
						<p class="desc text-white">Our extensive charging network ensures that you are never too far away from a charging station. <span id="link1">OKHLA</span>, <span id="link2">GURGAON</span>, <span id="link3">PUNJABI BAGH</span>, <span id="link4">DWARKA</span>, <span id="link5">GHAZIPUR</span>, <span id="link6">MANDOLI</span>, <span id="link7">MOHAN NAGAR (GHAZIABAD)</span>, <span id="link8">NOIDA SECTOR-63</span> 
						</p>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--  -->
	<div class="main-wrap">
		<div class="section-five">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<h2 class="heading text-center wow zoomIn">Charge ahead with our EVs</h2>
					</div>
					<div class="why-ev-holder wow zoomIn">
						<div class="slick-slider sync">
							<div class="slide-item">
								<div class="details">
									<div class="icon">
										<img src="images/why-ev-slider-icon.png">
									</div>
									<div class="heading">Saves more per trip</div>
									<div class="desc">
										<p>3-wheeler EVs are more cost efficient than their 4-wheeler commercial ICE counterparts, giving you more value for your money with every delivery.</p>
									</div>
								</div>
								<div class="thumb">
									<img src="images/why-ev-slider-thumb.jpg">
								</div>
							</div>
							<div class="slide-item">
								<div class="thumb">
									<img src="images/why-ev-slider-thumb2.jpg">
								</div>
								<div class="details">
									<div class="icon">
										<img src="images/why-ev-slider-icon2.png">
									</div>
									<div class="heading">Keeps you in the loop</div>
									<div class="desc">
										<p>Our Evs help you monitor vehicle performance, enhance logistical efficiency and maximise profits, putting your business growth in the fast lane. </p>
									</div>
								</div>
							</div>
							<div class="slide-item">
								<div class="details">
									<div class="icon">
										<img src="images/why-ev-slider-icon3.png">
									</div>
									<div class="heading">Reaches everywhere </div>
									<div class="desc">
										<p>The compact dimensions of our EVs help them reach the most crowded bylanes of India, ensuring no delivery is out of your reach.</p>
									</div>
								</div>
								<div class="thumb">
									<img src="images/why-ev-slider-thumb3.jpg">
								</div>
							</div>
						</div>
						<div class="slick-nav sync">
							<div>
								<h3>Efficiency</h3>
							</div>
							<div>
								<h3>Connectivity</h3>
							</div>
							<div>
								<h3>Accessibility</h3>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="section-six overflow-hidden">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<h2 class="heading text-center text-white wow zoomIn">Our Real Assets - Clients Who Trusted Us</h2>
					</div>
					<div class="clients wow fadeInUp">
						<ul>
							<li>
								<img src="images/big-basket-logo.jpg">
							</li>
							<li>
								<img src="images/udaan-logo.jpg">
							</li>
							<li>
								<img src="images/ecom-express.jpg">
							</li>
							<li>
								<img src="images/licious-logo.jpg">
							</li>
							<li>
								<img src="images/supermart-logo.jpg">
							</li>
							<li>
								<img src="images/grofers-logo.jpg">
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<div class="section-seven sec-space">
			<div class="container">
				<div class="row">
					<div class="col-12 mb-3 mb-md-5">
						<h2 class="heading text-center wow zoomIn">We Are Making Headlines!</h2>
					</div>
					<div class="col-12">
						<div class="content wow zoomIn">
							<ul>
								<li>
									<div class="thumb">
										<img src="images/news-thumb1.jpg">
									</div>
									<div class="desc">
										<div class="title">yourstory.com</div>
										<div class="cont">How a visit to China helped this entrepreneur shape his EV startup making LCV vehicles for last-mile logistics</div>
										<div class="cta"><a href="//yourstory.com/2019/10/ev-startup-euler-motors-china-entrepreneur" target="blank" class="btn btn-primary"><span>Read More</span></a>
										</div>
									</div>
								</li>
								<li>
									<div class="thumb">
										<img src="images/news-thumb2.jpg">
									</div>
									<div class="desc">
										<div class="title">ETauto.com</div>
										<div class="cont">At 30, this school teacher’s son from Bihar, quits Rs 1 crore job at Yahoo to build a software firm</div>
										<div class="cta"><a href="//auto.economictimes.indiatimes.com/news/commercial-vehicle/lcv/at-30-this-school-teachers-son-from-bihar-quit-rs-1-crore-job-at-yahoo-to-build-a-software-firm-now-dreams-big-in-ev-space/71293524" target="blank" class="btn btn-primary"><span>Read More</span></a>
										</div>
									</div>
								</li>
								<li>
									<div class="thumb">
										<img src="images/news-thumb3.jpg">
									</div>
									<div class="desc">
										<div class="title">businessworld.in</div>
										<div class="cont">"Government Policies on Electric Vehicles in India Have been Phenomenal" - Saurav Kumar, Euler Motors</div>
										<div class="cta"><a href="http://www.businessworld.in/video/-Government-Policies-on-Electric-Vehicles-in-India-Have-been-Phenomenal-Saurav-Kumar-Euler-Motors/10-10-2020-2911/" target="blank" class="btn btn-primary"><span>Read More</span></a>
										</div>
									</div>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="section-eight">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<h2 class="heading text-center text-white wow zoomIn">Our Accolades</h2>
					</div>
					<div class="col-12">
						<div class="awards-slider">
							<div class="slider stick-dots">
								<div class="slide">
									<div class="slide__img">
										<img src="" alt="" data-lazy="images/awards-nasscom-thumb.jpg" class="full-image" />
									</div>
									<div class="slide__content slide__content__right animated" data-animation-in="fadeInLeft" data-delay-in="0.2">
										<div class="slide__content--headings">
											<h3>Nasscom</h3>
											<div class="desc">#Emerge50 winners in Logistics Category for emerging as one of the top software product companies in India by NASSCOM.</div>
										</div>
									</div>
								</div>
								<div class="slide">
									<div class="slide__img">
										<img src="" alt="" data-lazy="images/awards-business-world.jpg" class="full-image" />
									</div>
									<div class="slide__content slide__content__right animated" data-animation-in="fadeInLeft" data-delay-in="0.2">
										<div class="slide__content--headings">
											<h3>Business World</h3>
											<div class="desc">Founder &amp; CEO Saurav Kumar awarded 'India's Most Enterprising Young Mind Award' at the BW Businessworld Young Entrepreneur Summit &amp; Awards 2020</div>
										</div>
									</div>
								</div>
								<div class="slide">
									<div class="awards-slider-cont">
										<div class="thumb">
											<img src="" alt="" data-lazy="images/Awards-India-500-startup.jpg" class="full-image" />
										</div>
										<div class="cont animated" data-animation-in="fadeInRight" data-delay-in="0.2">
											<h3>India 500 Startup Awards 2020</h3>
											<div class="desc">Winner of India 500 Startup Awards 2020 for quality excellence.</div>
										</div>
									</div>
								</div>
								<div class="slide">
									<div class="awards-slider-cont">
										<div class="thumb">
											<img src="" alt="" data-lazy="images/awards-entrepreneur-india.jpg" class="full-image" />
										</div>
										<div class="cont animated" data-animation-in="fadeInRight" data-delay-in="0.2">
											<h3>India 500 Startup Awards 2020</h3>
											<div class="desc">Euler Motors awarded Best Social Impact Start-up of the year 2020 by Entrepreneur India</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Footer Section -->
	<footer class="footer bg-light">
		<div class="container">
			<div class="row pb-sm-3">
				<div class="col-sm-6 col-md-3 mb-3 mb-sm-0">
					<img src="images/footer-logo.png" alt="Euler Footer Logo">
					<h5 class="footer-title mt-3 mt-md-4 mt-lg-5">Follow Us:</h5>
					<ul class="social-icons list-none">
						<li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
						<li><a href="#"><i class="fab fa-twitter"></i></a></li>
						<li><a href="#"><i class="fab fa-instagram"></i></a></li>
						<li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
					</ul>
				</div>
				<div class="col-sm-6 col-md-3 mb-3 mb-sm-0">
					<nav>
						<ul class="list-none">
							<li><a href="about.html">About</a></li>
							<li><a href="lease.html">Euler Lease</a></li>
							<li><a href="#">HiLoad</a></li>
							<li><a href="#">Charging Network</a></li>
							<li><a href="#">Technology</a></li>
							<li class="careers-nav"><a href="careers.html">Careers</a> <span>We’re hiring!</span></li>
						</ul>
					</nav>
				</div>
				<div class="col-sm-6 col-md-3 mb-3 mb-sm-0">
					<nav>
						<ul class="list-none">
							<li><a href="contact.html">Contact Us</a></li>
							<li><a href="#">Support</a></li>
							<li><a href="#">Blog</a></li>
							<li><a href="#">FAQ</a></li>
							<li><a href="#">Press</a></li>
							<li><a href="#">Videos</a></li>
						</ul>
					</nav>
				</div>
				<div class="col-sm-6 col-md-3">
					<h5 class="footer-title">Address:</h5>
					<p>B-99, Panchsheel Vihar, New Delhi. 110017</p>
					<h5 class="footer-title mt-3 mt-md-4 mt-lg-5">Contact:</h5>
					<p><a href="tel:011-45018656">011-45018656</a></p>
				</div>
			</div>
			<div class="row">
				<div class="col-md-10 col-lg-8 mx-auto text-center">
					<p>© Eulermotors 2021. All Rights Reserved. Powered by <a href="https://www.webeesocial.com/">WeBeeSocial</a></p>
				</div>
			</div>
		</div>
	</footer>
	<!-- Libraries -->
	<script src="js/jquery.min.js"></script>
	<script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/superfish.min.js"></script>
	<script src="js/aos.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
	<script src="js/slick.min.js"></script>
	<script src="js/slick-animation.min.js"></script>
	<script src="js/script.js"></script>
	<script>  
		$(document).ready(function() {  
			$.ajax({  
				url: 'https://0u5hre4gwf.execute-api.ap-south-1.amazonaws.com/prod/api/total-kms',  
				type: 'GET',  
				dataType: 'json',  
				success: function(data, textStatus, xhr) {   
					const distance = data['total_distance'];
					$('#count').html(distance);
				},  
				error: function(xhr, textStatus, errorThrown) {  
					console.log('Error in Database');  
				}  
			});  
		}); 
	</script>	 
</body>

</html>