@extends('store.store')
@section('content')

	<div class="single">

		<div class="container">
			<div class="col-md-9">
				<div class="col-md-12 single-top-in">
					<div class="span_2_of_a1 simpleCart_shelfItem">
						@can('user')
						<h3>Lista de pedidos</h3>
						<p class="in-para"> Olá,<b>{{ Auth::user()->name }}.</b> Veja sua lista de pedidos.</p>
						<div class="bs-example" data-example-id="simple-table">
							<table class="table">
								<tr>
									<th>Data e Horário</th>
									<th>Name</th>
									<th>Status do Pedido</th>
									<th>Visualizar Pedido</th>
								</tr>
								@foreach($orders as $order)
									<tr>
										<td>{{$order->updated_at}}</td>
										<td>{{$order->user->name}}</td>
										<td>{{$order->status}}</td>
										<td class="text-center">

											<div class="wish-list-table">
												<ul>
													<li class="wish"><a href="{{ route('admin.orders.show',['id'=> $order->id]) }}"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span>Visualizar pedido</a></li>
												</ul>
											</div>
										</td>
									</tr>
								@endforeach
							</table>
						</div>
						@endcan
						@can('admin')
						<h3>Super Administrador</h3>
						<p class="in-para"> Olá,<b>{{ Auth::user()->name }}.
						@endcan
<!--
						<div class="price_single">
							<span class="reducedfrom item_price">$140.00</span>
							<a href="#">click for offer</a>
							<div class="clearfix"></div>
						</div>
						<h4 class="quick">Quick Overview:</h4>
						<p class="quick_desc"> Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum. Typi non habent claritatem insitam; es</p>
						<div class="wish-list">
							<ul>
								<li class="wish"><a href="#"><span class="glyphicon glyphicon-check" aria-hidden="true"></span>Add to Wishlist</a></li>
								<li class="compare"><a href="#"><span class="glyphicon glyphicon-resize-horizontal" aria-hidden="true"></span>Add to Compare</a></li>
							</ul>
						</div>
						<div class="quantity">
						<div class="quantity-select">
								<div class="entry value-minus">&nbsp;</div>
								<div class="entry value"><span>1</span></div>
								<div class="entry value-plus active">&nbsp;</div>
							</div>
						</div>
						<!--quantity-->

								<div class="price_single col-lg-4">
									<h4 class="quick">Perfil</h4>
									</div>


						<!--quantity-->

						<!--<a href="#" class="add-to item_add hvr-skew-backward">Add to cart</a>-->
									<div class="clearfix"> </div>
					</div>


				</div>
				<div class="price_single col-lg-4">
					<h4 class="quick">Perfil</h4>
				</div>
				<!---->

				<!---->
			</div>
			<!----->

			@section('categories')
				@include('store.partial.categories')
			@stop




	<!--//content-->
	<!--//footer-->




@endsection
