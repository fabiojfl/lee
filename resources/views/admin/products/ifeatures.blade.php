@extends('store.store')
@section('content')
    <div class="container">
        <h1>{{$feature->title}}</h1>
        <hr>

        <table class="table">
            <tr>
                <th>ID</th>
                <th>Nome</th>
            </tr>
            @foreach($features as $feature)
                <tr>
                    <td>{{$feature->id}}</td>
                    <td>{{$feature->text}}</td>
                    <td>
                        <a href="{{route('admin.products.itemFeatures.destroy', ['id'=>$feature->id])}}">
                            <span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
                        </a>
                    </td>
                </tr>
            @endforeach
        </table>
        <a href="{{ route('admin.products.index') }}" class="btn btn-default">Voltar</a>
    </div>

@endsection
