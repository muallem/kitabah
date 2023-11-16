@extends('layouts.app')

@section('sidebar')
Coba
    <div id="left-sidebar" class="sidebar">
        @livewire('component.sidebar')    
    </div>  
@endsection

@section('content')
    <div class="container-fluid">
            
        <div class="block-header py-lg-4 py-3">
            <div class="row g-3">
                <div class="col-md-6 col-sm-12">
                    <h2 class="m-0 fs-5"><a href="javascript:void(0);" class="btn btn-sm btn-link ps-0 btn-toggle-fullwidth"><i class="fa fa-arrow-left"></i></a> Kitabah</h2>
                    <ul class="breadcrumb mb-0">
                        <li class="breadcrumb-item"><a href="index.html">Admin</a></li>
                        <li class="breadcrumb-item active">Materi</li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="row g-3 clearfix">
            <div class="col-lg-12 col-md-12">
                @switch($thesis->group)
                    @case(\App\Models\Judul::TYPE_KUAN)
                        @livewire('materi.kuan', ['student_id' => $thesis->student_id])
                        
                        @break
                    @case(\App\Models\Judul::TYPE_KUAN)
                        @livewire('materi.kuan', ['student_id' => $thesis->student_id])
                        
                        @break
                    @case(\App\Models\Judul::TYPE_RND)
                        @livewire('materi.rnd', ['student_id' => $thesis->student_id])
                        
                        @break
                        
                @endswitch
            </div>
        </div>

    </div>
@endsection