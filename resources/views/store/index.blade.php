@extends('store.istore')
@section('content')
		<div class="col-md-9 content-mid">
			<h3>Destaques</h3>
			<label class="line"></label>
			<div class="mid-popular">
				@include('store.partial.product', ['products'=>$pFeatured])
			</div>
			<!--
			<h3>Recomendados</h3>
			<label class="line"></label>
			-->
			<div class="mid-popular">
				@include('store.partial.product', ['products'=>$pRecommended])
			</div>
			<div class="clearfix"></div>
		</div>
@stop
@section('categories')
    @include('store.partial.categories')
@stop
