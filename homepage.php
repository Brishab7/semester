<?php
session_start();
include("connect.php");

?>


<!DOCTYPE html>
<html lang="en">
<head>
	<title>Muktinath Travel</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


	<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Arizonia&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" href="css/animate.css">
	
	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css">
	<link rel="stylesheet" href="css/magnific-popup.css">

	<link rel="stylesheet" href="css/bootstrap-datepicker.css">
	<link rel="stylesheet" href="css/jquery.timepicker.css">

	
	<link rel="stylesheet" href="css/flaticon.css">
	<link rel="stylesheet" href="css/style.css">

	 <style>
    .stars { color:#ffc107; font-size:16px; }
    .whatsapp-float {position:fixed;width:60px;height:60px;bottom:40px;right:20px;background-color:#25d366;color:#FFF;border-radius:50px;text-align:center;font-size:30px;z-index:100;}
    .my-float {margin-top:15px;}
    .counter { font-size:2.5rem; font-weight:700; }
  </style>
</head>
<body>
	<!--start nav-->
	<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
		<div class="container">
			<a class="navbar-brand" href="homepage.php">Muktinath<span>Travel Agency</span></a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
				<span class="oi oi-menu"></span> Menu
			</button>

			<div class="collapse navbar-collapse" id="ftco-nav">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item active"><a href="homepage.php" class="nav-link">Home</a></li>
					<li class="nav-item"><a href="about.html" class="nav-link">About</a></li>
					<li class="nav-item"><a href="destination.html" class="nav-link">Destination</a></li>
					<li class="nav-item"><a href="hotel.html" class="nav-link">Hotel</a></li>
					<li class="nav-item"><a href="guide.html" class="nav-link">Guide</a></li>
					<li class="nav-item"><a href="adventure.html" class="nav-link">Adventures</a></li>
					<li class="nav-item"><a href="blog.html" class="nav-link">Blog</a></li>
					<li class="nav-item"><a href="contact.html" class="nav-link">Contact</a></li>
				</ul>
			</div>
		</div>
	</nav>
	<!-- END nav -->
	
	<div class="hero-wrap js-fullheight" style="background-image: url('images/bg_5.jpg');">
		<div class="overlay"></div>
		<div class="container">
			<div class="row no-gutters slider-text js-fullheight align-items-center" data-scrollax-parent="true">
				<div class="col-md-7 ftco-animate">
					<span class="subheading">Welcome to Muktinath</span>
					<h1 class="mb-4">Discover Your Favorite Place with Us</h1>
					<p class="caps">Travel to the any corner of the Nepal, without going around in circles</p>
				</div>
				<a href="https://www.youtube.com/watch?v=ARDY639T_WM" class="icon-video popup-vimeo d-flex align-items-center justify-content-center mb-4">
					<span class="fa fa-play"></span>
				</a>
			</div>
		</div>
	</div>



	<!-- Filter & Hotels -->
<section class="py-5" style="background-color: #f9f9f9;">
  <div class="container">
    <h2 class="text-center mb-5" style="font-size: 2.5rem; color: #333; font-weight: 600;">Popular Packages</h2>

    <form id="filterForm" class="mb-5" style="background: #fff; padding: 20px; border-radius: 12px; box-shadow: 0 0 12px rgba(0,0,0,0.1);">
      <div class="form-row d-flex justify-content-center">
        <div class="col-md-4 mb-2">
          <input type="text" id="destinationInput" placeholder="Destination" class="form-control" style="padding: 10px; border-radius: 8px; border: 1px solid #ccc;">
        </div>
        <div class="col-md-3 mb-2">
          <select id="priceLimit" class="form-control" style="padding: 10px; border-radius: 8px; border: 1px solid #ccc;">
            <option value="">Any Price</option>
            <option value="5000">≤ ₹5,000</option>
            <option value="8000">≤ ₹8,000</option>
          </select>
        </div>
        <div class="col-md-2 mb-2">
          <button type="submit" class="btn btn-primary btn-block" style="padding: 10px 20px; font-weight: 600; border-radius: 8px; background-color: #007bff;">Filter</button>
        </div>
      </div>
    </form>

    <div class="row" id="hotelList">
      <!-- package 1 -->
      <div class="col-md-4 mb-4 hotel-card" data-location="pokhara" data-price="5000" data-rating="5">
        <div class="card" style="border-radius: 15px; box-shadow: 0 4px 16px rgba(0,0,0,0.1);">
          <img src="images/pokhara.jpeg" class="card-img-top" style="border-top-left-radius: 15px; border-top-right-radius: 15px;" alt="Pokhara">
          <div class="card-body">
            <h5 class="card-title">Pokhara( 4 Days ,5 Night) <span class="stars"></span></h5>
            <p class="card-text" style="color: #777;">Rs.15,000</p>
            <p style="font-weight: bold; color: #28a745;">Covers Most of the Places</p>
            <a href="https://book.stripe.com/test_14A4gzgy3dqBcF9crM4AU01" 
           onclick="checkoutWithStripe()"
           style="display: inline-block; background-color: #28a745; color: white; padding: 10px 20px; border-radius: 5px; text-decoration: none;">
          Book Now
        </a>
          </div>
        </div>
      </div>

      <!-- package 2 -->
      <div class="col-md-4 mb-4 hotel-card" data-location="chitwan" data-price="6000" data-rating="5">
        <div class="card" style="border-radius: 15px; box-shadow: 0 4px 16px rgba(0,0,0,0.1);">
          <img src="images/chitwan.jpeg" class="card-img-top" style="border-top-left-radius: 15px; border-top-right-radius: 15px;">
          <div class="card-body">
            <h5 class="card-title">Sauraha <span class="stars"></span></h5>
            <p class="card-text" style="color: #777;">Rs.8,000</p>
            <p style="font-weight: bold; color: #28a745;">2 Days, 1 Night</p>
            <a href="https://book.stripe.com/test_14A4gzgy3dqBcF9crM4AU01" 
           onclick="checkoutWithStripe()"
           style="display: inline-block; background-color: #28a745; color: white; padding: 10px 20px; border-radius: 5px; text-decoration: none;">
          Book Now
        </a>
          </div>
        </div>
      </div>

      <!-- package 3 -->
      <div class="col-md-4 mb-4 hotel-card" data-location="rara" data-price="4500" data-rating="4">
        <div class="card" style="border-radius: 15px; box-shadow: 0 4px 16px rgba(0,0,0,0.1);">
          <img src="images/rara.jpeg" class="card-img-top" style="border-top-left-radius: 15px; border-top-right-radius: 15px;">
          <div class="card-body">
            <h5 class="card-title"> Rara<span class="stars"></span></h5>
            <p class="card-text" style="color: #777;">Rs.20,000</p>
            <p style="font-weight: bold; color: #28a745;">4 Days Trip</p>
           <a href="https://book.stripe.com/test_14A4gzgy3dqBcF9crM4AU01" 
           onclick="checkoutWithStripe()"
           style="display: inline-block; background-color: #28a745; color: white; padding: 10px 20px; border-radius: 5px; text-decoration: none;">
          Book Now
        </a>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>


<!-- Counter Section -->
<section style="border: 2px solid #007bff; border-radius: 12px; background: linear-gradient(to right, #e3f2fd, #fff); padding: 40px 10px; margin: 30px auto; max-width: 95%; text-align: center;">
  <div style="max-width: 1200px; margin: auto;">
    <div style="display: flex; flex-wrap: wrap; justify-content: space-around;">
      
      <div class="counter-box" style="margin: 20px; flex: 1; min-width: 250px;">
        <div style="font-size: 48px;">🎉</div>
        <span class="count" data-target="1200" style="font-size: 36px; font-weight: bold; color: #007bff; text-shadow: 0 0 10px rgba(0,123,255,0.6); display: block;">0</span>
        <span style="font-size: 18px; color: #333;">Happy Travelers</span>
      </div>

      <div class="counter-box" style="margin: 20px; flex: 1; min-width: 250px;">
        <div style="font-size: 48px;">✈️</div>
        <span class="count" data-target="75" style="font-size: 36px; font-weight: bold; color: #28a745; text-shadow: 0 0 10px rgba(40,167,69,0.6); display: block;">0</span>
        <span style="font-size: 18px; color: #333;">Destinations</span>
      </div>

      <div class="counter-box" style="margin: 20px; flex: 1; min-width: 250px;">
        <div style="font-size: 48px;">📅</div>
        <span class="count" data-target="500" style="font-size: 36px; font-weight: bold; color: #ff5722; text-shadow: 0 0 10px rgba(255,87,34,0.6); display: block;">0</span>
        <span style="font-size: 18px; color: #333;">Bookings This Year</span>
      </div>

    </div>
  </div>
</section>

<!-- Optional Ding Sound -->
<audio id="ding" src="https://www.soundjay.com/button/beep-07.wav" preload="auto"></audio>

<!-- Counter Animation Script -->


<!-- WhatsApp Contact -->
<a href="https://wa.me/9779844923738" class="whatsapp-float" target="_blank"><i class="fa fa-whatsapp my-float"></i></a>






		<section class="ftco-intro ftco-section ftco-no-pt">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-md-12 text-center">
						<div class="img"  style="background-image: url(images/bg_2.jpg);">
							<div class="overlay"></div>
							<h2>Muktinath Travel Agency</h2>
							<p>We can manage your dream </p>
							<p class="mb-0"><a href="contact.html" class="btn btn-primary px-4 py-3">Contact Us</a></p>
						</div>
					</div>
				</div>
			</div>
		</section>

		<footer class="ftco-footer bg-bottom ftco-no-pt" style="background-image: url(images/fotterimg.png);">
  <div class="container">
    <div class="row mb-5">
      <div class="col-md pt-5">
        <div class="ftco-footer-widget pt-md-5 mb-4">
          <h2 class="ftco-heading-2">About</h2>
          <p>Your trusted partner for unforgettable journeys, offering curated tours, expert guides, and seamless travel experiences across Nepal and beyond.</p>
          <ul class="ftco-footer-social list-unstyled float-md-left float-lft">
            <li class="ftco-animate"><a href="#"><span class="fa fa-twitter"></span></a></li>
            <li class="ftco-animate"><a href="#"><span class="fa fa-facebook"></span></a></li>
            <li class="ftco-animate"><a href="#"><span class="fa fa-instagram"></span></a></li>
          </ul>
        </div>
      </div>
     
    
    <div class="col-md pt-5 border-left">
      <div class="ftco-footer-widget pt-md-5 mb-4">
       <h2 class="ftco-heading-2">Have a Questions?</h2>
       <div class="block-23 mb-3">
         <ul>
           <li><span class="icon fa fa-map-marker"></span><span class="text">Pokhara, Kaski</span></li>
           <li><a href="#"><span class="icon fa fa-phone"></span><span class="text">+9779844923738</span></a></li>
           <li><a href="#"><span class="icon fa fa-paper-plane"></span><span class="text">muktinathtravelagency@gmail.com</span></a></li>
         </ul>
       </div>
     </div>
   </div>
 </div>
 <div class="row">
  <div class="col-md-12 text-center">

    <p>
      Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | <a href="http://brisab.com.np" target="_blank">Brishab Chalise</a>
     </p>
    </div>
  </div>
</div>
</footer>
			

			<!-- loader -->
			<div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


			
			<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>
<script>
  // Render stars
  document.querySelectorAll('.hotel-card').forEach(c => {
    const r = parseInt(c.dataset.rating);
    c.querySelector('.stars').textContent = '★'.repeat(r)+'☆'.repeat(5-r);
  });

  // Counter animation
  const counters = document.querySelectorAll('.count');
  counters.forEach(counter => {
    const update = () => {
      const target = +counter.dataset.target;
      const current = +counter.innerText;
      const increment = target/100;
      if(current < target) {
        counter.innerText = Math.ceil(current + increment);
        setTimeout(update, 20);
      }
    };
    update();
  });

  // Filter
  document.getElementById('filterForm').addEventListener('submit', function(e) {
    e.preventDefault();
    const dest = document.getElementById('destinationInput').value.toLowerCase();
    const priceLimit = parseInt(document.getElementById('priceLimit').value) || Infinity;
    document.querySelectorAll('.hotel-card').forEach(c => {
      const loc = c.dataset.location;
      const p = parseInt(c.dataset.price);
      c.style.display = ( (!dest || loc.includes(dest)) && p <= priceLimit ) ? 'block' : 'none';
    });
  });

  // Booking modal logic
  document.querySelectorAll('.btn-book').forEach(btn => {
    btn.addEventListener('click', () => {
      document.getElementById('modalHotelName').textContent = btn.dataset.hotel;
      $('#bookingModal').modal('show');
    });
  });

  document.getElementById('bookingForm').addEventListener('submit', function(e) {
    e.preventDefault();
    const ci = this.querySelectorAll('input')[2].value;
    const co = this.querySelectorAll('input')[3].value;
    if(new Date(ci) >= new Date(co)) {
      alert('Check‑out must be after check‑in');
      return;
    }
    alert('✅ Booking confirmed for '+document.getElementById('modalHotelName').textContent);
    $('#bookingModal').modal('hide');
    this.reset();
  });
</script>


<script>
  const counters = document.querySelectorAll('.count');
  let hasAnimated = false;
  const dingSound = document.getElementById('ding');

  function animateCounters() {
    const triggerPoint = window.innerHeight;

    counters.forEach(counter => {
      const rect = counter.getBoundingClientRect();
      if (rect.top < triggerPoint && !hasAnimated) {
        hasAnimated = true;

        counters.forEach(counter => {
          const target = +counter.getAttribute('data-target');
          let count = 0;
          const increment = target / 100;

          const updateCount = () => {
            count += increment;
            if (count < target) {
              counter.innerText = Math.ceil(count);
              counter.style.transform = 'scale(1.1)';
              setTimeout(() => counter.style.transform = 'scale(1)', 100);
              requestAnimationFrame(updateCount);
            } else {
              counter.innerText = target;
              counter.style.transform = 'scale(1.2)';
              setTimeout(() => counter.style.transform = 'scale(1)', 100);
              if (dingSound) dingSound.play();
            }
          };

          updateCount();
        });
      }
    });
  }

  window.addEventListener('scroll', animateCounters);
</script>



			
			
			<script src="js/jquery.min.js"></script>
			<script src="js/jquery-migrate-3.0.1.min.js"></script>
			<script src="js/popper.min.js"></script>
			<script src="js/bootstrap.min.js"></script>
			<script src="js/jquery.easing.1.3.js"></script>
			<script src="js/jquery.waypoints.min.js"></script>
			<script src="js/jquery.stellar.min.js"></script>
			<script src="js/owl.carousel.min.js"></script>
			<script src="js/jquery.magnific-popup.min.js"></script>
			<script src="js/jquery.animateNumber.min.js"></script>
			<script src="js/bootstrap-datepicker.js"></script>
			<script src="js/scrollax.min.js"></script>
			<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
			<script src="js/google-map.js"></script>
			<script src="js/main.js"></script>
		</body>
		</html>
