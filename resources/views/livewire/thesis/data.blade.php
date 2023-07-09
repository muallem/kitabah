@if(!$thesis)
    <button type="button" class="btn btn-success btn-icon-split mb-4" data-bs-toggle="modal" data-bs-target="#detailModal"
        wire:click="resetInput">
        Buat Judul Skripsi
    </button>
@else
    <div class="alert alert-success" role="alert">
        {{$thesis->title}}
    </div>
    @if($thesis->group === null)
        <div class="alert alert-warning" role="alert">
            Tunggu balasan dari admin!
        </div>
    @else
        <div class="alert alert-info" role="alert">
            {{$thesis->group}}
        </div>
        
        @livewire('discussion.detail')
    @endif
@endif