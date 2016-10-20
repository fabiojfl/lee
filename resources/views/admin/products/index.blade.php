@extends('store.store')
@section('content')
        @can('admin')
        <div class="col-md-9 contact-top ">
                <h1> Produtos e Imagens</h1>
                <hr>
                <div class="form-group">
                        <a href="{{route('admin.products.create')}}" class="btn btn-primary">Criar novo produto</a><!-- /.box-header -->
                </div>
                <br>
                <div class="bs-example" data-example-id="simple-table">
                        <table class="table">
                                <tr>
                                        <th>ID</th>
                                        <th>Categoria</th>
                                        <th>Nome</th>
                                        <th>Volor da unidade</th>
                                        <th>Ações</th>
                                </tr>
                                @foreach($products as $product)
                                        <tr>
                                                <td>{{$product->id}}</td>
                                                <td>{{$product->category->name}}</td>
                                                <td>{{$product->name}}</td>
                                                <td><b>R$</b>&nbsp; {{number_format($product->price,2 , "," , ".")}}</td>
                                                <td>
                                                        <a href="{{ route('admin.products.edit',['id'=> $product->id]) }}">
                                                                <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                                                        </a>
                                                        <a href="{{ route('admin.products.images',['id'=> $product->id]) }}">
                                                                <span class="glyphicon glyphicon-picture" aria-hidden="true"></span>
                                                        </a>
                                                        <a href="{{ route('admin.products.destroy',['id'=> $product->id]) }}">
                                                                <span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
                                                        </a>
                                                </td>
                                        </tr>
                                @endforeach
                        </table>
                        {!! $products->render() !!}
                        <div class="clearfix"> </div>
                </div>
        </div>

@section('categories')
        @include('store.partial.categories')
@stop
@endsection
@endcan
