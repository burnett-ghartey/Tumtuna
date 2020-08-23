<div class="nav-left-sidebar sidebar-dark">
    <div class="menu-list">
        <nav class="navbar navbar-expand-lg navbar-light">
            <a class="d-xl-none d-lg-none" href="#">Dashboard</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav flex-column">
                    <li class="nav-divider">
                        Menu
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link active" href="{{ url('/admin')}}" aria-expanded="false" aria-controls=""><i
                                class="fa fa-fw fa-rocket"></i>Dashboard <span class="badge badge-success">6</span></a>
                    </li>
                   
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/admin/categories')}}" aria-expanded="false"
                            aria-controls="submenu-3"><i class="fas fa-fw fa-table"></i>Categories</a>
                    </li>
                    @if(Auth::user()->isAdmin())
                    <li class="nav-item ">
                        <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false"
                            data-target="#submenu-4" aria-controls="submenu-4"><i
                                class="fa fa-fw fa-user-circle"></i>Users</a>
                        <div id="submenu-4" class="collapse submenu" style="">
                            <ul class="nav flex-column">
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ url('/admin/users')}}">All users</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ url('/admin/users/create')}}">New user</a>
                                </li>

                            </ul>
                        </div>
                    </li>
                    @endif
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('reviews.index')}}" aria-expanded="false"
                            aria-controls="submenu-3"><i class="fas fa-fw fa-comments"></i>Reviews</a>
                    </li>


                </ul>
            </div>
        </nav>
    </div>
</div>
