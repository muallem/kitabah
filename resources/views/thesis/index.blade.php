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
@section('sidebar')
    @livewire('thesis.sidebar')
@endsection

@section('js')
<script>
    // Define the interval time in milliseconds (5 seconds = 5000 milliseconds)
    const intervalTime = 2000;

    var chatMessages = document.getElementById('chatMessages');

    // Start the interval
    const interval = setInterval(() => {
    // Call the emit function here
    Livewire.emit('refreshDataThesis'); // Replace 'functionName' with the actual function name you want to emit
    }, intervalTime);

    var chatMessages = document.getElementById('chatMessages');
        chatMessages.scrollTop = chatMessages.scrollHeight;

        const intervalDiscussion = setInterval(() => {
        // Call the emit function here
        Livewire.emit('refreshDataDiscussion'); // Replace 'functionName' with the actual function name you want to emit

        // chatMessages.scrollTop = chatMessages.scrollHeight;
        }, 10000);

</script>
@endsection