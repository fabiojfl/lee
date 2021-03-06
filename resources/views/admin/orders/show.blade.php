@extends('store.store')
@section('content')
	@can('admin')
	<div class="col-md-9 contact-top ">
		<h3>Super Administrador</h3>
		<h2>Olá,{{ Auth::user()->name }}.</h2>
		<hr>
			<div class="clearfix"> </div>
	</div>
	@section('categories')
		@include('store.partial.categories')
	@stop
@endcan
@can('user')
	<!--content-->
<div class="container">
	<div class="page-header-admin-client page-header">
        <h2>Minha Conta</h2>
    </div>
	<div class="page-header-admin-client">
        <h3>Pedido</h3>
    </div>
	
	<p>Situação:&nbsp{{$orderItem->order->status}}</p>
		@foreach($orderItems as $Items)
			<p> Total do valor da compra:&nbsp R$&nbsp{{$Items->sale }}</p>
		@endforeach
		<p><a href="{{route('home')}}"><span>Voltar</span></a></p>
	<div class="page">
		<div class="grid_3 grid_4">
			<div class="page-header-admin-client page-header">
				<h2>Dados do Usuário</h2>
			</div>
			<div class="row">
				<div class="col-sm-8 page-header-admin-client">
					<h3>Perfil</h3>
				<h4>Olá,{{ Auth::user()->name }}.</h4>
					<p>{{ Auth::user()->email }}</p>
					<h3>Endereço</h3>
						<p>{{$user->address . ", " . $user->number }}</p>
					<p>{{$user->district}}</p>
					<p>{{$user->city." - ". $user->state}}</p>
					<br>
					<!--
					<p>
						<a class="btn btn-default btn-lg" href="#">Call to Action &raquo;</a>
					</p>
					-->
				</div>
				<div class="col-sm-4 page-header-admin-client">
					<h4>Menu de Opções</h4>

					<!--  <p><a href="{{ route('admin.users.edit', ['id'=>$user->id]) }}"><span>Editar Perfil</span></a></p> -->
					<p><a href="{{route('admin.newsletters.create')}}"><span>Receber novidades</span></a></p>
					<p><a href="{{route('admin.supports.create')}}"><span>Atendimento</span></a></p>
				</div>
			</div> <!-- //.row -->
    	</div><!-- //Page -->
	</div><!--//Container-->
	@endcan
@endsection
