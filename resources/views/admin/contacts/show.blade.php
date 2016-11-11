@extends('store.store')
@section('content')
	@can('admin')
		
            <!-- Blog Post Content Column -->
            <div class="col-lg-8">
                <!-- Title -->
                <h1>{{$contact->assunto}}</h1>

                <!-- Author -->
                <p class="lead">
				{{$contact->email}}<br/>{{$contact->nome}}</a>
                </p>
				
                <hr>
                <!-- Date/Time -->
                <p><span class="glyphicon glyphicon-time"></span>{{$contact->updated_at}}</p>

                <hr>

                <!-- Post Content -->
                <p class="lead">{{$contact->mensagem}}</p>
                <hr>
				</div>
		@section('categories')
			@include('store.partial.categories')
		@stop
@endsection
	@endcan