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
            <div class="chat-messages" id="chatMessages">
                <!-- Friend's chat messages -->
                @if(session()->get('user_role') == 'admin')
                  <div class="message owner">
                    <div class="message-content">
                      Kualitas (kual): <br />
                      Kualitas mengacu pada tingkat keunggulan atau kecemerlangan suatu produk, layanan, atau proses. Ini mencakup atribut-atribut yang mempengaruhi kemampuan suatu produk atau layanan untuk memenuhi harapan atau kebutuhan pengguna. Kualitas dapat dilihat dari segi fungsionalitas, keandalan, kinerja, keamanan, kepuasan pengguna, dan aspek lainnya. Peningkatan kualitas bertujuan untuk memberikan nilai tambah dan meningkatkan kepuasan pengguna.
                      <br />
                      Kuantitas (kuan): <br />
                      Kuantitas merujuk pada jumlah atau volume suatu barang atau layanan. Ini melibatkan pengukuran atau perhitungan secara numerik tentang seberapa banyak atau seberapa sering sesuatu terjadi. Kuantitas dapat diukur dalam satuan fisik seperti unit, kilogram, liter, atau dalam bentuk lainnya yang relevan tergantung pada konteksnya. Pengelolaan kuantitas melibatkan pengaturan dan pengawasan terhadap jumlah yang dihasilkan atau dikonsumsi.
                      <br />
                      R&D (Research and Development): <br />
                      R&D atau penelitian dan pengembangan merujuk pada kegiatan sistematis yang dilakukan untuk meningkatkan pengetahuan, memperoleh pemahaman baru, dan mengembangkan teknologi, produk, atau proses baru. R&D melibatkan eksperimen, penelitian, dan kegiatan inovatif lainnya dengan tujuan untuk menciptakan nilai tambah atau memperbaiki produk atau layanan yang ada. R&D seringkali dilakukan oleh perusahaan atau lembaga dengan tujuan menciptakan keunggulan kompetitif, inovasi, dan pertumbuhan jangka panjang.
                  </div>
                  </div> 
                  @foreach($discussions as $discussion)
                    <div class="message {{ ($discussion->is_admin) ? "owner" : "friend"}}">
                      <div class="message-content">
                          {{ $discussion->chat }}
                      </div>
                    </div> 
                  @endforeach
                @else 
                  <div class="message friend">
                    <div class="message-content">
                        Admin: <br /> 
                        Kualitas (kual): <br />
                        Kualitas mengacu pada tingkat keunggulan atau kecemerlangan suatu produk, layanan, atau proses. Ini mencakup atribut-atribut yang mempengaruhi kemampuan suatu produk atau layanan untuk memenuhi harapan atau kebutuhan pengguna. Kualitas dapat dilihat dari segi fungsionalitas, keandalan, kinerja, keamanan, kepuasan pengguna, dan aspek lainnya. Peningkatan kualitas bertujuan untuk memberikan nilai tambah dan meningkatkan kepuasan pengguna.
                        <br />
                        Kuantitas (kuan): <br />
                        Kuantitas merujuk pada jumlah atau volume suatu barang atau layanan. Ini melibatkan pengukuran atau perhitungan secara numerik tentang seberapa banyak atau seberapa sering sesuatu terjadi. Kuantitas dapat diukur dalam satuan fisik seperti unit, kilogram, liter, atau dalam bentuk lainnya yang relevan tergantung pada konteksnya. Pengelolaan kuantitas melibatkan pengaturan dan pengawasan terhadap jumlah yang dihasilkan atau dikonsumsi.
                        <br />
                        R&D (Research and Development): <br />
                        R&D atau penelitian dan pengembangan merujuk pada kegiatan sistematis yang dilakukan untuk meningkatkan pengetahuan, memperoleh pemahaman baru, dan mengembangkan teknologi, produk, atau proses baru. R&D melibatkan eksperimen, penelitian, dan kegiatan inovatif lainnya dengan tujuan untuk menciptakan nilai tambah atau memperbaiki produk atau layanan yang ada. R&D seringkali dilakukan oleh perusahaan atau lembaga dengan tujuan menciptakan keunggulan kompetitif, inovasi, dan pertumbuhan jangka panjang.
                    </div>
                  </div>
                  @foreach($discussions as $discussion)
                    <div class="message {{ ($discussion->is_admin) ? "friend" : "owner"}}">
                      <div class="message-content">
                          {{ $discussion->chat }}
                      </div>
                    </div> 
                  @endforeach
                  
                @endif


                <!-- Me's chat messages -->
                {{-- <div class="message owner">
                  <div class="message-content">
                      Me: Hi there!
                  </div>
                </div> --}}

                <!-- Add more chat messages as needed -->

            </div>

            <div class="collapse mb-5" id="collapseExample">
              <div class="card card-body">
                <button
                  type="button"
                  className="btn btn-outline-info d-inline file_item m-2"
                >
                  {file.name}
                </button>
                <button
                  type="button"
                  className="btn btn-outline-info d-inline file_item m-2"
                >
                  {file.name}
                </button>
                <button
                  type="button"
                  className="btn btn-outline-info d-inline file_item m-2"
                >
                  {file.name}
                </button>
              </div>
            </div>

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
