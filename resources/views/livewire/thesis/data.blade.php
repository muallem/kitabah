@if(!$thesis)
<button type="button" class="btn btn-success btn-icon-split mb-4" data-bs-toggle="modal" data-bs-target="#detailModal"
    wire:click="resetInput">
    Tambah Baru
</button>
@else
<div class="alert alert-info" role="alert">
    {{$thesis->title}}
  </div>
  @endif