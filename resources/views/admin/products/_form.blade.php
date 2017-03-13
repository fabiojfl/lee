<div>
	<div>
		<span>{!! Form::label('category_id','Categoria:') !!}</span>
		{!! Form::select('category_id', $listCategories, ['class'=>'form-control']) !!}
	</div>
</div>
<div>
	<div>
		<span>{!! Form::label('name','Nome:') !!}</span>
		{!! Form::text('name', null, ['class'=>'form-control']) !!}
	</div>
</div>
<div>
	<div>
		<span>{!! Form::label('mainsentence','Sentença Principal (Até 55 caracteres)') !!}</span>
		{!! Form::text('mainsentence', null, ['class'=>'form-control']) !!}
	</div>
</div>
<div>
	<div>
		<span>{!! Form::label('quickoverview','Visão Rápida (Até 170 caracteres)') !!}</span>
		{!! Form::textarea('quickoverview', null, ['class'=>'form-control']) !!}
	</div>
</div>
<div>
	<div>
		<span>{!! Form::label('price','Preço a da Unidade:') !!}</span>
		{!! Form::text('price', null, ['class'=>'form-control', 'id'=>'']) !!}
	</div>
</div>
<div>
	<div>
		<span>{!! Form::label('sale','Promoção:') !!}</span>
		{!! Form::text('sale', null, ['class'=>'form-control', 'id'=>'']) !!}

	</div>
</div>
<div>
	<div>
		<span>{!! Form::label('prodqtd','Qtd Estoque:') !!}</span>
		{!! Form::text('prodqtd', null, ['class'=>'form-control', 'id'=>'']) !!}
	</div>
</div>
<div>
	<div>
		<span>{!! Form::label('description','Descrição:') !!}</span>
		{!! Form::textarea('description', null, ['class'=>'form-control', 'id'=>'']) !!}
	</div>
</div>
<div>
	<div>
		<span>{!! Form::label('featured','Featured:') !!}</span>
		{!! Form::checkbox('featured', null, ['class'=>'form-control']) !!}
	</div>
</div>
<div>
	<div>
		<span>{!! Form::label('recommend','Recommend:') !!}</span>
		{!! Form::checkbox('recommend', null, ['class'=>'form-control']) !!}
	</div>
</div>
<!--
    'category_id',
    'name',
    'quickoverview', Visão Rápida
    'mainsentence',
    'price',
    'sale',
    'prodqtd',
    'description',
    'featured',
    'recommend'
-->