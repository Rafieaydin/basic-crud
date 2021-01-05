    <nav class="mt-2">
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
            <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
            <a href="#" class="d-block text-white">Alexander Pierce</a>
            </div>
        </div>
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
                with font-awesome or any other icon font library -->
            <li class="nav-item has-treeview">
                <a href="{{url('/')}}" class="nav-link">
                <i class="nav-icon far fa-plus-square"></i>
                <p>
                    crud
                    <i class="fas fa-angle-left right"></i>
                </p>
                </a>
                <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="{{url('/builder')}}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>crud query builder</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{url('/eloquent')}}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>crud eloquent</p>
                    </a>
                </li>
                </ul>
            </li>
</nav>
