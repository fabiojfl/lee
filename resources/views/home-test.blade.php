@extends('store.store')
@section('content')
	<div class="single">
		<div class="container">
			<div class="col-md-9">


            <h1> Lista dos últimos Pedidos</h1>
	   </br>
	  </br>	</br>		
            <table class="table">
                <tr>
                	<th>Data e Horário</th>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>

                    <tr>
                    	<td>{{$order->updated_at}}</td>
                    	<td>{{$order->id}}</td>
                        <td>{{$order->user->name}}</td>
                        <td>{{$order->status}}</td>
                        <td>
                        <a href="{{ route('home-test',['id'=> $order->id]) }}">
                            <span class="glyphicon glyphicon-edit" aria-hidden="true"></span>
                        </a>
                        </td>
                    </tr>

            </table>



			</div>
		</div>
	</div>
@endsection
