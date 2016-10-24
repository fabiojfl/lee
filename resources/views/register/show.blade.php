@extends('store.store')
@section('content')
    @can('admin')


    <div class="col-md-9 contact-top ">
        <h3>Super Administrador</h3>
        <h2>Olá,{{ Auth::user()->name }}.</h2>
        <hr>

        <div class="clearfix"> </div>
    </div>


@section('categories')
    @include('store.partial.categories')
@stop

@endcan

@can('user')
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




                            <h2>Olá,{{ Auth::user()->name }}.</h2>

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
                                <a href="{{ route('register.show', ['id'=>Auth::user()->id]) }}">
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
                <h1>Show User: {{ $user->name }}</h1>
                <br>

                <p><b>Name:</b> {{$user->name}}</p>
                <p><b>Email:</b> {{$user->email}}</p>
                <p><b>Endereço:</b> {{$user->address . ", " . $user->number . ", " . $user->district . ", " . $user->city . " - " . $user->state }}</p>
                <br>
                <a href="{{ route('admin.users.edit', ['id'=>$user->id]) }}" class='btn btn-primary '>Edit</a>
                <a href="{{ route('admin.users.index') }}" class='btn btn-default '>Back</a>


            </div>

        </div>
        <div class="clearfix"> </div>
        <!---->


    </div>
    <div class="clearfix"></div>
</div>
<!---->
</div>

@endcan

@endsection
