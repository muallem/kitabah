
<div class="row g-3 clearfix">
    <div class="col-lg-12 col-md-12">
        <div class="card mb-3 single_post">
            <div class="card-body">
                <h4>{{$data_judul->wpjs_users->user_login}}</h4>
            </div>
        </div>
        <div class="card mb-3">
            <div class="card-body">
                <h6>Judul : </h6>
                <blockquote class="blockquote border border-primary p-3">
                    <p>{{$data_judul->title}}</p>
                </blockquote>
                <hr>
                <div class="w-100">
                    <label class="form-label">Feedback</label>
                    
                    <select class="form-control" id="select_feedback">
                        @foreach (\App\Models\Judul::TYPE_CHOICE as $key => $value)
                            <option value="{{ $key }}" {{($key === $data_judul->group) ? 'selected' : ''}}>{{ $value }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
        </div>
    </div>
</div>

@push('js')
    <script>
        $(() => {
            $('#select_feedback').on('change', async function(e) {
                let feedback = $('#select_feedback').val();
                await @this.call('setFeedback', feedback);
            });
        })
    </script>
@endpush