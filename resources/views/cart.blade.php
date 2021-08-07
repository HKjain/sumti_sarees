@extends ('layouts.app')

@section('title', 'Shopping Cart')

@section('content')

	@if(!(session()->get("count")>0))
			<div class="container p-5" style="background-color: white;border-radius: 30px;margin-top: 8rem;margin-bottom: 8rem;">
				<span class="fa fa-shopping-bag d-flex justify-content-center" style="font-size: 50px;"></span>
				<h1 class="text-center d-flex justify-content-center" style="font-size: 50px;">Your Bag is Empty</h1>
				<a href="./shop" class="btn text-light d-flex justify-content-center" style="background-color: orange;">Shop Now</a>
			</div>
	@else
		<div class="container bg-light pt-2 pb-2" style="border-radius: 10px;">
		<h1 class="text-center" style="font-size: 50px;color: #F5AC01;">Shopping Bag <span class="fa fa-shopping-bag" style=""></span></h1>
		<div class="row mt-4">
			<div class="col-md-8 p-3" style="border-right: 1px solid #728287;">
				
				<div class="mt-2 mb-2">
					<div style="width: 100%;" class="row">
						<div class="col-md-3 getAllCenter">
							<h5>Product Image</h5>
						</div>
						<div class="col-md-4 getAllCenter">
							<h5>Product Description</h5>
						</div>
						<div class="col-md-2 getAllCenter">
							<h5>Quantity</h5>
						</div>
						<div class="col-md-2 getAllCenter">
							<h5>Price</h5>
						</div>
						<div class="col-md-1 getAllCenter">
							
						</div>
					</div>
				</div>

				@foreach($customItems as $item)

				<div>
					<div style="width: 100%;" class="row">
						<div class="col-md-3 p-1 getAllCenter">
							<img src='../storage/app/public/{{ $item->image }}' alt="" class="w-75">
						</div>
						<div class="col-md-4 getAllCenter">
							<h5>Chiffon</h5>
						</div>
						<div class="col-md-2 getAllCenter">
							<h5>{{ $item->quantity }}</h5>
						</div>
						<div class="col-md-2 getAllCenter">
							<h5>Price</h5>
							
						</div>
						<div class="col-md-1 getAllCenter">
							<h5>Close</h5>
						</div>
					</div>
					<hr width="50%" color="#F5AC01">
				</div>

				@endforeach

			</div>
			<div class="col-md-4 p-3">
				<h1>Right</h1>
			</div>
		</div>
		</div>
	@endif
@endsection