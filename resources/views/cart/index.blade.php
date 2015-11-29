@extends('partials.content')

@section('content')
    <div class="container">
        @if(count($cart))
            <table class="table">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Название товара</th>
                    <th>Стоимость</th>
                    <th>Количество</th>
                    <th>Сумма</th>
                    <th></th>
                </tr>
                </thead>
                <tbody>
                <? $count = 0; $i = 1; ?>
                @foreach($cart as $one)
                    <tr>
                        <td>{{{$i}}}</td>
                        <td>{{{$one["name"]}}}</td>
                        <td>{{{$one["amount"]}}}</td>
                        <td>
                            <div class="">
                                <div class="form-group">
                                    {!! Form::open(['name'=>'item'.$one["pid"],'method' => 'post',
                                    'class'=>'form-inline', 'url' => '/cart/update']) !!}
                                        {!! Form::hidden('pid', $one["pid"]) !!}
                                        {!! Form::text('count', $one["count"], ['placeholder'=>'Количество',
                                    'class'=>'form-control']) !!}
                                        {!! Form::submit('Обновить', ['class'=>'btn btn-link']) !!}
                                    {!! Form::close() !!}
                                </div>
                            </div>
                        </td>
                        <td>
                            <? $i++; $count += $one["amount"] * $one["count"]; ?>
                            {{{$one["amount"]*$one["count"]}}} сом.
                        </td>
                        <td>
                            <a href="/cart/destroy/{{{$one["pid"]}}}/">Удалить</a>
                        </td>
                    </tr>
                @endforeach
                <tr>
                    <td class="text-left" colspan="2"> Количество товаров {{{count($cart)}}}</td>
                    <td></td>
                    <td></td>
                    <td> Итого: {{{$count}}} сом.</td>
                    <td></td>
                </tr>
                </tbody>
            </table>
            <a href="/order/create" class='btn btn-primary'>Оформить заказ</a>
            <a href="/" class='btn btn-primary'>Посмотреть еще товары</a>
            {!! Form::close() !!}
        @else
            <div>Корзина пустая</div>
        @endif
    </div>
@endsection