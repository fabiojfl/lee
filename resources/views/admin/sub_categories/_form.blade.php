<div>
	<span>{!! Form::label('category_id','Categoria:') !!}</span>
	{!! Form::select('category_id', $listCategories, ['class'=>'form-control']) !!}
</div>
<div>
	<span>{!! Form::label('name','Name:') !!}</span>
	{!! Form::text('name', null, ['class'=>'form-control']) !!}
</div>                   
<div>
	<span>{!! Form::label('description','Description:') !!}</span>
	{!! Form::textarea('description', null, ['class'=>'form-control']) !!}
</div>