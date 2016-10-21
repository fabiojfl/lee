@extends('store.store')
@section('content')
    @can('admin')
    <div class="col-md-9 contact-top ">
        <h1> Newsletter</h1>
        <hr>
        <br>
        <div class="bs-example" data-example-id="simple-table">
            <table class="table">
                <tr>
                    <th>Data:hora Criação</th>
                    <th>Lista de emails da Newslatter</th>
                </tr>
                @foreach($newslatters as $newslatter)
                    <tr>
                        <td>{{$newslatter->created_at}}</td>
                        <td>{{$newslatter->email}}</td>
                    </tr>
                @endforeach
            </table>
            {!! $newslatters->render() !!}
            <div class="clearfix"> </div>
        </div>
    </div>

@section('categories')
    @include('store.partial.categories')
@stop
@endsection
@endcan