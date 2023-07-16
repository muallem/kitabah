@push('css')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

<style>
    .chat-box {
      position: relative;
      border: 1px solid #ccc;
      padding: 10px;
      height: 60vh;
      overflow-y: scroll;
    }
  
    .chat-input {
      position: absolute;
      bottom: 10px;
      left: 0;
      right: 0;
    }
  </style>

  @endpush

  <div class="container mt-4">
    <div class="row">
        <div class="mx-auto col-md-12 offset-md-3">
            <div class="chat-box rounded border-0">
              @livewire('discussion.chat', ['id' => $theses_id])

            <!-- Chat input form -->
            <form class="chat-input px-3" wire:submit.prevent='store'>
                <div class="input-group mb-2">
                  <button wire:click="triggerFileInputClick" type="button" class="btn btn-primary">
                      <i class="fas fa-plus"></i> File
                  </button>
                  <input wire:model.lazy="files" type="file" id="fileInput" style="display: none;" multiple>
                  <input type=hidden wire.model="theses_id" value={{$theses_id}}>
                  <input type="text" class="form-control" placeholder="Type your message" wire:model.lazy="chat">
                  @if($files)
                    <button type="submit" class="btn btn-primary" wire:loading.attr="disabled">
                      <span wire:loading wire:target="store" class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
                      <span wire:loading.remove>Upload</span>
                    </button>
                  @else
                    <button type="submit" class="btn btn-primary">Send</button>
                  @endif
                </div>
              </form>
            </div>
        </div>
    </div>
</div>
@push('js')
    
<script> 
  document.addEventListener('livewire:load', function () {
    Livewire.on('openFileInput', function () {
        document.getElementById('fileInput').click();
    });
  });
</script>
@endpush
