@extends('store.store')
@section('content')
    @can('admin')
    <div class="col-md-9 contact-top ">
        @if($errors->any())
            @foreach($errors->all() as $error)
                <div class="alert alert-danger">
                    <strong>Error:</strong>{{$error}}
                </div>
            @endforeach
        @endif
        <h1>Cadastrar Produto</h1>

        {!! Form::open(['route'=>'admin.products.store','method'=>'post']) !!}

        @include('admin.products._form')

        <div>
            <span>{!! Form::label('tags','Tags:') !!}</span>

                {!! Form::textarea('tags', null, ['class'=>'form-control']) !!}
        </div>
        <label class="hvr-skew-backward">
            {!! Form::submit('Criar produto') !!}
        </label>


        <div class="clearfix"> </div>
    </div>
    {!! Form::close() !!}
    @endcan

@section('categories')
    @include('store.partial.categories')
@stop
@endsection
