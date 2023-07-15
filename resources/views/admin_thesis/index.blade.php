@extends('layouts.app')

@section('title', 'Data detail Jenis Skripsi')

@section('content_header')
    <h1>Data Detail Jenis Skripsi</h1>
@stop

@section('content')
<div class="container">
    @livewire('admin-thesis.detail')
    @livewire('admin-thesis.discussion')

    <div class="card">
        <div class="card-body">
            @livewire('admin-thesis.datatable')
        </div>
    </div>
</div>
@endsection

@section('sidebar')
    @livewire('admin-thesis.sidebar')
@endsection