@extends('store.store')
@section('content')
    @can('admin')
    <div class="col-md-9 contact-top ">
        <h1>Dúvidas</h1>
        <h2>Solicitante: {{$support->user->name}}</h2>
        <h3>Email: {{$support->user->email}}</h3>
        <h4>Titulo {{$support->title}}</h4>
        <p>Mensagem: {{$support->content}}</p>
    </div>

@section('categories')
    @include('store.partial.categories')
@stop
@endsection
@endcan
