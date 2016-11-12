<?php
/**
 * User: Jimin Lee
 * Date: 2016-11-11
 * Time: 07:21 PM
 */
?>

@extends('master')
@extends('sub')
@section('content')
<!-- top title -->
<section class="sub_toptitle">
	<div class="container">
		<h2 class="pull-left">OUR SERVICES</h2>
		<button type="button" class="btn btn-outline pull-right">GET IN TOUCH</button>
	</div>
</section>
<!-- top title /-->
<!-- sub toptitle path -->
<section class="toptitle_path">
	<div class="container">
	<span class="strong">Construction Theme </span>
	<i class="fa fa-angle-right arrow_border"></i>
	 Our Services
	</div>
</section>
<!-- sub toptitle path /-->
<!-- sub contents -->
<section class="sub_section">
	<div class="container">	
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
<!-- sub contents /-->
<div class="clearfix"></div>
@endsection
@section('footer')
@endsection

