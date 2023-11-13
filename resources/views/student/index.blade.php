@extends('layouts.app')

@section('content')
    <div class="container-fluid">
            
        <div class="block-header py-lg-4 py-3">
            <div class="row g-3">
                <div class="col-md-6 col-sm-12">
                    <h2 class="m-0 fs-5"><a href="javascript:void(0);" class="btn btn-sm btn-link ps-0 btn-toggle-fullwidth"><i class="fa fa-arrow-left"></i></a> Kitabah</h2>
                    <ul class="breadcrumb mb-0">
                        <li class="breadcrumb-item"><a href="index.html">Student</a></li>
                        <li class="breadcrumb-item active">Judul</li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="row g-3 clearfix">
            <div class="col-lg-12 col-md-12">
                <div class="card mb-3 single_post">
                    <div class="card-body">
                        <h4>Lorem ipsum dolor sit amet.</h4>
                        <p class="my-3">Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                    </div>
                </div>
                <div class="card mb-3">
                    <div class="card-header">
                        <h6 class="card-title">Upload Tanggapan</h6>
                        <small>Tunggu Feedback dari admin setelah anda meng-upload tanggapan !</small>
                    </div>
                    <div class="card-body">
                        <form class="row">
                            <div class="col-12">
                                <label for="formFileMultiple" class="form-label">Tanggapan</label>
                                <input class="form-control" type="file" id="formFileMultiple" multiple="">
                            </div>
                            <div class="col-12 mt-4">
                                <button type="submit" class="btn btn-block btn-primary">SUBMIT</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection