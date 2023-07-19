@extends('layouts.head_print')

@section('content')
    
<div class="p-4">
    {{$data}}
    {{-- <h2 class="text-center fw-bold" id="text_form_supplier_name">{{ $data->title }}</h2> --}}

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
