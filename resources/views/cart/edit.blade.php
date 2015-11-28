@extends('partials.content')

@section('content')

    @if(count($cart))
        {!! Form::open(['method' => 'PATCH', 'url' => '/cart/store']) !!}
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
            <? $count = 0; $i=1; ?>
            @foreach($cart as $one)
                <tr>
                    <td>{{{$i}}}</td>
                    <td>{{{$one[0]["name"]}}}</td>
                    <td>{{{$one[0]["amount"]}}}</td>
                    <td>
                        <div class="col-md-6">
                            {!! Form::text('count', $one[0]["count"], ['placeholder'=>'Количество',
                            'class'=>'form-control']) !!}
                        </div>
                    </td>
                    <td>
                        <? $i++; $count += $one[0]["amount"] * $one[0]["count"]; ?>
                        {{{$one[0]["amount"]*$one[0]["count"]}}} сом.
                    </td>
                    <td>
                        <a href="/cart/destroy/{{{$one[0]["id"]}}}/">Удалить</a>
                    </td>
                </tr>
            @endforeach
            <tr>
                <td class="text-left" colspan="2"> Количество товаров {{{count($cart)}}}</td>
                <td></td>
                <td></td>
                <td> Итого: {{{$count}}} сом. </td>
                <td></td>
            </tr>
            </tbody>
        </table>
        {!! Form::submit('Заказать', ['class'=>'btn primary']) !!}
        <a href="/" class='btn primary'>Посмотреть еще товары</a>
        {!! Form::close() !!}
    @else
        <div>Корзина пустая</div>
    @endif

@endsection