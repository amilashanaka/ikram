<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="/admin/home" class="brand-link">
        <img src="{{asset('Admin/dist/img/AdminLTELogo.png')}}" alt="Ikram_Admin_logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">Ikram Admin</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
                     with font-awesome or any other icon font library -->
                <li class="nav-item has-treeview menu-open">
                    <a href="index.php" class="nav-link active">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            DASHBOARD
                        </p>
                    </a>
                </li>

                <li class="nav-item  ">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-users"></i>
                        <p>
                            ADMIN USERS

                        </p>
                    </a>
                    <ul class="nav nav-treeview">


                    </ul>
                </li>

                <li class="nav-item ">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-users"></i>
                        <p>
                            USERS

                        </p>
                    </a>

                </li>

                <li class="nav-item ">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-folder"></i>
                        <p>
                            FORMS

                        </p>
                    </a>

                </li>
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-boxes"></i>
                        <p>
                            PRODUCTS
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="#" class="nav-link" style="font-size: 13px;">
                                <i class="fa fa-list"></i>
                                <p>Certified List</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="#" class="nav-link" style="font-size: 13px;">
                                <i class="fa fa-list"></i>
                                <p>Standard List</p>
                            </a>
                        </li>


                        <br>
                    </ul>
                </li>

                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-sticky-note"></i>
                        <p>
                            PAGES SETTINGS
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="#" class="nav-link" style="font-size: 13px;">
                                <i class="fa fa-home nav-icon"></i>
                                <p>Home</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="comments_approved_list.php" class="nav-link" style="font-size: 13px;">
                                <i class="fa fa-list nav-icon"></i>
                                <p>Relevant-acts-directives</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="comments_rejected_list.php" class="nav-link" style="font-size: 13px;">
                                <i class="fa fa-list nav-icon"></i>
                                <p>Guides</p>
                            </a>
                        </li>

                        <br>
                    </ul>
                </li>



                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-cogs"></i>
                        <p>
                            SETTINGS
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>

                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="currency_list.php" class="nav-link" style="font-size: 13px;">
                                <i class="fas fa-cog nav-icon"></i>
                                <p> Currency Settings</p>
                            </a>
                        </li>


                        <li class="nav-item">
                            <a href="category_list.php" class="nav-link" style="font-size: 13px;">
                                <i class="fas fa-cog nav-icon"></i>
                                <p>Category Settings</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="slider_list.php" class="nav-link" style="font-size: 13px;">
                                <i class="fas fa-cog nav-icon"></i>
                                <p>Slider Settings</p>
                            </a>
                        </li>
                        <br>
                    </ul>
                </li>

                <li class="nav-item">
                    <a href="javascript:logout()" class="nav-link">
                        <i class="nav-icon  fas  fa-sign-out-alt"></i>
                        <p>
                            LOG OUT
                            <span class="badge badge-info right"></span>
                        </p>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
