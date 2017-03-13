@extends('store.store')
@section('content')
    @can('admin')
    <div class="col-md-9 contact-top">
        <h1>Criar cartacterísticas para o produto</h1>
        @if($errors->any())
            @foreach($errors->all() as $error)
                <div class="alert alert-danger">
                    <strong>Error:</strong>{{$error}}
                </div>
            @endforeach
        @endif
        {!! Form::open(['route'=>['admin.products.itemFeatures.store', $feature->id],'method'=>'post']) !!}
        <div>
            <div>
                <span>{!! Form::label('title','Título da Característica:') !!}</span>
                {!! Form::text('text', null, ['class'=>'form-control']) !!}
            </div>
        </div>
        <label class="hvr-skew-backward">
            {!! Form::submit('Enviar') !!}
        </label>
        {!! Form::close() !!}
        <div class="clearfix"> </div>
    </div>
    {!! Form::close() !!}
    @endcan
@section('categories')
    @include('store.partial.categories')
@stop
@endsection