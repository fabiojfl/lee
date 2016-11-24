@extends('store.store')
@section('content')
@can('admin')
    <div class="col-md-9 contact-top ">
        @if($errors->any())
            @foreach($errors->all() as $error)
                <div class="alert alert-danger">
                    <strong>Error:</strong>{{$error}}
                </div>
            @endforeach
        @endif
        {!! Form::open(['route'=>['admin.holmeSlide.images.store', $product->id],'method'=>'post','enctype'=>"multipart/form-data"]) !!}
		
		<h1>Adcionar Banner na Página Inicial "1200px X 400px"</h1>
		<div>
			<div>
				<span> {!! Form::label('image','Image:') !!}</span>
				{!! Form::file('image', null, ['class'=>'form-control']) !!}
			</div>
		</div>
        <label class="hvr-skew-backward">
            {!! Form::submit('Upload Slide ',['class'=>'btn btn-primary']) !!}
		</label>
		<div class="clearfix"> </div>
	</div>
	{!! Form::close() !!}
@endcan
	@section('categories')
    @include('store.partial.categories')
@stop
@endsection
