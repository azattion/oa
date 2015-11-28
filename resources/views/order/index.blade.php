@extends('app')

@section('content')

    <h2>Заказы</h2>

    @if ( !$order->count() )
        Заказов не найдено
    @else
        <div class="col-md-12">
            <table class="table table-striped table-hover">
                <tr>
                    <th>#</th>
                    <th>Название</th>
                    <th>Адрес</th>
                    <th></th>
                </tr>
                @foreach($order as $one)
                    <tr>
                        <td>{{{$one["id"]}}}</td>
                        <td><a href="{{ route('order.show', $one["id"]) }}">{{ $one["name"] }}</a></td>
                        <td>{{{$one["address"]}}}</td>
                        <td>
                            {!! Form::open(array('class' => 'form-inline', 'method' => 'DELETE', 'route' => array('order.destroy', $one["id"]))) !!}
                            {!! Form::submit('Удалить', array('class' => 'btn btn-link')) !!}

                            <a class="btn" href="{{ route('order.edit', $one["id"]) }}">Изменить</a>

                            {!! Form::close() !!}

                        </td>
                    </tr>
                @endforeach
            </table>
            <div class="col-md-12"><a class="btn btn-default" href="{{route('order.create')}}">Добавить новую</a></div>
        </div>
    @endif

@endsection