@extends('app')

@section('content')
    <h2>
        ФИО: {{ $order->name }}
    </h2>

    <p><strong>Адрес:</strong> {{ $order->address }}</p>
    <p><strong>Тел.:</strong> {{ $order->phone }}</p>
    <p><strong>Э-почта.:</strong> {{ $order->email }}</p>
    <p><strong>Описание:</strong> {{ $order->desc }}</p>
    <p><strong>Дата:</strong> {{ $order->created_at }}</p>
    <p><strong>Статус:</strong>  {{{($order->status==0)?"В ожидание":"Принят"}}}</p>
    <table class="table">
        <thead>
            <tr>
                <th>#</th>
                <th>Название товара</th>
                <th>Стоимость</th>
                <th>Количество</th>
                <th>Сумма</th>
            </tr>
        </thead>
            <? $count = 0; ?>
            @foreach ($order->items as $one)
            <tr>
                <td>{{{$one->id}}}</td>
                <td>{{{$one->product->name}}}</td>
                <td>{{{$one->product->amount}}}</td>
                <td>{{{$one->count}}}</td>
                <td>{{{$one->count*$one->product->amount}}}</td>
                <? $count += $one->count*$one->product->amount; ?>
            </tr>
            @endforeach
        <tr>
            <td class="text-left" colspan="2"> Количество товаров {{{count($order->items)}}}</td>
            <td></td>
            <td></td>
            <td> Итого: {{{$count}}} сом.</td>
        </tr>
    </table>

@endsection