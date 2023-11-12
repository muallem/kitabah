@extends('layouts.app')

@section('title', 'Data detail Jenis Skripsi')

@section('content_header')
    <h1>Data Detail Jenis Skripsi</h1>
@stop

@section('content')
<div class="container">
    @livewire('admin-thesis.detail')
    @livewire('admin-thesis.discussion')

    <div class="card">
        <div class="card-body">
            <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item" role="presentation">
                  <button class="nav-link active" id="pendahuluan-tab" data-bs-toggle="tab" data-bs-target="#pendahuluan-tab-pane" type="button" role="tab" aria-controls="pendahuluan-tab-pane" aria-selected="true">Pendahuluan</button>
                </li>
                <li class="nav-item" role="presentation">
                  <button class="nav-link" id="bab1-tab" data-bs-toggle="tab" data-bs-target="#bab1-tab-pane" type="button" role="tab" aria-controls="bab1-tab-pane" aria-selected="false">Bab 1</button>
                </li>
                <li class="nav-item" role="presentation">
                  <button class="nav-link" id="bab2-tab" data-bs-toggle="tab" data-bs-target="#bab2-tab-pane" type="button" role="tab" aria-controls="bab2-tab-pane" aria-selected="false">Bab 2</button>
                </li>
              </ul>
              <div class="tab-content" id="myTabContent">
                  <div class="tab-pane fade show active" id="pendahuluan-tab-pane" role="tabpanel" aria-labelledby="pendahuluan-tab" tabindex="0">
                    <h1>Pendahuluan</h1>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Est debitis nam aliquid totam? Ratione neque similique veniam, eos fuga accusantium! Dolor blanditiis, hic et magni saepe cum reiciendis commodi quaerat asperiores sit itaque facilis voluptatum quibusdam ea amet nisi mollitia!</p>
                   
                    
                </div>
                <div class="tab-pane fade" id="bab1-tab-pane" role="tabpanel" aria-labelledby="bab1-tab" tabindex="0">
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                          <button class="nav-link active" id="bab1-sub1-tab" data-bs-toggle="tab" data-bs-target="#bab1-sub1-tab-pane" type="button" role="tab" aria-controls="bab1-sub1-tab-pane" aria-selected="true">Sub 1</button>
                        </li>
                        <li class="nav-item" role="presentation">
                          <button class="nav-link" id="bab1-sub2-tab" data-bs-toggle="tab" data-bs-target="#bab1-sub2-tab-pane" type="button" role="tab" aria-controls="bab1-sub2-tab-pane" aria-selected="false">Sub 2</button>
                        </li>
                      </ul>
                      <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="bab1-sub1-tab-pane" role="tabpanel" aria-labelledby="bab1-sub1-tab" tabindex="0">
                          <h1>Sub 1</h1>
                          <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Est debitis nam aliquid totam? Ratione neque similique veniam, eos fuga accusantium! Dolor blanditiis, hic et magni saepe cum reiciendis commodi quaerat asperiores sit itaque facilis voluptatum quibusdam ea amet nisi mollitia!</p>
                          <div class="row">
                            <div class="col-mb-4">
                                <label for="formFileMultiple" class="form-label">Upload File</label>
                                <input class="form-control" type="file" id="formFileMultiple" multiple>
                            </div>
                        </div>
                        </div>
                        <div class="tab-pane fade" id="bab1-sub2-tab-pane" role="tabpanel" aria-labelledby="bab1-sub2-tab" tabindex="0">
                          <h1>Sub 2</h1>
                            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Est debitis nam aliquid totam? Ratione neque similique veniam, eos fuga accusantium! Dolor blanditiis, hic et magni saepe cum reiciendis commodi quaerat asperiores sit itaque facilis voluptatum quibusdam ea amet nisi mollitia!</p>
                            <div class="row">
                                <div class="col-mb-4">
                                    <label for="formFileMultiple" class="form-label">Upload File</label>
                                    <input class="form-control" type="file" id="formFileMultiple" multiple>
                                </div>
                            </div>
                        </div>
                      </div>
  
                </div>
                <div class="tab-pane fade" id="bab2-tab-pane" role="tabpanel" aria-labelledby="bab2-tab" tabindex="0">
                    <h1>Bab 2</h1>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dicta debitis, reprehenderit non obcaecati maxime dolor reiciendis facere, odit dignissimos, quidem expedita placeat? Neque similique accusamus consequuntur alias officia nihil fugiat vero velit eligendi cupiditate laborum a, pariatur eveniet veritatis quaerat!</p>
                    <div class="row">
                        <div class="col-mb-4">
                            <label for="formFileMultiple" class="form-label">Upload File</label>
                            <input class="form-control" type="file" id="formFileMultiple" multiple>
                        </div>
                    </div>
                </div>
              </div>
        </div>
    </div>
</div>
@endsection

@section('sidebar')
    @livewire('admin-thesis.sidebar')
@endsection
@section('navbar')
    @livewire('admin-thesis.navbar')
@endsection

@section('js')
<script>

        const intervalDiscussion = setInterval(() => {
        // Call the emit function here
        Livewire.emit('refreshDataDiscussion'); // Replace 'functionName' with the actual function name you want to emit
        Livewire.emit('refreshNavbar'); // Replace 'functionName' with the actual function name you want to emit
        Livewire.emit('refreshSidebar'); // Replace 'functionName' with the actual function name you want to emit

        }, 10000);
</script>
@endsection