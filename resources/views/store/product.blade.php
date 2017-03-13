@extends('store.pstore')
@section('content')
<div class="col-md-9">
	<div class="col-md-5 grid">
		<div class="flexslider">
			<ul class="slides">
				@if(count($product->images))
					@foreach($product->images as $images)
						<li data-thumb="{{ url('uploads/'.$images->id.'.'.$images->extension) }}">
							<div class="thumb-image"> <img src="{{ url('uploads/'.$images->id.'.'.$images->extension) }}" data-imagezoom="true" class="img-responsive"> </div>
						</li>
					@endforeach
				@else
					<li data-thumb="{{ url('images/sem-imagem.jpg') }}">
						<div class="thumb-image">  <img src="{{url('images/sem-imagem.jpg')}}" data-imagezoom="true" class="img-responsive"> </div>
					</li>
				@endif
			</ul>
		</div>
	</div><!-- end col-md-5 grid-->
	<div class="col-md-7 single-top-in">
		<div class="span_2_of_a1 simpleCart_shelfItem">
		<h3>{{$product->name}}</h3>
		<p class="in-para"> <?php echo substr($product->mainsentence, 0 , 55); ?> </p>
			<div class="price_single">
				<span class="reducedfrom item_price">R$ {{number_format($product->sale,2 , "," , ".")}}</span>
				<!--<a href="#">click for offer</a>-->
				<div class="clearfix"></div>
			</div><!-- end price_single-->
		<h4 class="quick">Visão Rápida:</h4>

			<p class="quick_desc">{{$product->quickoverview}}</p>
		<!--
		<div class="wish-list">
			<ul>
				<li class="wish"><a href="#"><span class="glyphicon glyphicon-check" aria-hidden="true"></span>Add to Wishlist</a></li>
				<li class="compare"><a href="#"><span class="glyphicon glyphicon-resize-horizontal" aria-hidden="true"></span>Add to Compare</a></li>
			</ul>
		</div>
		wish-list -->
		<!--
		<div class="quantity">
		<div class="quantity-select">
		<div class="entry value-minus">&nbsp;</div>
		<div class="entry value"><span>1</span></div>
		<div class="entry value-plus active">&nbsp;</div>
		</div>
		</div>
			quantity -->
		<script>
		$('.value-plus').on('click', function(){
		var divUpd = $(this).parent().find('.value'), newVal = parseInt(divUpd.text(), 10)+1;
		divUpd.text(newVal);
		});

		$('.value-minus').on('click', function(){
		var divUpd = $(this).parent().find('.value'), newVal = parseInt(divUpd.text(), 10)-1;
		if(newVal>=1) divUpd.text(newVal);
		});
		</script>
		<!--quantity-->

			<a href="{{route('store.cart.add',['id' => $product->id])}}" class="add-to item_add hvr-skew-backward">Adicionar no carrinho</a>

		<div class="clearfix"> </div>



		</div><!-- end span_2_of_a1 simpleCart_shelfItem -->


	</div><!-- end col-md-7 single-top-in -->
	<div class="clearfix"> </div>
	<br><br>
	<h1>Descrição</h1>

	<p class="quick_desc">{{$product->description}}</p>

	@foreach($product->features as $feature)
		<br>
		<h1>{{$feature->title}}</h1>
		<p class="quick_desc">{{$feature->description}}</p>


		<div class="facts">
			<p ></p>
			<ul>
				<li><span class="glyphicon glyphicon-ok" aria-hidden="true"></span>Research</li>
				<li><span class="glyphicon glyphicon-ok" aria-hidden="true"></span>Design and Development</li>
				<li><span class="glyphicon glyphicon-ok" aria-hidden="true"></span>Porting and Optimization</li>
				<li><span class="glyphicon glyphicon-ok" aria-hidden="true"></span>System integration</li>
				<li><span class="glyphicon glyphicon-ok" aria-hidden="true"></span>Verification, Validation and Testing</li>
				<li><span class="glyphicon glyphicon-ok" aria-hidden="true"></span>Maintenance and Support</li>
			</ul>
		</div><!-- end facts -->

	@endforeach
	<!--facts-->




</div><!-- col-md-9 -->

<div class="col-md-3 product-bottom product-at">
	@section('categories')
		@include('store.partial.categories')
	@stop
</div>
@endsection