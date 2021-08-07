@extends('layouts.app')

@section('title', 'Shop')

@section('content')



<div class="container-fluid p-2" style="background-color: transparent;border-radius: 10px;">
	
	@if(count($allproducts) > 0)

	<h1 class="text-center glow">Shop Products</h1>
	<div class="container p-4">

		<div class="row">
			@foreach($allproducts as $product)

			<div class="col-md-3 p-2">
				<div class="card getShadow p-2 containerC" data-aos="zoom-in"  style="border-radius: 10px;transition: 1s ease;border: 0px;">
			  		<img src='../storage/app/public/{{ $product->image }}' class="card-img mt-3" alt="product">
			  			
			  			<div class="overlay p-0" style="transition: 1s ease;">
			  					<div class="card-body">
			    					<h5 class="card-title text-center" style="font-size: 15px;">Price &#8377; {{ $product->price }}<strike style="color: grey;font-size: 10px;color: red;"> &#8377; {{ ($product->price)*1.2 }} </strike> </h5>
			    					
			    					@if(Auth::check())
			    					<a href="addItem/{{ $product->id }}" class="btn text-light w-100" style="background-color: #F2A301;">Add to Cart  <span class="ml-2 fa fa-shopping-cart"></span> </a>

			    					@else

			    					<a href="./login" class="btn text-light w-100" style="background-color: #F2A301;">Log-in to Shop  <span class="ml-2 fa fa-sign-in-alt"></span> </a>
			    					@endif
			    					
			  					</div>
			  			</div>

				</div>	
			</div>

			@endforeach
			

		</div>

	@else
		<div class="w-75 ml-auto mr-auto d-flex justify-content-center align-items-center mt-5 mb-5" style="position: relative;height: 200px;background-color: white;border-radius: 30px;">
			<h1 style="font-size: 50px;">Products Coming Soon......!!!<span class="fa fa-smile"></span></h1>		
			</div>

	@endif

	
 
	
			 
	</div>	
</div>

@endsection