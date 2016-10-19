@extends('store.store')
@section('content')
    @can('admin')
    <div class="col-md-9 contact-top ">
        <h1> Categorias</h1>
        <hr>
        <div class="form-group">
            <a href="{{route('admin.categories.create')}}" class="btn btn-primary">Criar nova categoria</a><!-- /.box-header -->
        </div>
        <br>
        <div class="bs-example" data-example-id="simple-table">
            <table class="table">
                <tr>
                    <th>Id Categoria</th>
                    <th>Nome da Categoria</th>
                    <th>Descrição da Categoria</th>
                    <th>Ações</th>
                </tr>
                @foreach($categories as $category)
                    <tr>
                        <td>{{$category->id}}</td>
                        <td>{{$category->name}}</td>
                        <td>{{$category->description}}</td>
                        <td>
                            <a href="{{ route('admin.categories.destroy',['id'=> $category->id]) }}">
                                <span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
                            </a>
                            <a href="{{ route('admin.categories.edit',['id'=> $category->id]) }}">
                                <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                            </a>
                        </td>
                    </tr>
                @endforeach
            </table>
            {!! $categories->render() !!}
            <div class="clearfix"> </div>
        </div>
    </div>

@section('categories')
    @include('store.partial.categories')
@stop
@endsection
@endcan

