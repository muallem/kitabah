
  <div wire:ignore.self class="modal fade" id="modalDiscussion" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true" data-backdrop="static">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Detail Jenis Skripsi</h5>
            </div>
                <div class="modal-body">
                 @livewire('discussion.detail', ['id' => $thesis_id])

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>

        </div>
    </div>
</div>

@push('js')
    <script>
         $("#modalDiscussion").on('hide.bs.modal', function() {
            @this.call('resetInput');
        });
    </script>
@endpush