@extends('layouts.app')

@section('title', 'Data detail Skripsi')

@section('content_header')
    <h1>Data Detail Skripsi</h1>
@stop

@section('content')
<div class="container">

    @livewire('thesis.data')

    @livewire('thesis.detail')

</div>
@endsection