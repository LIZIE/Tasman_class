<?php
/**
 * User: Jimin Lee
 * Date: 2016-11-09
 * Time: 11:37 AM
 */
?>

@extends('master')
@section('header')
<!-- top tabBar -->
<div class="main_toptab">
	<div class="container">
		<!-- top tabBar leftside -->
		<div class="toptab_left pull-left">
			<!-- socail icons -->
			<div class="toptab_social pull-left">
				<a href="#" target="_blank" title="Twitter"><i class="fa fa-twitter"></i></a>
				<a href="#" target="_blank" title="Facebook"><i class="fa fa-facebook"></i></a>
				<a href="#" target="_blank" title="Linkedin"><i class="fa fa-linkedin"></i></a>
				<a href="#" target="_blank" title="Pinterest"><i class="fa fa-pinterest"></i></a>
				<a href="#" target="_blank" title="Google Plus"><i class="fa fa-google-plus"></i></a>
				<a href="#" target="_blank" title="Instagram"><i class="fa fa-instagram"></i></a>
				<a href="#" target="_blank" title="Email"><i class="fa fa-envelope"></i></a>
			</div>
			<!-- socail icons /-->
			<div class="pull-left addtxt">
				<p>Add your text or menu here.</p>
			</div>
		</div>
		<!-- top tabBar leftside /-->
		<!-- top tabBar rightside -->
		<div class="toptab_info pull-right">
			<ul>
				<li>Email Us <span class="color-emphasis">info@business.com</span></li>
				<li>Toll Free <span class="color-emphasis">1.800.123.4567</span></li>
			</ul>
		</div>
		<!-- top tabBar rightside /-->
	</div>
	<div class="clearfix"></div>
</div>
<!-- top tabBar /-->
<!-- top nav -->
<header>	
	<nav class="navbar navbar-default">
		<!-- logo -->
		<h1 class="text-center">
			<a href="/" title="Construction">	
				<img src="{{ URL::asset('images/common/logo.png') }}" alt="logo" />
			</a>
		</h1>
		<!-- logo /-->
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
			<ul class="nav nav-pills nav-justified">
				<li role="presentation" ><a href="#">Home</a></li>
				<li role="presentation"><a href="#">Features</a></li>
				<li role="presentation"><a href="#">Who We Are</a></li>
				<li role="presentation"><a href="/service">Services</a></li>
				<li role="presentation"><a href="#">Our Work</a></li>
				<li role="presentation"><a href="/project">Shop</a></li>
				<li role="presentation"><a href="#">News</a></li>
				<li role="presentation"><a href="/contact">Contact Us</a></li>
			</ul>
		</div>
		<!--web navigation /-->		
	</nav>
</header>
<!-- top nav /-->
@endsection


@section('content')
<!-- main section 01. top visual & title -->
<section class="main_top">
	<div class="container">		
    	<div class="main_toptitle">
	    	<p class="visual_title">YOUR DREAM HOUSE</p>
			<p class="visual_txt">If you dream of designing a new home that takes full advantage of the unique geography and views of land that you love</p>
			<button type="button" class="btn btn-yellow">OUR SERVIES >></button>
			<button type="button" class="btn btn-outline">GET A QUOTE >></button>
		</div>
	</div>
</section>
<!-- main section 02. main top services -->
<section class="main_service">	
	<div class="container">		
		<div class="row services">
			<div class="col-sm-4 col_height">
				<a href="#"><img src="{{ URL::asset('images/main/main_service_01.jpg') }}" alt="Best House Renovation"></a>
				<h3>Best House Renovation</h3>
				<p>Constructor explains how you can enjoy high end flooring trends like textured wood and realistic stones with new laminate flooring.</p>
				<p class="link"><a href="#">READ MORE</a></p>
			</div>
			<div class="col-sm-4 col_height">
				<a href="#"><img src="{{ URL::asset('images/main/main_service_02.jpg') }}" alt="The Effective Teamwork"></a>
				<h3>The Effective Teamwork</h3>
				<p>As the general contractor, we first create the highest level of trust and integrity with our clients. We value our role in the success of your project.</p>
				<p class="link"><a href="#">READ MORE</a></p>
			</div>
			<div class="col-sm-4 col_height">
				<a href="#"><img src="{{ URL::asset('images/main/main_service_03.jpg') }}" alt="The Green Building"></a>
				<h3>The Green Building</h3>
				<p>Green construction refers to a structure and using process that is environmentally responsible and resource-efficient throughout a building's life cycle.</p>
				<p class="link"><a href="#">READ MORE</a></p>
			</div>			
		</div>
	</div>		
</section>
<div class="clearfix"></div>
<!-- main section 03. U.S. Certified Contractors -->
<section class="main_Contractors main_section">
	<div class="container">	
		<h2>U.S. Certified Contractors</h2>	
		<span class="title_line"></span>
		<div class="row Contractors">		
			<div class="col-sm-4 col_height">
				<a href="#"><i class="fa fa-institution"></i></a>
				<h3>Government Building</h3>
				<p>We understand you need a building that works for you and your organization, and it must function well.</p>
			</div>
			<div class="col-sm-4 col_height">
				<a href="#"><i class="fa fa-hospital-o "></i></a>
				<h3>Health Care Construction</h3>
				<p>We are very familiar with the challenges of creating high-quality, cost-effective health care environments.</p>
			</div>
			<div class="col-sm-4 col_height">
				<a href="#"><i class="fa fa-beer"></i></a>
				<h3>Water Treatment</h3>
				<p>The most powerful things we do is help improve water quality for millions of people each year.</p>
			</div>
		</div>
	</div>
