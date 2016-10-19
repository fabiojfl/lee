@extends('app')
@section('content')
<b><em>Usuário:</em>{{$post->user->name}}</b><br>
<b>{{$post->name}}</b><br>
{{$post->comment}}
@endsection