@extends('store.store')

@section('content')
    <div class="page">
        <div class="grid_3 grid_4">
            <div class="page-header-admin-client page-header">
                <h4><b>Edição do perfil:</b> {{ $user->name }}</h4>
            </div>
            <div class="row">
                <div class="col-sm-8 page-header-admin-client">


                    @if($errors->any())
                        <ul class="alert">
                            @foreach($errors->all() as $erro)
                                <li>{{ $erro }}</li>
                            @endforeach
                        </ul>
                    @endif

                    {!! Form::open(['route'=> ['admin.users.update',$user->id], 'method'=>'put']) !!}



                    <div>
                        <span>{!! Form::label('name','Name') !!}</span>
                        {!! Form::text('name', $user->name, ['class'=>'form-control']) !!}
                    </div>

                    <div>
                        <span>{!! Form::label('email','Email') !!}</span>
                        {!! Form::text('email', $user->email, ['class'=>'form-control']) !!}
                    </div>

                    <div>
                        <span>{!! Form::label('cep','CEP') !!}</span>
                        {!! Form::text('email', $user->cep, ['class'=>'form-control']) !!}
                    </div>

                    <div>
                        <span>{!! Form::label('address','Enderço') !!}</span>
                        {!! Form::text('address', $user->address, ['class'=>'form-control']) !!}
                    </div>

                    <div>
                        <span>{!! Form::label('cep','CEP') !!}</span>
                        {!! Form::text('email', $user->cep, ['class'=>'form-control']) !!}
                    </div>

                    <div>
                        <span>{!! Form::label('number','Numero') !!}</span>
                        {!! Form::text('number', $user->number, ['class'=>'form-control']) !!}
                    </div>
                    <div>
                        <span>{!! Form::label('complement','Complemento') !!}</span>
                        {!! Form::text('city', $user->city, ['class'=>'form-control']) !!}
                    </div>
                    <div>
                        <span>{!! Form::label('district','Bairro') !!}</span>
                        {!! Form::text('district', $user->district, ['class'=>'form-control']) !!}
                    </div>

                    <div>
                        <span>{!! Form::label('city','Cidade') !!}</span>
                        {!! Form::text('city', $user->city, ['class'=>'form-control']) !!}
                    </div>

                    <div>
                        <span>{!! Form::label('state','Estado') !!}</span>
                        {!! Form::text('state', $user->state, ['class'=>'form-control']) !!}
                    </div>

                    <div class="form-group">
                        {!! Form::label('is_admin', 'Admin:') !!}
                        {!! Form::checkbox('is_admin', $user->is_admin) !!}
                    </div>

                    <div class="form-group">
                        {!! Form::submit('Save User', ['class'=>'btn btn-primary']) !!}
                        <a href="{{ route('home') }}" class='btn btn-default '>voltar</a>
                    </div>
                    {!! Form::close() !!}
                    </br>
                </div>
                <div class="col-sm-4 page-header-admin-client">
                    <h4>Menu de Opções</h4>

                    <p><a href="{{ route('admin.users.edit', ['id'=>$user->id]) }}"><span>Editar Perfil</span></a></p>
                    <p><a href="{{route('admin.newsletters.create')}}"><span>Receber novidades</span></a></p>
                    <p><a href="{{route('admin.supports.create')}}"><span>Atendimento</span></a></p>
                </div>
            </div> <!-- //.row -->
        </div><!-- //Page -->
    </div><!--//Container-->


@endsection