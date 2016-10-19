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
                <h1>Cadastrar Sub categorias</h1>
                    {!! Form::open(['route'=>'admin.sub_categories.store','method'=>'post']) !!}
                    
                    @include('admin.sub_categories._form')
                    
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
