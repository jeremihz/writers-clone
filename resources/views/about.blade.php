@extends('layouts.app')

@section('content')

<link href="{{asset('link/socicon.css')}}" rel="stylesheet" type="text/css" media="all" />
<link href="{{asset('link/entypo.css')}}" rel="stylesheet" type="text/css" media="all" />
<link href="{{asset('link/theme.css')}}" rel="stylesheet" type="text/css" media="all" />

<div class="main-container">
<section class="space-lg bg-gradient">
<div class="container">
<div class="row align-items-center">
<div class="col-12 col-md-6 mb-5 mb-md-0 position-relative">
<h1 class="display-4">My Assignment Experts</h1>
<p align="justify">
Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis 
	natoque penatibus et magnis dis parturient montes
</p>
</div>
<!--end of col-->


</div>
</div>
</div>
<!--end of col-->
</div>
<!--end of row-->
</div>
<!--end of container-->
</section>
<!--end of section-->
<section class="bg-white">
<div class="container">
<div class="row justify-content-around align-items-center">
<div class="col-12 col-md-6 col-lg-5 text-center text-md-left section-intro">
<span class="title-decorative">“Lorem ipsum dolor sit amet, .</span>
<h3 class="h1">“Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</h3>
<span class="lead">
“Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
</span>
 <p><a class="btn btn-lg btn-primary" href="/login" role="button">Join us</a></p>
</div>
<!--end of col-->
<div class="col-8 col-md-6 col-lg-4">
<img alt="Image" src="{{asset('img/contract.svg')}}" class="img-fluid shadow" />
</div>
</div>
</div>
<!--end of col-->
</div>
<!--end of row-->
</div>
<!--end of container-->
</section>
<!--end of section-->
<section class="bg-gradient text-white space-lg">
<div class="container">
<div class="row justify-content-center">
<div class="col-12 col-lg-10">
<div class="media">
<img alt="Image" src="{{asset('img/avatar-male-3.jpg')}}" class="avatar avatar-lg" />
<div class="media-body">
<p class="h2">
“Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis 
	natoque penatibus et magnis dis parturient montes”
</p>
<span>writter</span>
</div>
</div>
</div>
</div>
<!--end of col-->
</div>
<!--end of row-->
</div>
<!--end of container-->
</section>
<!--end of section-->
<section>
 <div class="justify-content-center py-3">
        <div class="row justify-content-center">
           <h2 class="featurette px-4">About us + Much more</h2>
       </div>
       <br><br>
<!--end of row-->

<div class="row justify-content-around align-items-center">
<div class="col-12 col-md-6 col-lg-5 order-md-2">
<ul class="nav" id="myTab" role="tablist">
<li>
<a class="active card" id="tab-1" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">
<div class="card-body">
<h5>Mission</h5>
<p align="justify">
Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis 
	natoque penatibus et magnis dis parturient montes,
	Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis 
	natoque.
</p>
</div>
</a>
</li>
<li>
<a class="card" id="tab-2" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">
<div class="card-body">
<h5>Vision</h5>
<p align="justify">
Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis 
	natoque penatibus et magnis dis parturient montes,
	Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis 
	natoque.
</div>
</a>
</li>
<li>
<a class="card" id="tab-3" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">
<div class="card-body">
<h5>About Us</h5>
<p align="justify">
Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis 
	natoque penatibus et magnis dis parturient montes,
	Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis 
	natoque.
</p>
</div>
</a>
</li>
</ul>
</div>
<!--end of col-->
<div class="col-12 col-md-6 order-md-1">
<div class="tab-content" id="myTabContent">
<div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="tab-1">
<img alt="Image" class="img-fluid shadow rounded-circle dotter" src="{{asset('img/be22.png')}}" />
</div>
<div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="tab-2">
<img alt="Image" class="img-fluid shadow rounded-circle dotter" src="{{asset('img/be11.png')}}" />
</div>
<div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="tab-3">
<img alt="Image" class="img-fluid shadow rounded-circle dotter" src="{{asset('img/be1.jpg')}}" />
</div>
</div>
</div>
<!--end of col-->
</div>
<!--end of row-->
</div>
<!--end of container-->
</section>
<!--end of section-->
<section class="bg-gradient p-0 text-white">
<svg class="decorative-divider" preserveAspectRatio="none" viewbox=" 0 0 100 100">
<polygon fill="#F8F9FB" points="0 0 100 0 100 100"></polygon>
</svg>
<div class="container">
<div class="row justify-content-center section-intro">
<div class="col-auto">
<h2 class="h1" id="faq">Frequently Asked Questions</h2>
</div>
<!--end of col-->
</div>
<!--end of row-->
<ul class="row feature-list feature-list-sm justify-content-center">

<li class="col-12 col-md-6 col-lg-5">
<div class="card">
<div class="card-body">
<h6>How does ....?</h6>
<p align="justify">
Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis 
	natoque penatibus et magnis dis parturient montes,
	Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis 
	natoque.
</p>
</div>
</div>
</li>

<li class="col-12 col-md-6 col-lg-5">
<div class="card">
<div class="card-body">
<h6>How do i ...?</h6>
<p align="justify">
Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis 
	natoque penatibus et magnis dis parturient montes,
	Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis 
	natoque.
</p>
</div>
</div>
</li>

<li class="col-12 col-md-6 col-lg-5">
<div class="card">
<div class="card-body">
<h6>What do you mean by ....?</h6>
<p align="justify">
Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis 
	natoque penatibus et magnis dis parturient montes,
	Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis 
	natoque.
</p>
</div>
</div>
</li>

<li class="col-12 col-md-6 col-lg-5">
<div class="card">
<div class="card-body">
<h6>What do you mean by.......?</h6>
<p align="justify">
Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis 
	natoque penatibus et magnis dis parturient montes,
	Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis 
	natoque.
</p>
</div>
</div>
</li>

<li class="col-12 col-md-6 col-lg-5">
<div class="card">
<div class="card-body">
<h6>Is this site legit?</h6>
<p align="justify">
Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis 
	natoque penatibus et magnis dis parturient montes,
	Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis 
	natoque.
</p>
</div>
</div>
</li>

<li class="col-12 col-md-6 col-lg-5">
<div class="card">
<div class="card-body">
<h6>how will i....?</h6>
<p align="justify">
Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis 
	natoque penatibus et magnis dis parturient montes,
	Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis 
	natoque.
</p>
</div>
</div>
</li>

</ul>
<!--end of row-->
<!--end of col-->
</div>
<!--end of row-->
</div>
<!--end of container-->
</section>
@include('includes.footer')
@endsection