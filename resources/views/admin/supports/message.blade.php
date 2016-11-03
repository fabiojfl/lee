@extends('store.store')
@section('content')
    @can('user')
    <div class="col-md-8 single-top-in ">
        @can('user')
        <div class="profile-userbuttons">
            <div class="alert alert-success" role="alert">
                <strong>Obrigado!</strong> Entraremos em contato assim que possível.
            </div>
            <a href="{{url('/home')}}" class="btn btn-success btn-sm " role="button" aria-pressed="true">Voltar</a>
            <a href="{{url('/')}}" class="btn btn-success btn-sm " role="button" aria-pressed="true">Continuar Comprando</a>

        </div>
        @endcan
    </div>
    @endcan

@section('categories')
    @include('store.partial.categories')
@stop
@endsection