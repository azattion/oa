@extends('app')

@section('content')
    <h2>
        {{ $order->name }}
    </h2>

    <p>{{ $order->address }}</p>
    <p>{{ $order->phone }}</p>
    <p>{{ $order->desc }}</p>
@endsection