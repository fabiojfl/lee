@extends('store.store')
@section('content')
<div class="contact">
	<div class="contact-form">
		<div class="container">
			<div class="col-md-6 contact-left">
			<h3>Deixe o seu email e receba:</h3>
			<p></p>
				<div class="address">
					<div class=" address-grid ">
					<i class="glyphicon glyphicon-ok"></i>
						<div class="address1">
							<h3>Promoções</h3>
						</div>
					</div>
					<div class=" address-grid ">
					<i class="glyphicon glyphicon-ok"></i>
						<div class="address1">
							<h3>Dicas</h3>
						</div>
					</div>
					<div class=" address-grid ">
					<i class="glyphicon glyphicon-ok"></i>
						<div class="address1">
							<h3>Sorteio de produtos</h3>
						</div>
					</div>
					<div class=" address-grid ">
					<i class="glyphicon glyphicon-ok"></i>
						<div class="address1">
							<h3>Novidades</h3>
						</div>
					</div>
				</div>
			</div>
		<div class="col-md-6 contact-top">
		<h3>Adcione o seu email aqui.</h3>
		@if(Session::has('flash_message'))
		<div class="alert alert-success">
		{{ Session::get('flash_message') }}
		</div>
		@endif
		@if($errors->any())
		@foreach($errors->all() as $error)
		<div class="alert alert-danger">
		<strong>{{$error}}</strong>
		</div>
		@endforeach
		@endif
		{!! Form::open(['route'=>'store.pages.newslatterstore','method'=>'post']) !!}
		<div>
		<span>Email </span>
		
		{!! Form::hidden('user_id', 1) !!}
		{!! Form::text('name', null, ['class'=>'form-control']) !!}
		</div>
		<label class="hvr-skew-backward">
		{!! Form::submit('Enviar') !!}
		</label>
		{!! Form::close() !!}
		
		
		 		</div>
		<div class="clearfix"></div>
		</div>
	</div>
</div>
@stop


