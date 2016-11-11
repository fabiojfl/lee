@extends('store.istore')
@section('content')
		
		<div class="col-md-9">
			<h3 class="text-left">Destaques</h3>
			<div class="mid-popular">
				@include('store.partial.product', ['products'=>$pFeatured])
			</div>
			<!--<h3 class="text-left">Recomendados</h3> -->
			<div class="mid-popular">
				@include('store.partial.product', ['products'=>$pRecommended])
			</div>
			<div class="clearfix"></div>
		</div>
@stop
@section('categories')
    @include('store.partial.categories')
@stop
