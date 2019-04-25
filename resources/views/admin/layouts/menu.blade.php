<div class="navbar-default sidebar" role="navigation">
        <div class="sidebar-nav navbar-collapse">
            <ul class="nav" id="side-menu">
                <li class="sidebar-search">
                    <div class="input-group custom-search-form">
                        <input type="text" class="form-control" placeholder="Search...">
                        <span class="input-group-btn">
                            <button class="btn btn-default" type="button">
                                <i class="fa fa-search"></i>
                            </button>
                        </span>
                    </div>
                    <!-- /input-group -->
                </li>
                <li>
                    <a href="{{route('home.admin')}}"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                </li>
                <li>
                    <a href="{{route('list.cate')}}"><i class="fa fa-bar-chart-o fa-fw"></i> Category<span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level collapse">
                        <li>
                            <a href="{{route('list.cate')}}">List Category</a>
                        </li>
                        <li>
                            <a href="{{route('create.cate')}}">Create Category</a>
                        </li>
                    </ul>
                    <!-- /.nav-second-level -->
                </li>
                <li>
                    <a href="{{route('list.cate')}}"><i class="fa fa-bar-chart-o fa-fw"></i> Invoice<span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level collapse">
                        <li>
                            <a href="{{route('list.invoice')}}">List Ivoice</a>
                        </li>
                    </ul>
                    <!-- /.nav-second-level -->
                </li>
                <li>
                    <a href="#"><i class="fa fa-cube fa-fw"></i> Product<span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level collapse">
                        <li>
                            <a href="{{route('list.product')}}">List Product</a>
                        </li>
                        <li>
                            <a href="{{route('create.product')}}">Create Product</a>
                        </li>
                    </ul>
                    <!-- /.nav-second-level -->
                </li>
                <li>
                    <a href="#"><i class="fa fa-cube fa-fw"></i> New<span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level collapse">
                        <li>
                            <a href="{{asset(route('list.new'))}}">List New</a>
                        </li>
                        <li>
                            <a href="{{asset(route('create.new'))}}">Create New</a>
                        </li>
                    </ul>
                    <!-- /.nav-second-level -->
                </li>
                <li>
                    <a href="#"><i class="fa fa-users fa-fw"></i> User<span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level collapse">
                        <li>
                            <a href="{{asset(route('list.user'))}}">List User</a>
                        </li>
                        <li>
                            <a href="{{asset(route('create.user'))}}">Create User</a>
                        </li>
                    </ul>
                    <!-- /.nav-second-level -->
                </li>
                 <li>
                    <a href="#"><i class="fa fa-users fa-fw"></i> Slide<span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level collapse">
                        <li>
                            <a href="{{asset(route('list.slide'))}}">List Slide</a>
                        </li>
                        <li>
                            <a href="{{asset(route('create.slide'))}}">Create Slide</a>
                        </li>
                    </ul>
                    <!-- /.nav-second-level -->
                </li>
                 <li>
                    <a href="#"><i class="fa fa-users fa-fw"></i> Status<span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level collapse">
                        <li>
                            <a href="{{asset(route('list.status'))}}">List Status</a>
                        </li>
                        <li>
                            <a href="{{asset(route('create.status'))}}">Create Status</a>
                        </li>
                    </ul>
                    <!-- /.nav-second-level -->
                </li>
            </ul>
        </div>
        <!-- /.sidebar-collapse -->
    </div>
