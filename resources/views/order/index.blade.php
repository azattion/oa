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
                    <th>URL</th>
                    <th></th>
                </tr>
                @foreach($order as $one)
                    <tr>
                        <td>{{{$one["id"]}}}</td>
                        <td><a href="{{ route('categories.show', $one->slug) }}">{{ $one->name }}</a></td>
                        <td>{{{$one["slug"]}}}</td>
                        <td>
                            {!! Form::open(array('class' => 'form-inline', 'method' => 'DELETE', 'route' => array('categories.destroy', $one->slug))) !!}
                            {!! Form::submit('Удалить', array('class' => 'btn btn-link')) !!}

                            <a class="btn" href="{{ route('categories.edit', $one->slug) }}">Изменить</a>

                            {!! Form::close() !!}

                        </td>
                    </tr>
                @endforeach
            </table>
            <div class="col-md-12"><a class="btn btn-default" href="{{route('categories.create')}}">Добавить новую</a></div>
        </div>
    @endif

@endsection