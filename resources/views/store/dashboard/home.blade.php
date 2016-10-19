@extends('store.store')

@section('content')
        <!--banner-->
<div class="banner-top">
    <div class="container">
        <h1>Meus pedidos</h1>
        <em></em>
        <h2><a href="index.html">Home</a><label>/</label>Meus Pedidos</a></h2>
    </div>
</div>
<!--content-->
<div class="container">
    <div class="grid_3 grid_4">
        <div class="page-header">
            <h3>Meus Pedidos</h3>
        </div>
        <div class="page">
            <div class="bs-example" data-example-id="contextual-table" style="border: 1px solid #eee">
                <table class="table">
                    <thead>
                    <tr>
                        <th>Data do Pedido</th>
                        <th>Número do pedido</th>
                        <th>Valor do pedido</th>
                        <th>Situação</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr class="active">
                        <th scope="row">1</th>
                        <td>Column content</td>
                        <td>Column content</td>
                        <td>Column content</td>
                    </tr>


                    <tr>
                        <th scope="row">8</th>
                        <td>Column content</td>
                        <td>Column content</td>
                        <td>Column content</td>
                    </tr>


                    </tbody>
                </table>
            </div>
            <div class="page-header">
                <h3></h3>
            </div>
            <div class="row">
                <div class="col-sm-6">
                    <div class="panel panel-danger">
                        <div class="panel-heading">
                            <h3 class="panel-title">Endereço</h3>
                        </div>
                        <div class="panel-body">
                            Panel content
                        </div>
                    </div>
                </div><!-- /.col-sm-4 -->
                <div class="col-sm-6">
                    <div class="panel panel-danger">
                        <div class="panel-heading">
                            <h3 class="panel-title">Perfil</h3>
                        </div>
                        <div class="panel-body">
                            Panel content
                        </div>
                    </div>
                </div><!-- /.col-sm-4 -->
            </div>
            <!--//forms-->
        </div>
    </div>
    <!--brand-->
@endsection
