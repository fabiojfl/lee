@extends('store.store')
@section('content')
    @can('admin')
    <div class="col-md-9 contact-top ">
            <h1> Sub Categorias</h1>
        <hr>
        <div class="form-group">
            <a href="{{route('admin.sub_categories.create')}}" class="btn btn-primary">Criar nova sub categoria</a><!-- /.box-header -->
        </div>
        <br>
        <div class="bs-example" data-example-id="simple-table">
            <table class="table">
                <tr>
                    <th>Id SubCategoria</th>
                    <th>Nome da Categoria</th>
                    <th>Nome da SubCategoria</th>
                    <th>Descrição da SubCategoria</th>
                    <th>Ações</th>
                </tr>
                @foreach($subCategories as $sub_category)
                    <tr>
                    <td>{{$sub_category->id}}</td>
                        <td>{{$sub_category->category->name}}</td>
                        <td>{{$sub_category->name}}</td>
                        <td>{{$sub_category->description}}</td>
                        <td>
                        <a href="{{ route('admin.sub_categories.destroy',['id'=> $sub_category->id]) }}">
                            <span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
                        </a>
                        <a href="{{ route('admin.sub_categories.edit',['id'=> $sub_category->id]) }}">
                            <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                        </a>
                        </td>
                    </tr>
                @endforeach
            </table>
        {!! $subCategories->render() !!}
            <div class="clearfix"> </div>
        </div>
     </div>

@section('categories')
    @include('store.partial.categories')
@stop
@endsection
@endcan

