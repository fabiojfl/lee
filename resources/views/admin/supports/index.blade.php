@extends('store.store')
@section('content')
    @can('admin')
    <div class="col-md-9 contact-top ">
        <h1> Categorias</h1>
        <hr>
        <!--
        <div class="form-group">
            <a href="" class="btn btn-primary">Responder Usu</a>
        </div>
        -->
        <br>
        <div class="bs-example" data-example-id="simple-table">
            <table class="table">
                <tr>
                    <th>data</th>
                    <th>Id</th>
                    <th>Nome</th>
                    <th>Email</th>
                    <th>Ações</th>
                </tr>
                @foreach($supports as $support)
                    <tr>
                        <td>{{$support->created_at}}</td>
                        <td>{{$support->id}}</td>
                        <td>{{$support->user->name}}</td>
                        <td>{{$support->user->email}}</td>
                        <td>
                            <a href="{{ route('admin.supports.show',['id'=> $support->id]) }}">
                                <span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span>
                            </a>
                        </td>
                    </tr>
                @endforeach
            </table>
            <div class="clearfix"> </div>
        </div>
    </div>

@section('categories')
    @include('store.partial.categories')
@stop
@endsection
@endcan
