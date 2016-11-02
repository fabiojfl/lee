<!--
'id'
'name'
'price'
'sale'
'qtd'
'total'
'description'
-->


<!--

-->
@extends('store.store')
@section('content')
    @can('admin')
    <div class="col-md-9 contact-top ">
        <h1> Produtos Disponíveis em Estoque</h1>
        <hr>
        <div class="form-group">
            <a href="{{route('admin.stocks.create')}}" class="btn btn-primary">Adicionar um novo produto no estoque</a><!-- /.box-header -->
        </div>
        <br>
        <div class="bs-example" data-example-id="simple-table">
            <table class="table">
                <tr>
                    <th>Id</th>
                    <th>Nome</th>
                    <th>Preço</th>
                    <th>Promoção</th>
                    <th>QTD</th>
                    <th>Total</th>
                </tr>
                @foreach($stocks as $stock)
                    <tr>
                        <td>{{$stock->id}}</td>
                        <td>{{$stock->name}}</td>
                        <td>{{$stock->price}}</td>
                        <td>{{$stock->sale}}</td>
                        <td>{{$stock->qtd}}</td>
                        <td>{{$stock->total}}</td>
                        <td>
                            <a href="{{ route('admin.stocks.destroy',['id'=> $stock->id]) }}">
                                <span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
                            </a>
                            <a href="{{ route('admin.stocks.edit',['id'=> $stock->id]) }}">
                                <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                            </a>
                        </td>
                    </tr>
                @endforeach
            </table>
            {!! $stocks->render() !!}
            <div class="clearfix"> </div>
        </div>
    </div>
@section('categories')
    @include('store.partial.categories')
@stop
@endsection
@endcan

