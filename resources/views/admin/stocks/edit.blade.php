
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
                    <h1>Edit Produto no Estoque: {{$stock->name}}</h1>
        {!! Form::model($stock, ['route'=>['admin.stocks.update',$stock->id], 'method'=>'put']) !!}

        @include('admin.stocks._form')

        <div>
            <span>{!! Form::label('total','Total:') !!}</span>
            {!! Form::text('total', null, ['class'=>'form-control']) !!}
        </div>
        <label class="hvr-skew-backward">
            {!! Form::submit('Enviar') !!}
        </label>
        <div class="clearfix"> </div>
    </div>
    {!! Form::close() !!}


@section('categories')
    @include('store.partial.categories')
@stop
@endsection

@endcan