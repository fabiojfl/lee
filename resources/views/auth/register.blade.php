@extends('store.store')

@section('content')
    <div class="container">
        <div class="login">


                @if (count($errors) > 0)
                <div class="alert alert-danger " role="alert">
                    <div class="alert alert-danger list-alert">
                        <strong>Problemas!</strong>Por favor, verifique os erros do cadastro descritos abaixo.
                        <br>
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                @endif



            <form class="form-horizontal" role="form" method="POST" action="{{ route('register.store') }}">
                {!! csrf_field() !!}
                <div class="col-md-6 login-do">
                    <div class="login-mail">
                        <input type="text" placeholder="Nome" name="name" value="{{ old('name') }}">
                        <i  class="glyphicon glyphicon-user"></i>
                    </div>
                    <!--
                    <div class="login-mail">
                        <input type="text" placeholder="Phone Number" required="">
                        <i  class="glyphicon glyphicon-phone"></i>
                    </div>
                    -->
                    <div class="login-mail">
                        <input type="text" placeholder="Email" name="email" value="{{ old('email') }}">
                        <i  class="glyphicon glyphicon-envelope"></i>
                    </div>
                    <div class="login-mail">
                        <input type="password" placeholder="Senha" name="password">
                        <i class="glyphicon glyphicon-lock"></i>
                    </div>
                    <div class="login-mail">
                        <input type="password" placeholder="Confirmar Senha" name="password_confirmation">
                        <i class="glyphicon glyphicon-lock"></i>
                    </div>
                    <div class="login-do">
                        <div id="msgmCep"></div>
                        <div class="login-mail col-md-9">

                            <input type="text" placeholder="CEP" name="cep" id="cep" maxlength="8">
                        </div>
                        &nbsp;&nbsp;&nbsp;
                        <button type="button" class="btn hvr-skew-backward" onclick="getAddress()">
                            Buscar
                        </button>
                    </div>
                    <div class="form-group"></div>
                    <div class="login-mail">
                        <input type="text" placeholder="Endereço" name="address" id="address" readonly="readonly">
                        <i  class="glyphicon glyphicon-road"></i>
                    </div>

                    <div class="login-mail">
                        <input type="text" placeholder="Número" name="number" id="number" maxlength="5">
                        <i  class="glyphicon glyphicon-ok"></i>
                    </div>

                    <div class="login-mail">
                        <input type="text" placeholder="Bairro" name="district" id="district" readonly="readonly">
                        <i  class="glyphicon glyphicon-home"></i>
                    </div>

                    <div class="login-mail">
                        <input type="text" placeholder="Cidade" name="city" id="city" readonly="readonly">
                        <i  class="glyphicon glyphicon-globe"></i>
                    </div>

                    <div class="login-mail">
                        <input type="text"  placeholder="Estado"  name="state" id="state" readonly="readonly">
                        <i  class="glyphicon glyphicon-globe"></i>
                    </div>

                    <div class="login-mail">
                        <input type="text"  placeholder="Complemento" name="complement" id="complement">
                        <i  class="glyphicon glyphicon-globe"></i>
                    </div>




                            <button type="submit" class="btn hvr-skew-backward">
                                Register
                            </button>


                </div>
            </form>
                    <!--






                    <input type="hidden" class="form-control" name="is_admin" value="1">
                    <!--
                    <a class="news-letter " href="#">
                        <label class="checkbox1"><input type="checkbox" name="checkbox" ><i> </i>Forget Password</label>
                    </a>
                    -->


                </div>
                <div class="col-md-6 login-right">
                    <h3>Já sou cadastrado</h3>

                    <p>Entre como nosso usuário.</p>
                    <div class="features_items">

                        <ul class="menu-drop">

                            <li>O usuário tem a preferência de receber notícias das promoções e das Novidades.</li>
                            <li>Trocar o endereço de entrega.</li>
                            <li>Obeservar o estatus do seu produto.</li>

                        </ul>

                    </div>
                    <a href="{{ url('/login') }}" class="hvr-skew-backward">Entrar</a>

                </div>

                <div class="clearfix"> </div>
            </form>
        </div>

    </div>
@endsection