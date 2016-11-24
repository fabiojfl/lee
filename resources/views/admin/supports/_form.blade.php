
<div>
    <span>{!! Form::label('title','Titulo:') !!}</span>
    {!! Form::text('title', null, ['class'=>'form-control']) !!}
</div>
<div>
    <span>{!! Form::label('content','Deixe seu comentário:') !!}</span>
    {!! Form::textarea('content', null, ['class'=>'form-control']) !!}
</div>

