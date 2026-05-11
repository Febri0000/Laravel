@extends('main')


@section('title', 'Periode')
@section('content')

    @foreach ($result  as  $item)
        {{ $item->tahun_akademik }} - {{ $item->semester }}<br>
    @endforeach

@endsection