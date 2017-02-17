@extends('store.store')
@section('content')
    <div class="container">
        <h1>Lista de Características do produto:&nbsp <b></b></h1>
        <hr>
        <div class="form-group">
            <a href="{{route('admin.products.create_feature', ['id'=>$product->id])}}" class="btn btn-primary">Nova Característica</a><!-- /.box-header -->
        </div>
        <table class="table">
            <tr>
                <th>ID</th>
                <th>Nome</th>
            </tr>
            @foreach($product->features as $feature)
                <tr>
                    <td>{{$feature->id}}</td>
                    <td>{{$feature->name}}</td>
                    <td>
                        <a href="{{route('admin.products.features.destroy', ['id'=>$feature->id])}}">
                            <span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
                        </a>
                    </td>
                </tr>
            @endforeach
        </table>
        <a href="{{ route('admin.products.index') }}" class="btn btn-default">Voltar</a>
    </div>

@endsection
