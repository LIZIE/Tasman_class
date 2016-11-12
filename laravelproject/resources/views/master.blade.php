<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Construction Example Web Page</title>
    <!-- CSS -->
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/app.css') }}">
    <!-- font -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
    <!-- JS -->
    <script type="text/javascript" src="{{ URL::asset('js/jquery-1.12.4.min.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('js/bootstrap.js') }}"></script>
     @yield('js')
</head>
<body>
<div class="header">
    @yield('header')
</div>
<div class="sub_header">
    @yield('sub_header')
</div>
<!-- contents -->
<div class="content">
    @yield('content')
</div>
<!-- header /-->
<!-- footer -->
<div class="footer">
	<!-- footer yellow background social icon collection -->
	<section class="container container-social">
		<!-- shadow triangle -->
		<div class="shape_shadow"></div>
		<div class="footer-social"> 
			<label>Follow us</label> 
			<a target="_blank" href="#" title="Twitter" >
				<i class="fa fa-twitter img-circle"></i>
			</a> 
			<a target="_blank" href="#" title="Linkedin">
				<i class="fa fa-linkedin-square"></i>
			</a> 
			<a target="_blank" href="#" title="Facebook">
				<i class="fa fa-facebook"></i>
			</a> 			
			<a target="_blank" href="#" title="Google-plus">
				<i class="fa fa-google-plus"></i>
			</a> 
			<a target="_blank" href="#" title="Instagram">
				<i class="fa fa-instagram"></i>
			</a> 
		</div>
		<!-- footer yellow background social icon collection /-->
	</section>
	<section class="container">
    	<section class="row">
			<!-- COL01. ABOUT COMPANY -->
			<div class="footer-info col-sm-6 col-md-3">
				<h4>ABOUT COMPANY</h4>
				<p>
					Our clients range from FTSE companies, to large organisations and some small local businesses who are striving to expand.
				</p>
				<P>
					To see a detailed list of our works and the progress please see our project page.
				</P>	
			</div>
			<!-- COL01. ABOUT COMPANY /-->
			<!-- COL02. ABOUT COMPANY -->
			<div class="footer-info col-sm-6 col-md-3">
				<h4>ABOUT COMPANY</h4>
				<ul class="footer_link">
					<li class="col-sm-6 "><a href="#">Home</a></li>
					<li class="col-sm-6 "><a href="#">Who We Are</a></li>
					<li class="col-sm-6 "><a href="#">Company News</a></li>
					<li class="col-sm-6 "><a href="/service">Our Services</a></li>
					<li class="col-sm-6 "><a href="/project">Projects</a></li>
					<li class="col-sm-6 "><a href="#">Shop</a></li>
					<li class="col-sm-6 "><a href="#">Careers</a></li>
					<li class="col-sm-6 "><a href="/contact">Contact Us</a></li>
				</ul>
			</div>
			<!-- COL02. ABOUT COMPANY /-->
			<!-- COL03. CONSTRUCTION OFFICE -->
			<div class="footer-info col-sm-6 col-md-3">
				<h4>CONSTRUCTION OFFICE</h4>		
				<dl class="footer_contact">
					<dt class="pull-left"><i class="fa fa-map-marker"></i>
					</dt>
					<dd class="pull-left">				
					1600 Amphitheatre Parkway Mountain View CA 94043
					</dd>
					<dt class="pull-left"><i class="fa fa-phone"></i>
					</dt>
					<dd class="pull-left">				
					1.800.451.128
					</dd>
					<dt class="pull-left"><i class="fa fa-envelope"></i>
					</dt>
					<dd class="pull-left">
					<a href="#">chicago@construction.com</a>
					</dd>
					<dt class="pull-left"><i class="fa fa-fax"></i>
					</dt>
					<dd class="pull-left">				
					FAX: (123) 123-4567
					</dd>
				</dl>
				<div class="clearfix"></div>
			</div>
			<!-- COL03. CONSTRUCTION OFFICE /-->
			<!-- COL04. BUSINESS HOURS -->
			<div class="footer-info col-sm-6 col-md-3">
				<h4>BUSINESS HOURS</h4>
				<p>
					Our support available to help you 24 hours a day, seven days a week.
				</p>
				<ul class="footer_workhour">
					<li class="col-sm-6">Monday-Friday:</li>
					<li class="col-sm-6 text-right">9am to 5pm</li>
					<li class="col-sm-6">Saturday:</li>
					<li class="col-sm-6 text-right">10am to 2pm</li>
					<li class="col-sm-6">Sunday:</li>
					<li class="col-sm-6 text-right">Closed</li>
				</ul>
			</div>
			<!-- COL04. BUSINESS HOURS /-->
		</section>			
	</section>
	<footer>
		<section class="container">
			<p class="pull-left">Copyright © 2015 Construction Theme - Theme by <a href="#">WPCharming</a></p>
			<ul class="pull-right">
				<li><a href="#">Our Services</a></li>
				<li><a href="#">Projects</a></li>
				<li><a href="#">Contact  Us</a></li>
				<li><a href="#">Disclaimer</a></li>
				<li><a href="#">Privacy Policy</a></li>			
			</ul>
		</section>
	</footer>
</div>
<div class="clearfix"></div>
<!-- footer /-->
</body>
</html>