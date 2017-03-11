@extends('store.store')
@section('content')
    <div class="col-sm-9 padding-right">
        <div class="content-mid features_items "><!--features_items-->
            <h3 class="text-center">{{$category->name}}</h3>
            <label class="line"></label><br><br>
            @include('store.partial.product', ['products'=>$products])
        </div><!--features_items-->
    </div>
@stop
@section('categories')
    @include('store.partial.categories')
@stop


