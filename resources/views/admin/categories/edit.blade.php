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
        <h1>Editar categorias</h1>
            {!! Form::open(['route'=> ['admin.categories.update',$category->id], 'method'=>'put']) !!}
        <div>
            <span>{!! Form::label('name','Name:') !!}</span>
            {!! Form::text('name', $category->name, ['class'=>'form-control']) !!}
        </div>
            <div>
                <span>{!! Form::label('description','Description:') !!}</span>
                {!! Form::textarea('description', $category->description, ['class'=>'form-control']) !!}
            </div>
            <label class="hvr-skew-backward">
                {!! Form::submit('Editar categoria') !!}
            </label>
            </form>

        <div class="clearfix"> </div>
    </div>
    <!----->
    {!! Form::close() !!}
    @endcan
@section('categories')
    @include('store.partial.categories')
@stop
@endsection
