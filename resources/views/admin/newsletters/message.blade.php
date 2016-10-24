@extends('store.store')
@section('content')

    <div class="single">

        <div class="container">
            <div class="col-md-12 ">
                <div class="col-md-3 grid">
                    <div class="profile-sidebar">
                        <!-- SIDEBAR USERPIC -->
                        <!--
                        <div class="profile-userpic">
                            <img src="images/pi2.jpg" class="img-responsive" alt="">
                        </div>
        -->
                        <!-- END SIDEBAR USERPIC -->
                        <!-- SIDEBAR USER TITLE -->

                        <div class="profile-usertitle">
                            <div class="profile-usertitle-name">
                                @can('admin')
                                <h3>Super Administrador</h3>
                                <h2>Olá,{{ Auth::user()->name }}.</h2>
                                @endcan

                                @can('user')

                                <h2>Olá,{{ Auth::user()->name }}.</h2>
                                @endcan
                            </div>

                            <div class="profile-usertitle-job">
                                {{ Auth::user()->email }}
                            </div>
                            </br>

                        </div>
                        <!-- END SIDEBAR USER TITLE -->
                        <!-- SIDEBAR BUTTONS -->
                        <!--<div class="profile-userbuttons">
                            <button type="button" class="btn btn-success btn-sm">Follow</button>
                            <button type="button" class="btn btn-danger btn-sm">Message</button>
                        </div>
                        <!-- END SIDEBAR BUTTONS -->
                        <!-- SIDEBAR MENU -->
                        <div class="profile-usermenu wish-list-table">
                            <ul class="nav">
                                <li class="wish">
                                    <a href="#">
                                        <span><i class="glyphicon glyphicon-user" aria-hidden="true"></i></span>
                                        Meu Perfil </a>
                                    </a>
                                </li>
                                <li class="wish">
                                    <a href="{{route('admin.newsletters.create')}}" target="_blank">
                                        <span><i class="glyphicon glyphicon-send"></i></span>Receber novidades </a>
                                </li>
                                <li class="wish">
                                    <a href="#">
                                        <span><i class="glyphicon glyphicon-flag"></i></span>
                                        Atendimento </a>
                                </li>
                            </ul>
                        </div>
                        <!-- END MENU -->
                    </div>
                </div>
                <div class="col-md-8 single-top-in ">
                    @can('user')
                    <div class="profile-userbuttons">
                        <div class="alert alert-success" role="alert">
                            <strong>Obrigado!</strong> Em breve você receberá promoções de novos produtos, novidades, notícias entre outros.
                        </div>
                        <a href="{{url('/home')}}" class="btn btn-success btn-sm " role="button" aria-pressed="true">Voltar</a>
                        <a href="{{url('/')}}" class="btn btn-success btn-sm " role="button" aria-pressed="true">Continuar Comprando</a>

                    </div>
                    @endcan
                </div>

            </div>
            <div class="clearfix"> </div>
            <!---->


        </div>
        <div class="clearfix"></div>
    </div>
    <!---->
    </div>



@endsection