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
            <h1>Kual</h1>
        </div>
    </div>
</div>
@endsection

@section('sidebar')
    @livewire('admin-thesis.sidebar')
@endsection
@section('navbar')
    @livewire('admin-thesis.navbar')
@endsection

@section('js')
<script>

        const intervalDiscussion = setInterval(() => {
        // Call the emit function here
        Livewire.emit('refreshDataDiscussion'); // Replace 'functionName' with the actual function name you want to emit
        Livewire.emit('refreshNavbar'); // Replace 'functionName' with the actual function name you want to emit
        Livewire.emit('refreshSidebar'); // Replace 'functionName' with the actual function name you want to emit

        }, 10000);
</script>
@endsection