</section>
<div class="clearfix"></div>
<!-- main section 04. WORKING WITH US -->
<section class="main_withus">
	<div class="container">		
    	<div class="main_toptitle">
    		<p class="visual_stitle">WORKING WITH US</p>
	    	<p class="visual_title">CONTRACTORS & CONSTRUCTION
MANAGERS SINCE 1989</p>
			<button type="button" class="btn btn-outline">GET A QUOTE >></button>
		</div>
	</div>
</section>
<!-- main section 04. WORKING WITH US /-->
<div class="clearfix"></div>
<!-- main section 05. What We Do -->
<section class="main_whatwedo main_section">
	<div class="container">	
		<header>
			<div class="pull-left">
				<h2>What We Do</h2>	
				<span class="title_line"></span>
			</div>
			<div class="pull-right list_arrow">
				<a href="#">
				<i class="fa fa-angle-left arrow_border"></i>
				</a>
				<a href="#">
				<i class="fa fa-angle-right arrow_border"></i>
				</a>
			</div>
			<div class="clearfix"></div>
		</header>
		<div class="row">
			<div class="col-sm-4 col_height">
				<a href="#"><img src="{{ URL::asset('images/main/main_whatwedo_img01.jpg') }}" alt="Best House Renovation"></a>
				<h3>Metal Roofing</h3>
				<p>Constructor explains how you can enjoy high end flooring trends like textured wood and realistic stones with new laminate flooring.</p>
				<p class="link"><a href="#">READ MORE</a></p>
			</div>
			<div class="col-sm-4 col_height">
				<a href="#"><img src="{{ URL::asset('images/main/main_whatwedo_img02.jpg') }}" alt="The Effective Teamwork"></a>
				<h3>Centeral Contracting</h3>
				<p>As the general contractor, we first create the highest level of trust and integrity with our clients. We value our role in the success of your project.</p>
				<p class="link"><a href="#">READ MORE</a></p>
			</div>
			<div class="col-sm-4 col_height">
				<a href="#"><img src="{{ URL::asset('images/main/main_whatwedo_img03.jpg') }}" alt="The Green Building"></a>
				<h3>Construction Consultant</h3>
				<p>Green construction refers to a structure and using process that is environmentally responsible and resource-efficient throughout a building's life cycle.</p>
				<p class="link"><a href="#">READ MORE</a></p>
			</div>
		</div>			
	</div>
</section>
<!-- main section 05. What We Do /-->
<div class="clearfix"></div>
<!-- main section 06. Featured Works -->
<section class="main_featured main_section">
	<div class="container">	
		<header>
			<div class="pull-left">
				<h2>Featured Works</h2>	
				<span class="title_line"></span>
			</div>
			<div class="pull-right list_arrow">
				<a href="#">
				<i class="fa fa-angle-left arrow_border"></i>
				</a>
				<a href="#">
				<i class="fa fa-angle-right arrow_border"></i>
				</a>
			</div>
			<div class="clearfix"></div>
		</header>
		<div class="row">
			<div class="col-sm-4 col_height ">
				<div class="img_hover">
					<div class="pictxt hidden">
					<p class="visual_stitle">FRENCH QUARTER INN</p>
					<button type="button" class="btn btn-yellow">Read More</button>
					</div>
					<div class="overlay hidden">					
					</div>				
					<a href="#"><img src="{{ URL::asset('images/main/main_works_01.jpg') }}" alt="Best House Renovation"></a>
				</div>
			</div>
			<div class="col-sm-4 col_height ">
				<div class="img_hover">
					<div class="pictxt hidden">
					<p class="visual_stitle">FRENCH QUARTER INN</p>
					<button type="button" class="btn btn-yellow">Read More</button>
					</div>
					<div class="overlay hidden">					
					</div>				
					<a href="#"><img src="{{ URL::asset('images/main/main_works_02.jpg') }}" alt="Best House Renovation"></a>
				</div>
			</div>
			<div class="col-sm-4 col_height ">
				<div class="img_hover">
					<div class="pictxt hidden">
					<p class="visual_stitle">FRENCH QUARTER INN</p>
					<button type="button" class="btn btn-yellow">Read More</button>
					</div>
					<div class="overlay hidden">					
					</div>				
					<a href="#"><img src="{{ URL::asset('images/main/main_works_03.jpg') }}" alt="Best House Renovation"></a>
				</div>
			</div>	
		</div>		
	</div>
</section>
<!-- main section 06. Featured Works /-->
<div class="clearfix"></div>

