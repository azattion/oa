<div class="form-group">
    {!! Form::label('name', 'Фамилия, Имя') !!}
    {!! Form::text('name', null, ['placeholder'=>'Баланчаев Баланча', 'class'=>'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('address', 'Адрес') !!}
    {!! Form::text('address',null, ['placeholder'=>'Район, улица, дом', 'class'=>'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('phone', 'Номер телефона') !!}
    {!! Form::text('phone', null,['placeholder'=>'Мобильный, городской', 'class'=>'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('email', 'Электронный адрес') !!}
    {!! Form::text('email', null,['placeholder'=>'', 'class'=>'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('desc', 'Ваше пожелание') !!}
    {!! Form::textarea('desc', null, ['placeholder'=>'', 'class'=>'form-control']) !!}
</div>
{!! Form::submit($submit_text, ['class'=>'btn primary']) !!}