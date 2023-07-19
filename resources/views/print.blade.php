@extends('layouts.head_print')

@section('content')
    
<div class="p-4">
    <h2 class="text-center fw-bold" id="text_form_supplier_name">{{ $data['title'] }}</h2>
    <p>          Kualitas (kual): <br />
        Kualitas mengacu pada tingkat keunggulan atau kecemerlangan suatu produk, layanan, atau proses. Ini mencakup atribut-atribut yang mempengaruhi kemampuan suatu produk atau layanan untuk memenuhi harapan atau kebutuhan pengguna. Kualitas dapat dilihat dari segi fungsionalitas, keandalan, kinerja, keamanan, kepuasan pengguna, dan aspek lainnya. Peningkatan kualitas bertujuan untuk memberikan nilai tambah dan meningkatkan kepuasan pengguna.
        <br />
        Kuantitas (kuan): <br />
        Kuantitas merujuk pada jumlah atau volume suatu barang atau layanan. Ini melibatkan pengukuran atau perhitungan secara numerik tentang seberapa banyak atau seberapa sering sesuatu terjadi. Kuantitas dapat diukur dalam satuan fisik seperti unit, kilogram, liter, atau dalam bentuk lainnya yang relevan tergantung pada konteksnya. Pengelolaan kuantitas melibatkan pengaturan dan pengawasan terhadap jumlah yang dihasilkan atau dikonsumsi.
        <br />
        R&D (Research and Development): <br />
        R&D atau penelitian dan pengembangan merujuk pada kegiatan sistematis yang dilakukan untuk meningkatkan pengetahuan, memperoleh pemahaman baru, dan mengembangkan teknologi, produk, atau proses baru. R&D melibatkan eksperimen, penelitian, dan kegiatan inovatif lainnya dengan tujuan untuk menciptakan nilai tambah atau memperbaiki produk atau layanan yang ada. R&D seringkali dilakukan oleh perusahaan atau lembaga dengan tujuan menciptakan keunggulan kompetitif, inovasi, dan pertumbuhan jangka panjang.
    </p>

    <ul class="list-group list-group-flush">

        @if(session()->get('user_role') == 'admin')
            @foreach($data['discussions'] as $discussion)
                <li class="list-group-item">
                    @if( $discussion->is_file )
                    {{($discussion->is_admin)? 'Admin : ' : $data['wpjs_users']['user_login'] ." : "}}

                    <button 
                        class="text-decoration-none text-info btn-outline-info"
                        >
                        <i class="fas fa-file"></i>
                        {{ $discussion->chat }}
                    </button>
                    @else
                    {{ $discussion->chat }}
                    @endif
                </li>
            @endforeach
        @else
            @foreach($data['discussions'] as $discussion)
                <li class="list-group-item">
                    @if( $discussion->is_file )
                    {{($discussion->is_admin)? $data['wpjs_users']['user_login'] ." : " : 'Admin : '}}
                    <button 
                        class="text-decoration-none text-info btn-outline-info"
                        >
                        <i class="fas fa-file"></i>
                        {{ $discussion->chat }}
                    </button>
                    @else
                    {{ $discussion->chat }}
                    @endif
                </li>
            @endforeach
        @endif
        
    </ul>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(() => {
        window.print()
        const afterPrint = setTimeout(() => {
            window.close()
        }, 500);
    });
</script>
@endsection
