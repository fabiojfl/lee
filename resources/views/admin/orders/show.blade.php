
@extends('store.store')
@section('content')

<h4><b>Situação:</b>{{$orderItem->order->status}}</h4>
@foreach($orderItems as $Items)
<h4><b>Quantidade:</b>{{$Items->qtd}}</h4>
<h4><b>total:</b>{{$Items->sale }}</h4>
<h4><b>total:</b>{{$Items->Product->name }}</h4>
@endforeach

<h4><b>Total da compra:</b>{{$orderItem->order->total}}</h4>
@endsection