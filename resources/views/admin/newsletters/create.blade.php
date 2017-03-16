@extends('store.store')
@section('content')
        @can('admin')
        <h3>Super Administrador</h3>
        <h2>Olá,{{ Auth::user()->name }}.</h2>
        @endcan
        @can('user')
        <div class="page">
            <div class="grid_3 grid_4">
                <div class="page-header-admin-client page-header">
                    <h2>Deixe seu email e Receba</h2>
                </div>
                <div class="row">
                    <div class="col-sm-8 page-header-admin-client contact-top">

                        @if($errors->any())
                            @foreach($errors->all() as $error)
                                <div class="alert alert-danger">
                                    <strong>Error:</strong>{{$error}}
                                </div>
                            @endforeach
                        @endif

                        {!! Form::open(['route'=>'admin.newsletters.store','method'=>'post']) !!}
                            {!! Form::hidden('user_id',Auth::user()->id, ['class'=>'form-control']) !!}
                            	<h4><i class="glyphicon glyphicon-ok"></i>&nbsp Promoções</h4>
								<h4><i class="glyphicon glyphicon-ok"></i>&nbsp Dicas</h4>
								<h4><i class="glyphicon glyphicon-ok"></i>&nbsp Sorteio de produtos</h4>
								<h4><i class="glyphicon glyphicon-ok"></i>&nbsp Novidades</h4>
 						<div>
                           <span> Adicione o seu email aqui</span>
                            {!! Form::text('email', null, ['class'=>'form-control']) !!}
						</div>

						<label class="hvr-skew-backward">
                            {!! Form::submit('Enviar', ['class' => 'hvr-skew-backward']) !!}
						</label>
                        {!! Form::close() !!}	
                    </div>
                    <div class="col-sm-4 page-header-admin-client">
                        <h4>Menu de Opções</h4>
                        <p><a href="{{ route('home') }}"><span>Voltar</span></a></p>
                        <!-- <p><a href="{{ route('admin.users.edit', ['id'=>$user->id]) }}"><span>Editar Perfil</span></a></p> -->
                        <!-- <p><a href="{{route('admin.newsletters.create')}}"><span>Receber novidades</span></a></p> -->
                        <p><a href="{{route('admin.supports.create')}}"><span>Atendimento</span></a></p>
                    </div>
                </div> <!-- //.row -->
            </div><!-- //Page -->
        @endcan
@endsection		