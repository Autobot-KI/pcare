<div class="sidebar sidebar-dark sidebar-fixed" id="sidebar">
    <div class="sidebar-brand d-none d-md-flex">
        <a href="{{route("backend.dashboard")}}">
            <img class="sidebar-brand-full" src="{{asset("img/backend-logo.jpg")}}" height="46" alt="{{ app_name() }}">
            <img class="sidebar-brand-narrow" src="{{asset("img/backend-logo-square.jpg")}}" height="46"
                alt="{{ app_name() }}">
        </a>
    </div>
    <div class="sidebar sidebar-dark sidebar-fixed" id="sidebar">
        <div class="sidebar-brand d-none d-md-flex">
            <a href="/admin/dashboard">
                <img class="sidebar-brand-full" src="{{ asset('img/WhiteLogo.svg') }}" height="112"
                    alt="PCARE BPJS">
                <img class="sidebar-brand-narrow" src="{{ asset('img/WhiteLogo.svg') }}" height="112"
                    alt="PCARE BPJS">
            </a>
        </div>

        <ul class="sidebar-nav" data-coreui="navigation" data-simplebar="init">
            <div class="simplebar-wrapper" style="margin: 0px;">
                <div class="simplebar-height-auto-observer-wrapper">
                    <div class="simplebar-height-auto-observer"></div>
                </div>

                <div class="simplebar-mask">
                    <div class="simplebar-offset" style="right: 0px; bottom: 0px;">
                        <div class="simplebar-content-wrapper" tabindex="0" role="region"
                            aria-label="scrollable content" style="height: 100%; overflow: hidden scroll;">
                            <div class="simplebar-content" style="padding: 0px;">
                                <li class="nav-item"><a class="nav-link" href="http://127.0.0.1:8000/admin/dashboard"><i
                                            class="nav-icon cil-speedometer"></i> Dashboard</a></li>


                                <li class="nav-group"><a class="nav-link nav-group-toggle" href="#"><i
                                            class="nav-icon fas fa-file-alt"></i>TRUSK MASK</a>
                                    <ul class="nav-group-items">
                                        <li class="nav-group"><a class="nav-link nav-group-toggle" href="#"><i class="nav-icon fas fa-file-alt"></i>TRUSK MASK</a>
                                         <ul class="nav-group-items">

                                        </ul>
                                </li>
                                    </ul>
                                </li>
                                <li class="nav-item"><a class="nav-link" href="http://127.0.0.1:8000/admin/tags"><i
                                            class="nav-icon fas fa-tags"></i> Tags</a></li>
                                <li class="nav-item"><a class="nav-link" href="http://127.0.0.1:8000/admin/comments"><i
                                            class="nav-icon fas fa-comments"></i> Comments</a></li>
                                <li class="nav-item"><a class="nav-link"
                                        href="http://127.0.0.1:8000/admin/notifications"><i
                                            class="nav-icon fas fa-bell"></i> Notifications</a></li>
                                <li class="nav-title"><a>Management</a></li>
                                <li class="nav-item active show"><a class="nav-link active show"
                                        href="http://127.0.0.1:8000/admin/settings"><i class="nav-icon fas fa-cogs"></i>
                                        Settings</a></li>
                                <li class="nav-item"><a class="nav-link" href="http://127.0.0.1:8000/admin/backups"><i
                                            class="nav-icon fas fa-archive"></i> Backups</a></li>
                                <li class="nav-group"><a class="nav-link nav-group-toggle" href="#"><i
                                            class="nav-icon cil-shield-alt"></i> Access Control</a>
                                    <ul class="nav-group-items">
                                        <li class="nav-item"><a class="nav-link"
                                                href="http://127.0.0.1:8000/admin/users"><i
                                                    class="nav-icon cil-people"></i> Users</a></li>
                                        <li class="nav-item"><a class="nav-link"
                                                href="http://127.0.0.1:8000/admin/roles"><i
                                                    class="nav-icon cil-people"></i> Roles</a></li>
                                    </ul>
                                </li>
                                <li class="nav-group"><a class="nav-link nav-group-toggle" href="#"><i
                                            class="nav-icon cil-list-rich"></i> Log Viewer</a>
                                    <ul class="nav-group-items">
                                        <li class="nav-item"><a class="nav-link"
                                                href="http://127.0.0.1:8000/admin/log-viewer"><i
                                                    class="nav-icon cil-list"></i> Dashboard</a></li>
                                        <li class="nav-item"><a class="nav-link"
                                                href="http://127.0.0.1:8000/admin/log-viewer/logs"><i
                                                    class="nav-icon cil-list-numbered"></i> Logs by Days</a></li>
                                    </ul>
                                </li>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="simplebar-placeholder" style="width: 256px; height: 518px;"></div>
            </div>
            <div class="simplebar-track simplebar-horizontal" style="visibility: hidden;">
                <div class="simplebar-scrollbar simplebar-visible" style="width: 0px; display: none;"></div>
            </div>
            <div class="simplebar-track simplebar-vertical" style="visibility: visible;">
                <div class="simplebar-scrollbar simplebar-visible"
                    style="height: 338px; display: block; transform: translate3d(0px, 0px, 0px);"></div>
            </div>
        </ul>

        <button class="sidebar-toggler" type="button" data-coreui-toggle="unfoldable"></button>
    </div>

    <button class="sidebar-toggler" type="button" data-coreui-toggle="unfoldable"></button>
</div>