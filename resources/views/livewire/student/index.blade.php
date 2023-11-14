
<div class="card mb-3">
    <div class="card-body">
        @if ($data_judul)
            <h6>Judul : </h6>
            <blockquote class="blockquote border border-primary p-3">
                <p>{{$data_judul->title}}</p>
            </blockquote>
            <hr>
            @livewire('student.judul.feedback', ['group' => $data_judul->group])
            
        @else
            @livewire('student.judul.create')
        @endif
    </div>
</div>

@push('js')
    <script>
        document.addEventListener('livewire:load', function() {
            setInterval(function () {
                Livewire.emit('refreshStudentIndex'); 
            }, 10000); 
        });
    </script>
@endpush