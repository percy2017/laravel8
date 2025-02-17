@extends('voyager::master')

@section('content')

    <h2> hola albert</h2>
    <table class="table">
        <tr>
            <td>id</td>
            <td>nombres</td>
        </tr>
        @foreach ($midata as $item)
     
        <tr>
            <td>{{ $item->id }}</td>
            <td>{{ $item->nombres }}</td>
        </tr>
        @endforeach
    </table>
@stop