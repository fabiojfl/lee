@extends('store.store')
@section('content')
    @can('admin')
    <div class="col-md-9 contact-top ">
        <h1> Usuários</h1>
        <hr>
        <div class="form-group">
            <a href="{{route('admin.users.create')}}" class="btn btn-primary">Novo Usuário</a><!-- /.box-header -->
        </div>
        <br>
        <div class="bs-example" data-example-id="simple-table">
            <table class="table">
                <tr>
                    <th>Id</th>
                    <th>Nome</th>
                    <th>Email</th>
                    <th>Super Usuário</th>
                    <th>Ações</th>
                </tr>
                @foreach($users as $user)
                    <tr>
                        <td>{{$user->id}}</td>
                        <td>{{$user->name}}</td>
                        <td>{{$user->email}}</td>
                        <td>{{ $user->is_admin ? "Yes": "No"}}</td>
                        <td>
                            <a href="{{ route('admin.users.show', ['id'=>$user->id]) }}">
                                <span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span>
                            </a>
                            <a href="{{ route('admin.users.edit', ['id'=>$user->id]) }}">
                                <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                            </a>
                            <a href="{{ route('admin.users.destroy', ['id'=>$user->id]) }}">
                                <span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
                            </a>
                        </td>
                    </tr>
                @endforeach
            </table>
            {!! $users->render() !!}
            <div class="clearfix"> </div>
        </div>
    </div>
    @section('categories')
        @include('store.partial.categories')
    @stop
    @endsection
@endcan

