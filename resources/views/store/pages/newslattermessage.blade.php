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
			<div class="profile-userbuttons">
				<div class="alert alert-success" role="alert">
				<strong>Obrigado!</strong> Em breve você receberá promoções de novos produtos, novidades, notícias entre outros.
				</div>
				<a href="{{url('/')}}" class="btn btn-success btn-sm " role="button" aria-pressed="true">Continuar Comprando</a>
			</div>
		</div>
		<div class="clearfix"></div>
		</div>
	</div>
</div>
@stop

