
<!-- nav tab: content -->

<div class="tab-content px-0">
    @if(\App\Helpers\AuthHelper::isAdmin())
        <div class="tab-pane fade show active" id="student_menu" role="tabpanel" >
            <nav class="sidebar-nav">
                <ul class="metismenu list-unstyled">
                    @foreach($thesis as $item)
                        <li>
                            <a href="#" class="has-arrow text-decoration-none text-dark" aria-expanded="false">
                                <i class="fa fa-briefcase"></i>
                                <span>{{$item['user_login']}}</span> 
                                {!! ($item['group']) ? '' : '<i class="fa fa-exclamation-circle"></i>' ; !!}

                                @if($item['materi_count'] > 0 )
                                    <span class="badge rounded-pill bg-primary">
                                        {{ $item['materi_count'] }}
                                    </span>
                                @endif
                            </a>
                            <ul class="list-unstyled mm-collapse">
                                <li><a href="{{route('admin.judul', ['thesis_id' => $item['id']])}}">Judul {!! ($item['group']) ? '' : '<i class="fa fa-exclamation-circle"></i>' ; !!}</a></li>
                                <li><a href="{{route('admin.materi', ['thesis_id' => $item['id']])}}">Materi {!! ($item['materi_count'] > 0) ? "<span class='badge rounded-pill bg-primary'>". $item['materi_count'] ."</span>" : "" ; !!}</a></li>
                            </ul>
                        </li>
                    @endforeach
                </ul>
            </nav>
        </div>
    @else
        <div class="tab-pane fade show active" id="admin_menu" role="tabpanel" >
            <nav class="sidebar-nav">
                <ul class="metismenu list-unstyled">
                    <li><a href="{{route('student.index')}}"><i class="fa fa-pen"></i><span>Judul</span></a></li>
                    @switch($thesis->group)
                        @case(\App\Models\Judul::TYPE_KUAN)
                            <li><a href="{{route('student.kuan')}}"><i class="fa fa-list-ul"></i><span>Kuan</span></a></li>
                            
                            @break
                        @case(\App\Models\Judul::TYPE_KUAL)
                            <li><a href="{{route('student.kual')}}"><i class="fa fa-list-ul"></i><span>Kual</span></a></li>
                            
                            @break
                        @case(\App\Models\Judul::TYPE_RND)
                            <li><a href="{{route('student.rnd')}}"><i class="fa fa-list-ul"></i><span>RND</span></a></li>
                            
                            @break
                    @endswitch
                </ul>
            </nav>
        </div>
    @endif        
</div>

@push('scripts')
    <script>
        // Set up a timer to trigger Livewire refresh every 10 seconds
        setInterval(function () {
            @this.refreshMenu();
            alert("oi menu")
        }, 10000);
    </script>
@endpush