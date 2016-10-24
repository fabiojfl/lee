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
                <h1>Cadastrar categorias</h1>
                    {!! Form::open(['route'=>'admin.categories.store','method'=>'post']) !!}
                    <div>
                        <span>{!! Form::label('name','Name:') !!}</span>
                        {!! Form::text('name', null, ['class'=>'form-control']) !!}
                    </div>
                    <div>
                        <span>{!! Form::label('description','Description:') !!}</span>
                        {!! Form::textarea('description', null, ['class'=>'form-control']) !!}
                    </div>
                    <label class="hvr-skew-backward">
                        {!! Form::submit('Cadastrar categoria') !!}
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
