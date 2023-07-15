
@push('css')
<style>

    .navbar{
        z-index: 999;
    }
         .sidebar {
        position: fixed;
        padding-top: 70px;
         /* Adjust the value as needed to create the desired margin-top */
        left: 0;
        width: 200px;
        height: 100%;
        background-color: #f1f1f1;
        z-index: 99; /* Ensure the sidebar appears above other elements */
    }
    .sidebar2{
        display: none;
    }
    
    .sidebar ul {
        list-style-type: none;
        padding: 0;
    }
    
    .sidebar ul li {
        padding: 10px;
    }
    
    .sidebar ul li a {
        text-decoration: none;
        color: #333;
    }
         /* Existing CSS styles for the sidebar */
    
    @media (max-width: 767px) {
        /* Hide the sidebar and display a hamburger menu */
        .sidebar {
            display: none;
        }
        .sidebar2 {
            display: block;
        }
        
        /* Show the hamburger menu icon */
        .hamburger-menu {
            display: block;
            position: fixed;
            top: 10px;
            left: 10px;
            width: 30px;
            height: 30px;
            background-color: #f1f1f1;
        }
    }
    </style>
@endpush
<ul class="navbar-nav ms-auto">
    @foreach($thesis as $item)
        <li class="nav-item"><a href="#">{{$item->user->user_login}}</a></li>
    @endforeach
</ul>