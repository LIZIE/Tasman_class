@section('sub_header')
<!-- top nav -->
<header>	
	<nav class="navbar navbar-default">	
		<div class="container">		
		<!-- logo -->
			<h1 class="pull-left">
				<a href="/" title="Construction">	
					<img src="{{ URL::asset('images/common/logo.png') }}" alt="logo" />
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
<!-- top nav /-->

@endsection
