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
  
    .message {
      margin: auto;
      margin-bottom: 10px;
      padding: 5px;
      border-radius: 5px;
      max-width: 90%;
    }
  
    .message.friend {
      background-color: #f2f2f2;
      /* align-self: flex; */
    }
  
    .message.owner {
      background-color: #d4edda;
      /* align-self: flex-start; */
      /* margin-left: auto; Add this line */
    }
  
    .chat-messages {
      overflow-y: auto;
      max-height: 100%;
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
              @livewire('discussion.chat')

            <!-- Chat input form -->
            <form class="chat-input px-3" wire:submit.prevent='store'>
                <div class="input-group mb-2">
                  <input type=hidden wire.model="theses_id" value={{$theses_id}}>
                  <input type="text" class="form-control" placeholder="Type your message" wire:model.lazy="chat">
                  <button type="submit" class="btn btn-primary">Send</button>

                </div>
                <div class="input-group d-flex justify-content-center">
                  <button wire:click="$refs.fileInput.click()" type="button" class="btn btn-outline-primary">
                      <i class="fas fa-plus"></i> File
                  </button>
                  <input wire:model="photo" type="file" id="fileInput" style="display: none;" accept="image/*">

                  <button type="button" class="btn btn-outline-info" data-bs-toggle="collapse" data-bs-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                    <i class="fas fa-file text-info"></i></button>
                  <button type="button" class="btn btn-outline-dark" onclick="discussionToBottom()">
                    <i class="fas fa-arrow-bottom text-white"></i></button>
              </div>
            </form>
            </div>
        </div>
    </div>
</div>
