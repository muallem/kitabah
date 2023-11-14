
<!-- Sidbar menu -->
<div id="left-sidebar" class="sidebar">
    <div class="user-account p-3 mb-3">
        <div class="d-flex mb-3 pb-3 border-bottom align-items-center">
            <div class="dropdown flex-grow-1">
                <span>Welcome,</span>
                <a href="#" class="dropdown-toggle user-name" data-bs-toggle="dropdown"><strong>{{Session::get('user_name')}}</strong></a>
                <ul class="dropdown-menu p-2 shadow-sm">
                    <li><a href="{{route('logout')}}"><i class="fa fa-power-off me-2"></i>Logout</a></li>
                </ul>
            </div>
        </div>
    </div>

    <!-- nav tab: menu list -->
    <ul class="nav nav-tabs text-center mb-2" role="tablist">
        @if(\App\Helpers\AuthHelper::isAdmin())
            <li class="nav-item flex-fill"><a class="nav-link active" data-bs-toggle="tab" href="#admin_menu" role="tab">Admin</a></li>
        @else
            <li class="nav-item flex-fill"><a class="nav-link active" id="student_menu_nav_link" data-bs-toggle="tab" href="#student_menu" role="tab">Student</a></li>
        @endif
    </ul>
    <!-- nav tab: content -->
    <div class="tab-content px-0">
        @if(\App\Helpers\AuthHelper::isAdmin())
            <div class="tab-pane fade show active" id="student_menu" role="tabpanel" >
                <nav class="sidebar-nav">
                    <ul class="metismenu list-unstyled">
                        @foreach($thesis as $item)
                            <li>
                                <a href="#" class="has-arrow" aria-expanded="false"><i class="fa fa-briefcase"></i><span>{{$item->user_login}}</span> {{($item->group) ? '' ; '<span class="notification-dot"></span>'}}</a>
                                <ul class="list-unstyled mm-collapse">
                                    <li><a href="acc-payments.html">Judul</a></li>
                                    <li><a href="acc-expenses.html">Materi</a></li>
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
                        <li><a href="{{route('student.kual')}}"><i class="fa fa-list-ul"></i><span>Kual</span></a></li>
                        <li><a href="{{route('student.kuan')}}"><i class="fa fa-list-ul"></i><span>Kuan</span></a></li>
                        <li><a href="{{route('student.rnd')}}"><i class="fa fa-list-ul"></i><span>RND</span></a></li>
                    </ul>
                </nav>
            </div>
        @endif        
    </div>
</div>