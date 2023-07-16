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

                  <button wire:click="$refs.fileInput.click()" type="button" class="btn btn-outline-primary">
                    <i class="fas fa-plus"></i> File
                  </button>
                  <input wire:model="photo" type="file" id="fileInput" style="display: none;" accept="image/*">
                  <input type=hidden wire.model="theses_id" value={{$theses_id}}>
                  <input type="text" class="form-control" placeholder="Type your message" wire:model.lazy="chat">
                  <button type="submit" class="btn btn-primary">Send</button>

                </div>
              </form>
            </div>
        </div>
    </div>
</div>

@push('js')
    <script>
        document.addEventListener('livewire:load', function () {
            Livewire.on('chatToBottom', function () {
                // Handle the event here, e.g., show a success message
                const chatMessages = document.getElementById('chatMessages');
                chatMessages.scrollTop = chatMessages.scrollHeight;
            });
        });
    </script>
@endpush
