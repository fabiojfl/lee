@extends('store.store')
@section('content')

<div class="contact">
				<div class="contact-form">
					<div class="container">
					<div class="col-md-6 contact-left">
						<h3>Atendimento</h3>
						<p>Deixe seu email com a sua mensagem e entraremos em contato assim que poss&iacute;vel</p>
					
			
					<div class="address">
						<!-- endereco -->
						<!--
						<div class=" address-grid">
							<i class="glyphicon glyphicon-map-marker"></i>
							<div class="address1">
								<h3>Address</h3>
								<p>Lorem ipsum dolor,
								TL 19034-88974</p>
							</div>
							<div class="clearfix"> </div>
						</div>
						-->
						<!-- fim endereco -->
						<!-- endereco -->

						
						<div class=" address-grid ">
							<i class="glyphicon glyphicon-phone"></i>
							<div class="address1">
							<h3>Celular:<h3>
								<p>(61)84701480</p>
							</div>
							<div class="clearfix"> </div>
						</div>
						

						<!-- fim endereco -->
						<div class=" address-grid ">
							<i class="glyphicon glyphicon-envelope"></i>
							<div class="address1">
							<h3>Email:</h3>
								<p><a href="mailto:info@example.com"> contato@leelee.com.br</a></p>
							</div>
							<div class="clearfix"> </div>
						</div>
						
						<div class=" address-grid ">
							<i class="glyphicon glyphicon-bell"></i>
							<div class="address1">
								<h3>Hor&aacute;rio de funcionamento:</h3>
								<p>De segunda a sexta-feira: das 14 &agraves 18h</p>
							</div>
							<div class="clearfix"> </div>
						</div>
</div>
				</div>
				<div class="col-md-6 contact-top">
					<h3>Gostaria de entrar em contato?</h3>
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
					{!! Form::open(['route'=>'store.pages.store','method'=>'post']) !!}
				
						<div>
							<span>Seu nome </span>		
							{!! Form::text('name', null, ['class'=>'form-control']) !!}						
						</div>
						<div>
							<span>Seu Email </span>		
							{!! Form::text('email', null, ['class'=>'form-control']) !!}						
						</div>
						<div>
							<span>Assunto</span>		
							{!! Form::text('subject', null, ['class'=>'form-control']) !!}						
						</div>
						<div>
							<span>Sua mensagem</span>		
							{!! Form::textarea('description', null, ['class'=>'form-control']) !!}	
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

