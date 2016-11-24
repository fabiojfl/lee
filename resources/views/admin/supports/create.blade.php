@extends('store.store')
@section('content')
    @can('user')
    <div class="col-md-9 contact-top ">
        @if($errors->any())
            @foreach($errors->all() as $error)
                <div class="alert alert-danger">
                    <strong>Error:</strong>{{$error}}
                </div>
            @endforeach
        @endif
        <h1>Deixe sua mensagem</h1>

        {!! Form::open(['route'=>'admin.supports.store','method'=>'post']) !!}

        {!! Form::hidden('user_id', Auth::user()->id, ['class'=>'form-control']) !!}

            @include('admin.supports._form')


        <label class="hvr-skew-backward">
            {!! Form::submit('Enviar') !!}
        </label>
        <div class="clearfix"> </div>
    </div>
    {!! Form::close() !!}
    @endcan

@section('categories')
    @include('store.partial.categories')
@stop
@endsection
