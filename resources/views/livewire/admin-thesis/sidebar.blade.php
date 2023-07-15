
<ul class="navbar-nav ms-auto">
    @foreach($thesis as $item)
        <li class="nav-item"><a href="#">{{$thesis->user->user_login}}</a></li>
    @endforeach
</ul>