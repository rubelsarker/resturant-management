<div class="sidebar" data-color="purple" data-background-color="white" data-image="{{url('')}}/assets/backend/assets/img/sidebar-1.jpg">

    <div class="logo">
        <a href="{{route('admin.dashboard')}}" class="simple-text logo-normal">
           Dashboard
        </a>
    </div>
    <div class="sidebar-wrapper">
        <ul class="nav">
            <li class="nav-item {{Request::is('admin/dashboard*') ? 'active' : ''}}">
                <a class="nav-link" href="{{route('admin.dashboard')}}">
                    <i class="material-icons">dashboard</i>
                    <p>Dashboard</p>
                </a>
            </li>
            <li class="nav-item {{Request::is('admin/slider*') ? 'active' : ''}} ">
                <a class="nav-link" href="{{route('slider.index')}}">
                    <i class="material-icons">slideshow</i>
                    <p>Sliders</p>
                </a>
            </li>
            <li class="nav-item {{Request::is('admin/category*') ? 'active' : ''}} ">
                <a class="nav-link" href="{{route('category.index')}}">
                    <i class="material-icons">content_paste</i>
                    <p>Category</p>
                </a>
            </li>
            <li class="nav-item {{Request::is('admin/item*') ? 'active' : ''}} ">
                <a class="nav-link" href="{{route('item.index')}}">
                    <i class="material-icons">content_paste</i>
                    <p>Item</p>
                </a>
            </li>
            <li class="nav-item {{Request::is('admin/reservation*') ? 'active' : ''}} ">
                <a class="nav-link" href="{{route('reservation.index')}}">
                    <i class="material-icons">notifications</i>
                    <p>Reservations</p>
                </a>
            </li>
            <li class="nav-item {{Request::is('admin/contact*') ? 'active' : ''}} ">
                <a class="nav-link" href="{{route('contact.index')}}">
                    <i class="material-icons">message</i>
                    <p>Contact Message</p>
                </a>
            </li>
        </ul>
    </div>
</div>