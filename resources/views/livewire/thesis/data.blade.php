<div class="w-100">
    @if(!$thesis)
        <button type="button" class="btn btn-success btn-icon-split mb-4" data-bs-toggle="modal" data-bs-target="#detailModal"
            wire:click="resetInput">
            Buat Judul Skripsi
        </button>
    @else
    <div class="input-group w-100">
        <div class="alert alert-success" role="alert">
            {{$thesis->title}}
        </div>
        <div class="input-group-append">
            <a href="{{ route('print', ['id' => Crypt::encrypt($thesis->id)]) }}" target="_blank" class="btn btn-outline-info"><i class="fas fa-print mr-2"></i>Cetak</a>
        </div>
    </div>
    @if($thesis->group === null)
            <div class="alert alert-warning" role="alert">
                Tunggu balasan dari admin!
            </div>
        @else
            <div class="alert alert-info" role="alert">
                @if($thesis->group == 'r&d')
                R&D (Research and Development)
                @elseif($thesis->group == "kuantitas")
                Kuantitas (kuan)
                @elseif($thesis->group == "kualitas")
                Kualitas (kual)
                @endif
            </div>
            @livewire('discussion.detail', ['id' => $thesis->id])
        @endif
    @endif
</div>