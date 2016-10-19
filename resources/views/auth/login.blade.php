@extends('store.store')
@section('content')

    <div class="container">
        <div class="login">
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/login') }}">
                        {{ csrf_field() }}
                        <div class="col-md-6 login-do">
                            <h3>Já tenho um cadastro</h3>
                            <br>

                            <div class="login-mail{{ $errors->has('email') ? ' has-error' : '' }}">
                                <input  type="text" placeholder="Email"  name="email" value="{{ old('email') }}" id="email">
                                <i  class="glyphicon glyphicon-envelope"></i>
                            </div>
                            @if ($errors->has('email'))
                            <div class="alert alert-danger" role="alert">
                                <ul class="nav nav-pills nav-stacked">
                                        <li>{{ $errors->first('email') }}</li>
                                </ul>
                            </div>
                            @endif
                            <div class="login-mail{{ $errors->has('password') ? ' has-error' : '' }}">
                                <input type="password" placeholder="Senha" required="" name="password">
                                <i class="glyphicon glyphicon-lock"></i>
                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <!--<a class="news-letter" href="{{ url('/password/reset') }}">Esqueceu a senha?</a>-->
                            <!--
                            <a class=" " href="#">
                                  <label class="checkbox1"><input type="checkbox" name="checkbox" ><i> </i>Forget Password</label>
                            </a>
                            -->

                            <label class="hvr-skew-backward">
                                <input type="submit" value="Continuar">
                            </label>
                        </div>
                        <div class="col-md-6 login-right cria-cadastro">
                            <h3>Não tenho cadastro</h3>
                            <ol class="">
                                <li>Receba promoções e ofertas exclusivas</li>
                                <li>Salve seus dados e facilite compras futuras</li>
                                <li>Veja seus pedidos</li>
                            </ol>
                            <br>
                            <a href="{{ url('/auth/register') }}" class=" hvr-skew-backward">Criar Cadastro</a>

                        </div>

                        <div class="clearfix"> </div>
                    </form>
        </div>

    </div>

    <!--//login-->

@endsection
