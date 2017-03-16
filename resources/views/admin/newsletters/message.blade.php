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
                    <div class="profile-userbuttons">
                        <div class="alert alert-success" role="alert">
                            <strong>Obrigado!</strong> Em breve você receberá promoções de novos produtos, novidades, notícias entre outros.
                        </div>
                        <a href="{{url('/home')}}" class="btn btn-success btn-sm " role="button" aria-pressed="true">Voltar</a>
                        <a href="{{url('/')}}" class="btn btn-success btn-sm " role="button" aria-pressed="true">Continuar Comprando</a>

                    </div>
                    </div>
                    <div class="col-sm-4 page-header-admin-client">
                        <h4>Menu de Opções</h4>
                        <p><a href="{{ route('home') }}"><span>Voltar</span></a></p>
                        <!-- <p><a href="{{ route('admin.users.edit', ['id'=>$user->id]) }}"><span>Editar Perfil</span></a></p> -->
                        <!-- <p><a href="{{route('admin.newsletters.create')}}"><span>Receber novidades</span></a></p> -->
                        					<p><a href="{{route('admin.newsletters.create')}}"><span>Receber novidades</span></a></p>
                        <p><a href="{{route('admin.supports.create')}}"><span>Atendimento</span></a></p>
                    </div>
                </div> <!-- //.row -->
            </div><!-- //Page -->
        @endcan
@endsection		