<!-- main section 07. News -->
<section class="main_news main_section">
	<div class="container">	
		<header>
			<div class="pull-left">
				<h2>Recent News</h2>	
				<span class="title_line"></span>
			</div>
			<div class="pull-right list_arrow">
				<a href="#">
				<i class="fa fa-angle-left arrow_border"></i>
				</a>
				<a href="#">
				<i class="fa fa-angle-right arrow_border"></i>
				</a>
			</div>
			<div class="clearfix"></div>
		</header>
		<div class="row">
			<div class="col-sm-4 col_height">
				<a href="#"><img src="{{ URL::asset('images/main/main_news_01.jpg') }}" alt="Best House Renovation"></a>
				<h4><a href="#">Finding New Buildings in the Dust</a></h4>
				<!-- news_date and comments line -->
				<div class="news_aside"> 
					<span class="news_date">
						<i class="fa fa-file-text-o"></i> 
						<time>February 12, 2015</time>
					</span> 
					<span class="news_comments">
						<i class="fa fa-comments-o"></i> 
						<small>No Comments</small>
					</span>
				</div>
				<!-- news_date and comments line /-->
				<p class="txt">Constructor explains how you can enjoy high end flooring trends like textured wood and realistic stones with new laminate flooring.</p>
				<button type="button" class="btn btn-more">Read More</button>
			</div>
			<div class="col-sm-4 col_height">
				<a href="#"><img src="{{ URL::asset('images/main/main_news_02.jpg') }}" alt="The Effective Teamwork"></a>
				<h4><a href="#">How to Build A Construction Plan</a></h4>
				<!-- news_date and comments line -->
				<div class="news_aside"> 
					<span class="news_date">
						<i class="fa fa-file-text-o"></i> 
						<time>February 12, 2015</time>
					</span> 
					<span class="news_comments">
						<i class="fa fa-comments-o"></i> 
						<small>No Comments</small>
					</span>
				</div>
				<!-- news_date and comments line /-->
				<p class="txt">Constructor explains how you can enjoy high end flooring trends like textured wood and realistic stones with new laminate flooring.</p>
				<button type="button" class="btn btn-more">Read More</button>
			</div>
			<div class="col-sm-4 col_height">
				<a href="#"><img src="{{ URL::asset('images/main/main_news_03.jpg') }}" alt="The Green Building"></a>
				<h4><a href="#">Construction Honored with AGC Builders</a></h4>
				<!-- news_date and comments line -->
				<div class="news_aside"> 
					<span class="news_date">
						<i class="fa fa-file-text-o"></i> 
						<time>February 12, 2015</time>
					</span> 
					<span class="news_comments">
						<i class="fa fa-comments-o"></i> 
						<small>No Comments</small>
					</span>
				</div>
				<!-- news_date and comments line /-->
				<p class="txt">Constructor explains how you can enjoy high end flooring trends like textured wood and realistic stones with new laminate flooring.</p>
				<button type="button" class="btn btn-more">Read More</button>
			</div>
		</div>			
	</div>
</section>
<!-- main section 07. News /-->
<div class="clearfix"></div>


<!-- main section 08.Our Clients & Testimonials -->
<section class="main_last main_section">
	<div class="container">	
		<div class="row">
			<section class="col-sm-6 last_client">
				<header>
						<h2>Our Clients</h2>	
						<span class="title_line"></span>
				</header>
				<ul class="client_logos ">
					<li class="col-xs-4 nopadding">
						<a href="#"><img src="{{ URL::asset('images/main/logo1.png') }}" alt="client logo" /></a>
					</li>
					<li class="col-xs-4 nopadding">
						<a href="#"><img src="{{ URL::asset('images/main/logo2.png') }}" alt="client logo" /></a>
					</li>
					<li class="col-xs-4 nopadding">
						<a href="#"><img src="{{ URL::asset('images/main/logo3.png') }}" alt="client logo" /></a>
					</li>
					<li class="col-xs-4 nopadding">
						<a href="#"><img src="{{ URL::asset('images/main/logo4.png') }}" alt="client logo" /></a>
					</li>
					<li class="col-xs-4 nopadding">
						<a href="#"><img src="{{ URL::asset('images/main/logo5.png') }}" alt="client logo" /></a>
					</li>
					<li class="col-xs-4 nopadding">
						<a href="#"><img src="{{ URL::asset('images/main/logo6.png') }}" alt="client logo" /></a>
					</li>
				</ul>
				<div class="clearfix"></div>	
			</section>	
			<section class="col-sm-6 last_test">
				<header>
						<h2>Testimonials</h2>	
						<span class="title_line"></span>
				</header>
				<div class="box_line">
					<p>
						Constructor explains how you can enjoy high end flooring trends like textured wood and realistic stones with new laminate flooring with new laminate flooring.
					</p>
				</div>
				<div class="people">
					<a href="#"><img src="{{ URL::asset('images/main/testimonials_photo.jpg') }}" alt="Testimonials_photo" class="img-circle" /></a>
					<span>Howard K. Stern</span>
				</div>	
			</section>	
		</div>
	</div>
</section>
<!-- main section 08.Our Clients & Testimonials /-->
<div class="clearfix"></div>
@endsection

@section('footer')
@endsection

