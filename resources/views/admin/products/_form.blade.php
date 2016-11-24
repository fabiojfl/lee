	<div>
		<div>
			<span>{!! Form::label('category_id','Categoria:') !!}</span>
			{!! Form::select('', $listCategories, ['class'=>'form-control']) !!}
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
			<span>{!! Form::label('mainsentence','Frase de Efeito:') !!}</span>
			{!! Form::textarea('mainsentence', null, ['class'=>'form-control']) !!}
		</div>
	</div>
	<div>
		<div>
			<span>{!! Form::label('quickoverview','Pequena Descrição:') !!}</span>
			{!! Form::textarea('quickoverview', null, ['class'=>'form-control']) !!}
		</div>
	</div>
	<div>
		<div>
			<span>{!! Form::label('description','Descrição:') !!}</span>
			{!! Form::textarea('description', null, ['class'=>'form-control']) !!}
		</div>
	</div>	
	<div>
		<div>
			<span>{!! Form::label('addinformation','Informção Adicional:') !!}</span>
			{!! Form::textarea('addinformation', null, ['class'=>'form-control']) !!}
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
