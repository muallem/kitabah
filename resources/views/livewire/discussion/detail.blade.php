@push('css')
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
        <div class="mx-auto col-md-10 offset-md-3">
            <div class="chat-box rounded">
            <div class="chat-messages pb-5" id="chatMessages">
                <!-- Friend's chat messages -->
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

                <!-- Me's chat messages -->
                <div class="message owner">
                <div class="message-content">
                    Me: Hi there!
                </div>
                </div>
                <!-- Friend's chat messages -->
                <div class="message friend">
                <div class="message-content">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Error minus delectus odio sed fuga nihil autem laudantium aspernatur? Iure delectus enim perferendis consequatur doloribus non neque. Labore, facere expedita. Tempora, sunt. Tempore soluta assumenda sapiente mollitia fuga voluptatem dolore ullam.
                </div>
                </div>

                <!-- Me's chat messages -->
                <div class="message owner">
                <div class="message-content">
                    Me: Hi there!
                </div>
                </div>
                <!-- Friend's chat messages -->
                <div class="message friend">
                <div class="message-content">
                    Admin: Hello!
                </div>
                </div>

                <!-- Me's chat messages -->
                <div class="message owner">
                <div class="message-content">
                    Me: Hi there!
                </div>
                </div>
                <!-- Admin's chat messages -->
                <div class="message friend">
                <div class="message-content">
                    Admin: Hello!
                </div>
                </div>

                <!-- Me's chat messages -->
                <div class="message owner">
                <div class="message-content">
                    Me: Hi there!
                </div>
                </div>
                <!-- Admin's chat messages -->
                <div class="message friend">
                <div class="message-content">
                    Admin: Hello!
                </div>
                </div>

                <!-- Me's chat messages -->
                <div class="message owner">
                <div class="message-content">
                    Me: Hi there!
                </div>
                </div>
                <!-- Admin's chat messages -->
                <div class="message friend">
                <div class="message-content">
                    Admin: Hello!
                </div>
                </div>

                <!-- Me's chat messages -->
                <div class="message owner">
                <div class="message-content">
                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Optio voluptatibus assumenda natus pariatur earum? Rerum laboriosam, omnis sed dolorem obcaecati ab unde officia quibusdam perferendis!
                </div>
                </div>

                <!-- Add more chat messages as needed -->

            </div>

            <!-- Chat input form -->
            <form class="chat-input px-3">
                <div class="input-group">
                <input type="text" class="form-control" placeholder="Type your message">
                <button type="submit" class="btn btn-primary">Send</button>
                </div>
            </form>
            </div>
        </div>
    </div>
</div>

@push('js')
    <script>
        // JavaScript code to scroll to the last message
        var chatMessages = document.getElementById('chatMessages');
        chatMessages.scrollTop = chatMessages.scrollHeight;
  </script>
@endpush