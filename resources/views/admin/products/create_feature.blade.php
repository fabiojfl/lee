@extends('store.store')
@section('content')
    <div class="container">
    <h1>Criar cartacterísticas para o produto</h1>
        @if($errors->any())
            @foreach($errors->all() as $error)
                <div class="alert alert-danger">
                    <strong>Error:</strong>{{$error}}
                </div>
            @endforeach
        @endif
        {!! Form::open(['route'=>['admin.products.features.store', $product->id],'method'=>'post']) !!}
        <div class="form-group">
            {!! Form::label('name','Caracteristica para o produto:') !!}
            {!! Form::text('name', null, ['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::submit('Eviar',['class'=>'btn btn-primary']) !!}
        </div>
        {!! Form::close() !!}
    </div>
@endsection