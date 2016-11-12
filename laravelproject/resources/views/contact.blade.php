<?php
/**
 * User: Jimin Lee
 * Date: 2016-11-12
 * Time: 02:21 PM
 */
?>

@extends('master')
<!DOCTYPE html>
<html lang="en">
<head>
@section('js')
	<!--Google Maps API-->
	<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDnycWatbGyK6ldFqErjFtko1yeMclNUOA&amp;sensor=true"></script>
    <script type="text/javascript" src="{{ URL::asset('js/maps.js') }}"></script>
 @endsection  
</head>
<body>
@section('sub_header')
<section class="subtop_contact">
	<header>	
		<nav class="navbar navbar-default">	
			<div class="container">		
			<!-- logo -->
				<h1 class="pull-left">
					<a href="/" title="Construction">	
						<img src="{{ URL::asset('images/common/logo_white.png') }}" alt="logo" />
					</a>
				</h1>
			<!-- logo /-->
			<!-- top tab -->
				<div class="toptab_info pull-right">
					<ul>				
						<li>Toll Free <span class="color-emphasis">1.800.123.4567</span></li>
						<li>
							<a target="_blank" href="#" title="Twitter" >
							<i class="fa fa-twitter img-circle"></i></a> 
						</li>
						<li>
							<a target="_blank" href="#" title="Linkedin">
							<i class="fa fa-linkedin-square"></i></a> 
						</li>
						<li>
							<a target="_blank" href="#" title="Facebook">
							<i class="fa fa-facebook"></i></a> 
						</li>			
						<li>
							<a target="_blank" href="#" title="Google-plus">
							<i class="fa fa-google-plus"></i></a> 
						</li>
						<li>
							<a target="_blank" href="#" title="Instagram">
							<i class="fa fa-instagram"></i></a> 
						</li>
					</ul>
				</div>
			</div>
			<!-- top tab /-->
			<!-- mobile menu -->
		    <div class="navbar-header">
		      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar_mobile" aria-expanded="false">
		        <span class="sr-only">Toggle navigation</span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		      </button>
		    </div>
		    <!-- mobile menu /-->
		    <!--web navigation-->
			<div class="collapse navbar-collapse" id="navbar_mobile">
				<div class="container">	
				<ul class="nav nav-pills navbar-right ">
					<li role="presentation" ><a href="#">Home</a></li>
					<li role="presentation"><a href="#">Features</a></li>
					<li role="presentation"><a href="#">Who We Are</a></li>
					<li role="presentation"><a href="/service">Services</a></li>
					<li role="presentation"><a href="/project">Our Work</a></li>
					<li role="presentation"><a href="#">Shop</a></li>
					<li role="presentation"><a href="#">News</a></li>
					<li role="presentation"><a href="/contact">Contact Us</a></li>
				</ul>
				</div>
			</div>
			<!--web navigation /-->			
		</nav>		
	</header>
	<section class="sub_toptxt">
		<div class="container">
			<h2>GET IN TOUCH WITH US.</h2>
			<p>Contact The Construction Company</p>
		</div>
	</section>
</section>
@endsection
@section('content')
<!-- sub toptitle path -->
<section class="toptitle_path">
	<div class="container">
	<span class="strong">Construction Theme </span>
	<i class="fa fa-angle-right arrow_border"></i>
	 Contact Us
	</div>
</section>
<!-- sub toptitle path /-->
<!-- sub contents -->
<section class="sub_section sub_contact">
	<div class="container">	
		<header>
			<h2>Contact Us</h2>	
			<span class="title_line"></span>
		</header>
		<section class="row">
			<div class="col-sm-6 contact_left">
				<p>Call or submit our online form to request an estimate or for general questions about U.S. Certified Contractors and our services. We look forward to serving you!</p>
				<form class="form-inline contact" id="contactForm">
					<div class="form-group col-sm-6 ">
					<input type="text" class="form-control" id="firstname" placeholder="First Name * ">
					</div>
					<div class="form-group col-sm-6 ">
					<input type="text" class="form-control" id="lastname" placeholder="Last Name * ">
					</div>
					<div class="form-group col-sm-6 ">
					<input type="email" class="form-control" id="email" placeholder="Your Email * ">
					</div>
					<div class="form-group col-sm-6">
					<input type="text" class="form-control" id="phone" placeholder="Your Phone Number * ">
					</div>
					<div class="form-group col-sm-12">
					<input type="text" class="form-control" id="subject" placeholder="Subject * ">
					</div>
					<div class="form-group col-sm-12">
					<textarea class="form-control" rows="15" id="message" placeholder="Message * "></textarea>
					</div>
					<button type="submit" class="btn btn-yellow">Read More</button>					
				</form>		
				<div class="validationbox" role="alert">
					<p>Validation errors occurred. Please confirm the fields and submit it again.</p>
				</div>
			</div>
			<div class="col-sm-6 contact_right">
				<header class="row ">
					<div class="col-sm-6">
						<h3 class="nopadding">MAILING ADDRESS</h3>
						<p>1600 Amphitheatre Parkway<br />
						Mountain View CA 94043<br />
						United States</p>
					</div>
					<div class="col-sm-6">
						<h3 class="nopadding">CONTACT INFO</h3>
						<p>
						+1 (312) 380-6650<br />
						<a href="#">contact@construction.com</a><br />
						<a href="#">@construction_llc</a>
						</p>
					</div>
				</header>
				<section class="googlemaps"  id="map-canvas">	
				</section>
			</div>
		</section>			
	</div>
</section>
<!-- sub contents /-->
<div class="clearfix"></div>
@endsection

</body>
