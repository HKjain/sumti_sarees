@extends ('layouts.app')

@section('title', 'Contact')

@section('content')
<div class="container my-4 w-75" style="margin: auto;" data-aos="fade-up">
	
<h1 class="myWhiteText text-center">CONTACT US HERE</h1>

@if(count($errors) > 0)
	@foreach($errors -> all() as $error)
		<div class="alert alert-danger">
			{{ $error }}
		</div>
	@endforeach
@endif

@if(session()->has('success'))
	<div class="alert alert-success">
		{{ session('success') }}
	</div>
@endif


{!! Form::open( ['url' => 'contact/submit', 'class' => 'myWhiteText'] ) !!}
	<div class="form-group">
		{{ Form::label('name', 'Name') }}
		{{ Form::text('Name','',['class' => 'form-control' , 'placeholder' => 'Name']) }}
	</div>
	
	<div class="form-group">
		{{ Form::label('email', 'E-mail Address') }}
		{{ Form::email('Email','',['class' => 'form-control' , 'placeholder' => 'E-mail Address']) }}
	</div>

	<div class="form-group">
		{{ Form::label('message', 'Message') }}
		{{ Form::textarea('Message','',['rows' => '5','class' => 'form-control' , 'placeholder' => 'Enter your Message']) }}
	</div>

	<div>
		{{ Form::submit('Submit', ['class' => 'btn btn-lg btn-primary']) }}
	</div>
{!! Form::close() !!}

</div>

@include('inc.locateMap')


@endsection