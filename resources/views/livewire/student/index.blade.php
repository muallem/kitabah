
<div class="card mb-3">
    <div class="card-body">
        @if ($data_judul)
            <h6>Judul : </h6>
            <blockquote class="blockquote border border-primary p-3">
                <p>{{$data_judul->title}}</p>
            </blockquote>
            <hr>
            <div class="alert alert-success mt-3" role="alert">Feedback !</div>
        @else
            @livewire('student.judul.create')
        @endif
    </div>
</div>