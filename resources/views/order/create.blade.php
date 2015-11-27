@extends('app')

@section('content')

    <div class="col-md-6 col-md-offset-3">
        <h2>Создать заказ</h2>
        {!! Form::model(new App\Order, ['route' => ['order.store']]) !!}
        @include('order/_form', ['submit_text' => 'Отправить'])
        {!! Form::close() !!}
    </div>

@endsection


