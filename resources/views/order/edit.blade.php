@extends('app')

@section('content')

    <div class="col-md-6 col-md-offset-3">
        <h2>Изменить заказ</h2>
        {!! Form::model($order, ['method' => 'PATCH','route' => ['order.update', $order["id"]]]) !!}
        @include('order/_form', ['submit_text' => 'Изменить'])
        {!! Form::close() !!}
    </div>

@endsection