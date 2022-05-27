<div class="sidebar">
    <nav class="sidebar-nav">
        <ul class="nav">
            <li class="nav-title">
                @lang('menus.backend.sidebar.general')
            </li>
            <li class="nav-item">
                <a class="nav-link {{
                    active_class(Route::is('admin/dashboard'))
                }}" href="{{ route('admin.dashboard') }}">
                    <i class="nav-icon fas fa-tachometer-alt"></i>
                    @lang('menus.backend.sidebar.dashboard')
                </a>
            </li>

            @if ($logged_in_user->isAdmin())
                <li class="nav-title">
                    @lang('menus.backend.sidebar.system')
                </li>



                <li class="divider"></li>

                <li class="nav-item nav-dropdown {{
                    active_class(Route::is('admin/log-viewer*'), 'open')
                }}">
                        <a class="nav-link nav-dropdown-toggle {{
                            active_class(Route::is('admin/log-viewer*'))
                        }}" href="#">
                        <i class="nav-icon fas fa-list"></i> @lang('menus.backend.log-viewer.main')
                    </a>

                    <ul class="nav-dropdown-items">
                        <li class="nav-item">
                            <a class="nav-link {{
                            active_class(Route::is('admin/log-viewer'))
                        }}" href="{{ route('log-viewer::dashboard') }}">
                                @lang('menus.backend.log-viewer.dashboard')
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{
                            active_class(Route::is('admin/log-viewer/logs*'))
                        }}" href="{{ route('log-viewer::logs.list') }}">
                                @lang('menus.backend.log-viewer.logs')
                            </a>
                        </li>
                    </ul>
                </li>

                <!-- Website Section -->
                <li class="divider"></li>
                <li class="nav-item nav-dropdown {{active_class(Route::is('admin/Website'), 'open')}}">
                
                    <a class="nav-link nav-dropdown-toggle {{active_class(Route::is('admin/Website*'))}}" href="#">
                        <i class="nav-icon fas fa-rss"></i> @lang('menus.backend.sidebar.Home')
                    </a>
                    <ul class="nav-dropdown-items">
                                <!-- Main Header -->
                                <li class="nav-item">
                                        <a class="nav-link {{
                                        active_class(Route::is('admin/Website/mainSection*'))
                                    }}" href="{{ route('admin.MainsectionTable') }}">
                                            @lang('labels.backend.access.Home.Main Section')
                                        </a>
                                </li>
                                <!-- Aboutus -->
                                <li class="nav-item nav-dropdown {{active_class(Route::is('admin/Website/aboutus'), 'open')}}">
                                        <a class="nav-link nav-dropdown-toggle {{active_class(Route::is('admin/Website/aboutus*'))}}" href="#">
                                            @lang('labels.backend.access.Home.About Us Company')
                                        </a>

                                        <ul class="nav-dropdown-items">

                                            <!-- Section one -->
                                                <li class="nav-item">
                                                        <a class="nav-link {{
                                                        active_class(Route::is('admin/Website/mainSection*'))
                                                    }}" href="{{ route('admin.AboutussectionTablesection1') }}">
                                                            @lang('labels.backend.access.Home.Section1')
                                                        </a>
                                                </li>

                                            <!-- section Two -->
                                            <li class="nav-item">
                                                        <a class="nav-link {{
                                                        active_class(Route::is('admin/Website/mainSection*'))
                                                    }}" href="{{ route('admin.AboutussectionMain') }}">
                                                            @lang('labels.backend.access.Home.Section2')
                                                        </a>
                                                </li>
                                            <!-- Section Three -->
                                                <li class="nav-item">
                                                        <a class="nav-link {{
                                                        active_class(Route::is('admin/Website/mainSection*'))
                                                    }}" href="{{ route('admin.aboutussection3') }}">
                                                            @lang('labels.backend.access.Home.Section3')
                                                        </a>
                                            </li>
                                    </ul>

                                </li>
                                <!-- servicess -->
                                            <li class="nav-item">
                                                        <a class="nav-link {{
                                                        active_class(Route::is('admin/Website/mainSection*'))
                                                    }}" href="{{ route('admin.ServicessTable') }}">
                                                            @lang('labels.backend.access.Home.Servicess')
                                                        </a>
                                                </li>

                                                
                                                 <!-- Project  section -->
                            <li class="nav-item nav-dropdown {{active_class(Route::is('admin/Website/interiorde​sign'), 'open')}}">
                                        <a class="nav-link nav-dropdown-toggle {{active_class(Route::is('admin/Website/interior de​sign*'))}}" href="{{ route('admin.AboutsectionTable') }}">
                                            @lang('labels.backend.access.Home.Project section')
                                        </a>
                            <ul class="nav-dropdown-items">
                                <!-- Main Header -->
                                    <li class="nav-item">
                                            <a class="nav-link {{
                                            active_class(Route::is('admin/Website/mainSection*'))
                                        }}" href="{{ route('admin.MainsectionPage3') }}">
                                                @lang('labels.backend.access.Home.Main Section')
                                            </a>
                                    </li>
                                <!-- summaryOf Project -->
                                <li class="nav-item">
                                            <a class="nav-link {{
                                            active_class(Route::is('admin/Website/mainSection*'))
                                        }}" href="{{ route('admin.Aboutussection') }}">
                                                @lang('labels.backend.access.Home.summaryOfProject')
                                            </a>
                                    </li>
                                    
                                    
                            </ul>
                                    </li>
                                
                            </ul>
                                <!-- Project page -->
                                <li class="nav-item nav-dropdown {{active_class(Route::is('admin/Website'), 'open')}}">
                                <a class="nav-link nav-dropdown-toggle {{active_class(Route::is('admin/Website*'))}}" href="#">
                                    <i class="nav-icon fas fa-rss"></i> @lang('labels.backend.access.Home.All Project')
                                </a>
                                <ul class="nav-dropdown-items">
                                                <li class="nav-item">
                                                        <a class="nav-link {{
                                                        active_class(Route::is('admin/Website/mainSection*'))
                                                    }}" href="{{ route('admin.fuelstations') }}">
                                                            @lang('labels.backend.access.Home.fuel stations')
                                                        </a>
                                                </li>
                                                <li class="nav-item">
                                                        <a class="nav-link {{
                                                        active_class(Route::is('admin/Website/mainSection*'))
                                                    }}" href="{{ route('admin.industrialfacilities') }}">
                                                            @lang('labels.backend.access.Home.industrial facilities')
                                                        </a>
                                                </li>
                                                <li class="nav-item">
                                                        <a class="nav-link {{
                                                        active_class(Route::is('admin/Website/mainSection*'))
                                                    }}" href="{{ route('admin.medicalfacilities') }}">
                                                            @lang('labels.backend.access.Home.medical facilities')
                                                        </a>
                                                </li>
                                                <li class="nav-item">
                                                        <a class="nav-link {{
                                                        active_class(Route::is('admin/Website/mainSection*'))
                                                    }}" href="{{ route('admin.ProjectFour') }}">
                                                            @lang('labels.backend.access.Home.educational and administrative facilities')
                                                        </a>
                                                </li>



                                </ul>



                            </li>
                        
                            <!-- contact forةس -->
                            <li class="nav-item">
                                        <a class="nav-link {{
                                        active_class(Route::is('admin/Website/mainSection*'))
                                    }}" href="{{ route('admin.contactshow') }}">
                                            @lang('labels.backend.access.Home.Conact')
                                        </a>

                            </li>
                           
                            <!-- job Forms -->
                                    <li class="nav-item">
                                        <a class="nav-link {{active_class(Route::is('admin/Website/mainSection*'))}}" href="{{ route('admin.Jobforms') }}">
                                            @lang('labels.backend.access.Home.jobForms')
                                        </a>
                                    </li>

                            <!-- detailed about website Address/Phone/Email/logo -->
                            <li class="nav-item">
                                        <a class="nav-link {{
                                        active_class(Route::is('admin/Website/mainSection*'))
                                    }}" href="{{ route('admin.Websitedetails') }}">
                                            @lang('labels.backend.access.Home.website details')
                                        </a>
                            </li>

                            <!-- Social Media -->
                            <li class="nav-item">
                                        <a class="nav-link {{
                                        active_class(Route::is('admin/Website/mainSection*'))
                                    }}" href="{{ route('admin.SocialMediaTable') }}">
                                            @lang('labels.backend.access.Home.Social Media')
                                        </a>
                            </li>


                            <!-- Recent Projects -->
                            <li class="nav-item">
                            <a class="nav-link {{active_class(Route::is('admin/Website/mainSection*'))}}" href="{{ route('admin.furnitureTable') }}">

                                            @lang('labels.backend.access.Home.Recent Projects')
                                        </a>
                            </li>
                        </li>
                    </ul>
                </li>
        @endif

        </ul>
    </nav>

    <button class="sidebar-minimizer brand-minimizer" type="button"></button>
</div><!--sidebar-->
