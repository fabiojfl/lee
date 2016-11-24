@extends('store.store')
@section('content')
    @if (count($errors) > 0)
        <div class="alert alert-danger" role="alert">
            <strong>Problemas!</strong> Por favor, verifique os erros descritos abaixo.
            <ul class="nav nav-pills nav-stacked">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
                <!--login-->
        <div class="container">
            <div class="login">

                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <div class="col-md-6 login-do">
                    <div class="login-mail">
                        <input type="text" placeholder="Nome" name="name" value="{{ old('name') }}" equired="">
                        <i  class="glyphicon glyphicon-user"></i>
                    </div>
                    <!--
                    <div class="login-mail">
                        <input type="text" placeholder="Phone Number" required="">
                        <i  class="glyphicon glyphicon-phone"></i>
                    </div>
                    -->
                    <div class="login-mail">
                        <input type="text" placeholder="Email" name="email" value="{{ old('email') }}" required="">
                        <i  class="glyphicon glyphicon-envelope"></i>
                    </div>
                    <div class="login-mail">
                        <input type="password" placeholder="Senha" name="password" required="">
                        <i class="glyphicon glyphicon-lock"></i>
                    </div>
                    <div class="login-mail">
                        <input type="password" placeholder="Confirmar Senha" name="password_confirmation" required="">
                        <i class="glyphicon glyphicon-lock"></i>
                    </div>


                    <div class="login-mail">
                        <input type="text" placeholder="CEP"   required="" name="cep" id="cep">
                        <i  class="glyphicon glyphicon-home"></i>
                    </div>
                    <div class="login-mail">
                        <input type="text" placeholder="Endereço"   required="" name="endereco" id="rua">
                        <i  class="glyphicon glyphicon-road"></i>
                    </div>


                    <div class="login-mail">
                        <input type="text" placeholder="Destinatário"  name="destinatario">
                        <i  class="glyphicon glyphicon-user"></i>
                    </div>
                    <div class="login-mail">
                        <input type="text" placeholder="Número"   required="" name="numero">
                        <i  class="glyphicon glyphicon-ok"></i>
                    </div>
                    <div class="login-mail">
                        <input type="text" placeholder="Complemento"   name="complemento">
                        <i  class="glyphicon-menu-hamburger"></i>
                    </div>
                    <div class="login-mail">
                        <input type="text" placeholder="Bairro"   required="" name="bairro" id="bairro">
                        <i  class="glyphicon glyphicon-home"></i>
                    </div>
                    <div class="login-mail">
                        <input type="text" placeholder="Cidade"   required="" name="cidade" id="cidade">
                        <i  class="glyphicon glyphicon-globe"></i>
                    </div>

                    <div class="login-mail">
                        <input type="text" placeholder="Estado"   required="" name="estado" id="uf">
                        <i  class="glyphicon glyphicon-globe"></i>
                    </div>
                    <input type="hidden" class="form-control" name="is_admin" value="1">
                    <!--
                    <a class="news-letter " href="#">
                        <label class="checkbox1"><input type="checkbox" name="checkbox" ><i> </i>Forget Password</label>
                    </a>
                    -->
                    <label class="hvr-skew-backward">
                        <input type="submit" value="Enviar">
                    </label>

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

