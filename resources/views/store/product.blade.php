@extends('store.store')
@section('content')
	<div class="single">
		<div class="container">
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
						<p class="in-para">{{$product->mainsentence}}.</p>
						<div class="mid-2">
							<p>
								<label>R$ {{number_format($product->price,2 , "," , ".")}}</label>
							</p>
							<div class="clearfix"></div>
						</div>
						<div class="price_single">
							<span class="reducedfrom item_price">R$ {{number_format($product->sale,2 , "," , ".")}}</span>
							<div class="clearfix"></div>
						</div>
						<h4 class="quick">Pequena DescriÃ§Ã£o:</h4>
						<p class="quick_desc"> {{$product->quickoverview}} ...</p>
						<!--
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
                        -->
						<!--quantity-->
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
					</div>
				</div><!-- col-md-7 single-top-in -->
				<div class="clearfix"> </div>
				<!---->

				@foreach($features as $feature)

					<B>{{$feature->title}}</B>
					<BR/>
					{{$product->description}}
					<BR/>
				@endforeach

			</div><!-- end tab-head-->

			<div class="col-md-12 content-mid">
				<h3>Produtos Relacionados</h3>
				<label class="line"></label>
			</div>
			<br/>
			<div class="col-md-12 content-mid">
				<div class="mid-popular">



					@foreach($relatedsProducts as $related)
						<div class="col-md-4 item-grid1 simpleCart_shelfItem">
							<div class=" mid-pop">
								<div class="pro-img">
									@if(count($related->images))
										<img src="{{url('uploads/'.$related->images->first()->id.'.'.$related->images->first()->extension)}}" alt="" class="img-responsive"/>
									@else
										<img src="{{url('images/sem-imagem.jpg')}}" alt="" class="img-responsive"/>
									@endif
									<div class="zoom-icon ">
										@if(count($related->images))
											<a class="picture" href="{{url('uploads/'.$related->images->first()->id.'.'.$related->images->first()->extension)}}" rel="title" class="b-link-stripe b-animate-go  thickbox"><i class="glyphicon glyphicon-search icon"></i></a>
										@else
											<a class="picture" href="{{url('images/sem-imagem.jpg')}}" rel="title" class="b-link-stripe b-animate-go  thickbox"><i class="glyphicon glyphicon-search icon"></i></a>
										@endif
										<a href="{{route('store.product', ['id' => $related->id])}}"><i class="glyphicon glyphicon-menu-right icon"></i></a>
									</div>
								</div>
								<div class="mid-1">
									<div class="women">
										<div class="women-top">
											<span>{{$related->category->name}}</span>
											<h6><a href="{{route('store.product', ['id' => $related->id])}}">{{$related->name}}</a></h6>
										</div>
										<div class="img item_add">
											<a href="{{route('store.cart.add',['id' => $related->id])}}"><img src="{{ asset('images/ca.png') }}" alt=""></a>
										</div>
										<div class="clearfix"></div>
									</div>
									<div class="mid-2">
										<p><label>R$ {{number_format($related->price,2 , "," , ".")}}</label><em class="item_price">R$ {{number_format($related->sale,2 , "," , ".")}}</em></p>
										<div class="block">
											<div class="starbox small ghosting"> </div>
										</div>
										<div class="clearfix"></div>
									</div>
								</div>
							</div>
						</div>
					@endforeach
				</div>
			</div>

			<br>

		</div>
		<!-- fim Produto relacionado -->
		<!-- <div class="col-md-3 product-bottom product-at"> -->
		@section('categories')
		@include('store.partial.categories')
		@stop
		@stop
				<!--</div> <!-- col-md-3 product-bottom product-at-->
		<div class="clearfix"> </div>
	</div> <!-- end container -->
	</div> <!-- end single -->