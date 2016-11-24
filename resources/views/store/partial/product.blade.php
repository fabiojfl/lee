@foreach($products as $product)
<div class="col-md-4 item-grid1 simpleCart_shelfItem">
					<div class=" mid-pop">
						<div class="pro-img">
						@if(count($product->images))
	                    	<img src="{{url('uploads/'.$product->images->first()->id.'.'.$product->images->first()->extension)}}" alt="" class="img-responsive"/>
	                	@else
	                    	<img src="{{url('images/sem-imagem.jpg')}}" alt="" class="img-responsive"/>
	                	@endif
							<div class="zoom-icon ">
							@if(count($product->images))	
								<a class="picture" href="{{url('uploads/'.$product->images->first()->id.'.'.$product->images->first()->extension)}}" rel="title" class="b-link-stripe b-animate-go  thickbox"><i class="glyphicon glyphicon-search icon"></i></a>
							@else	
								<a class="picture" href="{{url('images/sem-imagem.jpg')}}" rel="title" class="b-link-stripe b-animate-go  thickbox"><i class="glyphicon glyphicon-search icon"></i></a>
							@endif	
								<a href="{{route('store.product', ['id' => $product->id])}}"><i class="glyphicon glyphicon-menu-right icon"></i></a>
							</div>
						</div>
						<div class="mid-1">
						<div class="women">
						<div class="women-top">
							<span>{{$product->category->name}}</span>
							<h6><a href="{{route('store.product', ['id' => $product->id])}}">{{$product->name}}</a></h6>
							</div>
							<div class="img item_add">
								<a href="{{route('store.cart.add',['id' => $product->id])}}"><img src="{{ asset('images/ca.png') }}" alt=""></a>
							</div>
							<div class="clearfix"></div>
							</div>
							<div class="mid-2">
								<p ><label>R$ {{number_format($product->price,2 , "," , ".")}}</label><em class="item_price">R$ {{number_format($product->sale,2 , "," , ".")}}</em></p>
								  <div class="block">
								  <!-- comentarios -->
									<!--  <div class="starbox small ghosting"> </div>-->
								</div>
								
								<div class="clearfix"></div>
							</div>
							
						</div>
					</div>
					</div>
@endforeach
<div class="clearfix"></div>
