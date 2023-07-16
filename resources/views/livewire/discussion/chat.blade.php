@push('css')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

<style>
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
  
  </style>

  @endpush
<div class="chat-messages" id="chatMessages" wire:poll.350ms>
    <!-- Friend's chat messages -->
    {{$discussions}}
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
            @if( $discussion->is_file )

              <a href="{{ asset("storage/app/public/attachments/$discussion->file") }}"
              class="text-decoration-none text-info btn btn-outline-info d-inline file_item m-2"
              download
            >
            <i class="fas fa-file"></i>
              {{ $discussion->chat }}
          </a>
            @else
                {{ $discussion->chat }}
            @endif
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
                @if( $discussion->is_file )
    
                  <a href="{{ asset("storage/app/public/attachments/$discussion->file") }}"
                  class="text-decoration-none text-info btn btn-outline-info d-inline file_item m-2"
                  download
                >
                <i class="fas fa-file"></i>
                  {{ $discussion->chat }}
              </a>
                @else
                    {{ $discussion->chat }}
                @endif
              </div>
        </div> 
      @endforeach
      
    @endif

    <hr class="mb-5" />


    <!-- Me's chat messages -->
    {{-- <div class="message owner">
      <div class="message-content">
          Me: Hi there!
      </div>
    </div> --}}

    <!-- Add more chat messages as needed -->


    @push('js')
    <script>
        document.addEventListener('livewire:load', function () {
            var chatMessages = document.getElementById('chatMessages');
            chatMessages.scrollTop = chatMessages.scrollHeight;
        });
    </script>
    @endpush
</div>