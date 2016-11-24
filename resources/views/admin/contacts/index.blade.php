@extends('store.store')
@section('content')
    @can('admin')
    <div class="col-md-9 contact-top ">
            <h1>Últimos contatos</h1>
        <hr>
        <div class="bs-example" data-example-id="simple-table">
            <table class="table">
                <tr>
					<th>Data da Mensagem</th>
                    <th>Nome</th>
                    <th>Email</th>
                    <th>Ações</th>
                </tr>
                @foreach($contacts as $contact)
                    <tr>
                        <td>{{$contact->created_at}}</td>
                        <td>{{$contact->mome}}</td>
                        <td>{{$contact->email}}</td>
                        <td>
							<a href="{{ route('admin.contacts.show',['id'=> $contact->id]) }}">
								<span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span>
							</a>
                        </td>
                    </tr>
                @endforeach
            </table>
            <div class="clearfix"> </div>
        </div>
     </div>

@section('categories')
    @include('store.partial.categories')
@stop
@endsection
@endcan

