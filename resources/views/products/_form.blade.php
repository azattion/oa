<div class="form-group">
    {!! Form::label('name', 'Название') !!}
    {!! Form::text('name', null, ['placeholder'=>'Название товара', 'class'=>'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('amount', 'Цена') !!}
    {!! Form::text('amount',null, ['placeholder'=>'Стоимость', 'class'=>'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('slug', 'URL') !!}
    {!! Form::text('slug', null,['placeholder'=>'', 'class'=>'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('desc', 'Описание') !!}
    {!! Form::textarea('desc', null, ['placeholder'=>'Коротко о товаре', 'class'=>'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('photos', 'Фотографии') !!}
    {!! Form::file('photos') !!}
</div>
<div class="checkbox">
    {!! Form::checkbox('status', null) !!}
    {!! Form::label('status', 'Статус') !!}
</div>
{!! Form::submit($submit_text, ['class'=>'btn primary']) !!}