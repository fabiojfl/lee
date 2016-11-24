@extends('store.store')
@section('content')
    <div class="container">
        <h1>Slide Home list:&nbsp <b>{{$product->name}}</b></h1>
        <hr>
        <div class="form-group">
            <a href="{{route('admin.slides.create_slide_home_image', ['id'=>$product->id])}}" class="btn btn-primary">Novo Slide</a><!-- /.box-header -->
        </div>
        <table class="table">
            <tr>
                <th>ID</th>
                <th>Image</th>
                <th>Extension</th>
                <th>Action</th>
            </tr>
            @foreach($product->homeSlide as $homeSlide)
                <tr>
                    <td>{{$homeSlide->id}}</td>
                    <td>
                        <img src="{{ url('uploads/ProductHomeSlide/'.$homeSlide->id.'.'.$homeSlide->extension) }}" width="80">
                    </td>
                    <td>{{$homeSlide->extension}}</td>
                    <td>
                        
                    </td>
                </tr>
            @endforeach
        </table>
        <a href="{{ route('admin.products.index') }}" class="btn btn-default">Voltar</a>
    </div>

@endsection
