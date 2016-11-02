@extends('store.store')
@section('content')
<!-- 
<div class="container">
	<div class="check-out">
	<div class="bs-example4" data-example-id="simple-responsive-table">
    <div class="table-responsive">
    <table class="table-heading simpleCart_shelfItem">
		  <tr>
			<th class="table-grid">Item</th>
					
			<th>Prices</th>
			<th >Delivery </th>
			<th>Subtotal</th>
		  </tr>
		  <tr class="cart-header">

			<td class="ring-in"><a href="single.html" class="at-in"><img src="images/ch.jpg" class="img-responsive" alt=""></a>
			<div class="sed">
				<h5><a href="single.html">Sed ut perspiciatis unde</a></h5>
				<p>(At vero eos et accusamus et iusto odio dignissimos ducimus ) </p>
			
			</div>
			<div class="clearfix"> </div>
			<div class="close1"> </div></td>
			<td>$100.00</td>
			<td>FREE SHIPPING</td>
			<td class="item_price">$100.00</td>
			<td class="add-check"><a class="item_add hvr-skew-backward" href="#">Add To Cart</a></td>
		  </tr>
	</table>
	</div>
	</div>
	<div class="produced">
	<a href="single.html" class="hvr-skew-backward">Produced To Buy</a>
	 </div>
    </div>
</div>
 -->

<div class="container">
	<div class="check-out">
	<div class="bs-example4" data-example-id="simple-responsive-table">
	    <div class="table-responsive">
		    <table class="table-heading simpleCart_shelfItem">
		    @forelse($cart->all() as $k=>$item)
				  <tr>
					<th class="table-grid">Item</th>							
					<th>Valor Unidade</th>
					<th >Quantidade</th>
					<th>Subtotal</th>
				  </tr>
				  <tr class="cart-header">
					<td class="ring-in"><a href="single.html" class="at-in"><img src="images/ch.jpg" class="img-responsive" alt=""></a>
					<div class="sed">
						<h5><a href="{{route('store.product', ['id' => $k ])}}">{{$item['name']}}</a></h5>
						<p>(At vero eos et accusamus et iusto odio dignissimos ducimus ) </p>
						

					</div>
					<!-- 
					<div class="clearfix"> </div>
					<div class="close1"> </div>
					 -->
					</td>
					<td> R$ {{number_format($item['sale'],2 , "," , ".")}}</td>
					<td>
					 {!! Form::open(['route'=>['store.cart.update', $k], 'method'=>'put']) !!}
                    	<div class="input-group" style="width: 120px">
							<?php

							$qitem = $item['qtd'];

							if ($qitem > 15)
							{
								echo "Pedimos desculpas. Porque, temos disponível apenas a quantidade de 15 produtos";

							} else{

							?>
								{!! Form::text('qtd', $item['qtd'], ['class'=>'form-control']) !!}
								<span class="input-group-btn">
								{!! Form::submit('Alterar', ['class'=>'btn btn-default']) !!}
								</span>

							<?php } ?>






						</div><!-- /input-group -->
					{!! Form::close() !!}
					
					</td>
					<td class="item_price">R$ {{number_format($item['sale'],2 , "," , ".") * $item['qtd']}}</td>
					
				  </tr>
				   @empty
                        <tr>
                            <td class="text-center" colspan="7">
                                Carrinho de compras vazio.
                            </td>
                        </tr>
                    @endforelse
			</table>
		</div>
	</div>
	
	<div class="price_single ">
		<span class="reducedfrom item_price">TOTAL: R$ {{number_format($cart->getTotal(),2 , "," , ".")}}</span>
			<!--<a href="#">click for offer</a>-->
			<div class="clearfix"></div>
		</div>
    </div>
    <br>
    <div class="produced">
		<a href="{{ route('store.checkout.place') }}" class="btn hvr-skew-backward">Fechar a conta</a>
	</div>
	
</div>
  
@stop
