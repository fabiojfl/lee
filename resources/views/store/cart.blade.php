@extends('store.store')
@section('content')
    <section id="cart_items">
        <div class="container">
            <div class="table-condensed cart_info">
                <table class="table table-condensed">
                    <thead>
                    <tr class="cart_menu">
                        <td class="image">Item</td>
                        <td class="description"></td>
                        <td class="price">Valor</td>
                        <td class="price">Quantidade</td>
                        <td class="price">Total</td>
                        <td class="price" colspan="2"></td>
                    </tr>
                    </thead>
                    <tbody>
                    @forelse($cart->all() as $k=>$item)
                        <tr>
                            <td class="cart_product">
                                <a href="{{route('store.product',['id' => $k])}}">
                                    imagem
                                </a>
                            </td>
                            <td class="cart_description">
                                <h4>
                                    <a href="#">{{$item['name']}}</a>
                                    <p>Codigo {{ $k }}</p>
                                </h4>
                            </td>
                            <td class="cart_price">

                            R$ {{number_format($item['price'],2 , "," , ".")}}

                            </td>

                            <td class="cart_quantity text-center">

                                {!! Form::open(['route'=>['store.cart.update', $k], 'method'=>'put']) !!}
                                <div class="input-group" style="width: 120px">
                                    {!! Form::text('qtd', $item['qtd'], ['class'=>'form-control']) !!}
                                    <span class="input-group-btn">
                                        {!! Form::submit('Alterar', ['class'=>'btn btn-default']) !!}
                                      </span>
                                </div><!-- /input-group -->
                                {!! Form::close() !!}
                            </td>

                            <td class="cart_total">

                                <p class="cart_total_price">R$ {{number_format($item['price'],2 , "," , ".") * $item['qtd']}}</p>
                     </td>
                            <td class="cart_delete">
                                <a href="{{route('store.cart.destroy', ['id'=>$k ])}}" class="cart_quantity_delete">DELETE</a>
                            </td>
                            <td class="cart_edit">

                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td class="text-center" colspan="7">
                                Carrinho de compras vazio.
                            </td>
                        </tr>
                    @endforelse
                    <tr class="cart_menu">
                        <td colspan="6">
                            <div class="pull-right">
                                <span style="margin-right: 40px">

TOTAL:                                R$ {{number_format($cart->getTotal(),2 , "," , ".")}}
                         </span>

                                <a href="{{ route('store.checkout.place') }}" class="btn btn-success">Fechar a conta</a>
                            </div>
                        </td>
                    </tr>
                    </tbody>
                </table>

            </div>
        </div>
    </section>
@stop
