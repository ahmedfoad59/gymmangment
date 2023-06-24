            
            <!-- Page sidebar Start-->
            <div class="page-sidebar">
                <div class="main-header-left d-none d-lg-block">
                    <div class="logo-wrapper">
                        <a href="index.html">
                            <img class="d-none d-lg-block blur-up lazyloaded"
                                src="assets/images/dashboard/multikart-logo.png" alt="">
                        </a>
                    </div>
                </div>
                <div class="sidebar custom-scrollbar">
                    <a href="javascript:void(0)" class="sidebar-back d-lg-none d-block"><i class="fa fa-times"
                            aria-hidden="true"></i></a>
                    <div class="sidebar-user">
                        <img class="img-60" src={{asset("admin/images/hamza.jpg")}} alt="#">
                        <div>
                            <h6 class="f-14">Hamza Elsayed</h6>
                            <p>general manager.</p>
                        </div>
                    </div>
                    <ul class="sidebar-menu">
                        <li>
                            <a class="sidebar-header" href="{{route('admin.home')}}">
                                <i data-feather="home"></i>
                                <span>Dashboard</span>
                            </a>
                        </li>
            

                        <li>
                            <a class="sidebar-header" href="javascript:void(0)">
                                <i data-feather="box"></i>
                                <span>Users</span>
                                <i class="fa fa-angle-right pull-right"></i>
                            </a>
                            <ul class="sidebar-submenu">
                                <li>
                                    <a href="{{route('admin.users-list')}}"><i class="fa fa-circle"></i>Users List
                                    </a>
                                </li>

                                <li>
                                    <a href="{{route('admin.add-user')}}"><i class="fa fa-circle"></i>Add User
                                    </a>
                                </li>

                            </ul>
                        </li>
            

                        <li>
                            <a class="sidebar-header" href="javascript:void(0)">
                                <i data-feather="settings"></i>
                                <span>Muscles</span>
                                <i class="fa fa-angle-right pull-right"></i>
                            </a>
                            <ul class="sidebar-submenu">
                                <li>
                                    <a href="{{route('admin.muscles-list')}}"><i class="fa fa-circle"></i>Muscles List
                                    </a>
                                </li>

                                <li>
                                    <a href="{{route('admin.add-muscle')}}"><i class="fa fa-circle"></i>Add Muscle
                                    </a>
                                </li>

                            </ul>
                        </li>


                        <li>
                            <a class="sidebar-header" href="javascript:void(0)">
                                <i data-feather="archive"></i>
                                <span>Exercises</span>
                                <i class="fa fa-angle-right pull-right"></i>
                            </a>
                            <ul class="sidebar-submenu">
                                <li>
                                    <a href="{{route('admin.exercises-list')}}"><i class="fa fa-circle"></i>Exercises List
                                    </a>
                                </li>

                                <li>
                                    <a href="{{route('admin.add-exercise')}}"><i class="fa fa-circle"></i>Add Exercise
                                    </a>
                                </li>

                            </ul>
                        </li>
                        
                        <li>
                            <a class="sidebar-header" href="javascript:void(0)">
                                <i data-feather="archive"></i>
                                <span>Plans</span>
                                <i class="fa fa-angle-right pull-right"></i>
                            </a>
                            <ul class="sidebar-submenu">
                                <li>
                                    <a href="{{route('admin.plans-list')}}"><i class="fa fa-circle"></i>Plans List
                                    </a>
                                </li>

                                <li>
                                    <a href="{{route('admin.add-plan')}}"><i class="fa fa-circle"></i>Add Plan
                                    </a>
                                </li>

                            </ul>
                        </li>

                        <li>
                            <a class="sidebar-header" href="javascript:void(0)">
                                <i data-feather="archive"></i>
                                <span>Coashes</span>
                                <i class="fa fa-angle-right pull-right"></i>
                            </a>
                            <ul class="sidebar-submenu">
                                <li>
                                    <a href="{{route('admin.coashes-list')}}"><i class="fa fa-circle"></i>Coashes List
                                    </a>
                                </li>

                                <li>
                                    <a href="{{route('admin.add-coash')}}"><i class="fa fa-circle"></i>Add Coash
                                    </a>
                                </li>

                            </ul>
                        </li>
            
                        {{-- <li>
                            <a class="sidebar-header" href="javascript:void(0)">
                                <i data-feather="clipboard"></i>
                                <span>Pages</span>
                                <i class="fa fa-angle-right pull-right"></i>
                            </a>

                        </li>
            
                        <li>
                            <a class="sidebar-header" href="media.html">
                                <i data-feather="camera"></i>
                                <span>Media</span>
                            </a>
                        </li>

    
                        <li>
                            <a class="sidebar-header" href="javascript:void(0)"><i
                                    data-feather="settings"></i><span>Settings</span><i
                                    class="fa fa-angle-right pull-right"></i></a>
                            <ul class="sidebar-submenu">
                                <li>
                                    <a href="profile.html"><i class="fa fa-circle"></i>Profile
                                    </a>
                                </li>
                            </ul>
                        </li> --}}
{{--             
                        <li>
                            <a class="sidebar-header" href="logout.html">
                                <i data-feather="log-in"></i>
                                <span>Logout</span>
                            </a>
                        </li> --}}
                    </ul>
                </div>
            </div>
            <!-- Page Sidebar Ends-->