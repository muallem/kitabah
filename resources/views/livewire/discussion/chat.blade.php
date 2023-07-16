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