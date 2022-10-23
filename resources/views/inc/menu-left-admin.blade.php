<!-- Sidebar -->
<!--
Sidebar Mini Mode - Display Helper classes

    Adding 'smini-hide' class to an element will make it invisible (opacity: 0) when the sidebar is in mini mode
    Adding 'smini-show' class to an element will make it visible (opacity: 1) when the sidebar is in mini mode
        If you would like to disable the transition animation, make sure to also add the 'no-transition' class to your element

    Adding 'smini-hidden' to an element will hide it when the sidebar is in mini mode
    Adding 'smini-visible' to an element will show it (display: inline-block) only when the sidebar is in mini mode
    Adding 'smini-visible-block' to an element will show it (display: block) only when the sidebar is in mini mode
-->
<nav id="sidebar" aria-label="Main Navigation">
    <!-- Side Header -->
    <div class="content-header">
        <!-- Logo -->
        <a class="font-semibold text-dual" href="/">
{{--          <span class="smini-visible">--}}
{{--            <i class="fa fa-circle-notch text-primary"></i>--}}
{{--          </span>--}}
{{--            <span class="smini-hide fs-5 tracking-wider">One<span class="fw-normal">UI</span></span>--}}
<img src="{{URL::asset('/assets/images/logo-thai-post.png')}}" style="height: 3rem">
</a>
<!-- END Logo -->

<!-- Extra -->
<div class="d-none">
    <!-- Dark Mode -->
    <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
    <a class="btn btn-sm btn-alt-secondary" data-toggle="layout" data-action="dark_mode_toggle" href="javascript:void(0)">
        <i class="far fa-moon"></i>
    </a>
    <!-- END Dark Mode -->

    <!-- Options -->
    <div class="dropdown d-inline-block ms-1">
        <a class="btn btn-sm btn-alt-secondary" id="sidebar-themes-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="#">
            <i class="far fa-circle"></i>
        </a>
        <div class="dropdown-menu dropdown-menu-end fs-sm smini-hide border-0" aria-labelledby="sidebar-themes-dropdown">
            <!-- Color Themes -->
            <!-- Layout API, functionality initialized in Template._uiHandleTheme() -->
            <a class="dropdown-item d-flex align-items-center justify-content-between font-medium" data-toggle="theme" data-theme="default" href="#">
                <span>Default</span>
                <i class="fa fa-circle text-default"></i>
            </a>
            <a class="dropdown-item d-flex align-items-center justify-content-between font-medium" data-toggle="theme" data-theme="{{ mix('css/themes/amethyst.css') }}" href="#">
                <span>Amethyst</span>
                <i class="fa fa-circle text-amethyst"></i>
            </a>
            <a class="dropdown-item d-flex align-items-center justify-content-between font-medium" data-toggle="theme" data-theme="{{ mix('css/themes/city.css') }}" href="#">
                <span>City</span>
                <i class="fa fa-circle text-city"></i>
            </a>
            <a class="dropdown-item d-flex align-items-center justify-content-between font-medium" data-toggle="theme" data-theme="{{ mix('css/themes/flat.css') }}" href="#">
                <span>Flat</span>
                <i class="fa fa-circle text-flat"></i>
            </a>
            <a class="dropdown-item d-flex align-items-center justify-content-between font-medium" data-toggle="theme" data-theme="{{ mix('css/themes/modern.css') }}" href="#">
                <span>Modern</span>
                <i class="fa fa-circle text-modern"></i>
            </a>
            <a class="dropdown-item d-flex align-items-center justify-content-between font-medium" data-toggle="theme" data-theme="{{ mix('css/themes/smooth.css') }}" href="#">
                <span>Smooth</span>
                <i class="fa fa-circle text-smooth"></i>
            </a>
            <!-- END Color Themes -->

            <div class="dropdown-divider"></div>

            <!-- Sidebar Styles -->
            <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
            <a class="dropdown-item fw-medium" data-toggle="layout" data-action="sidebar_style_light" href="javascript:void(0)">
                <span>Sidebar Light</span>
            </a>
            <a class="dropdown-item fw-medium" data-toggle="layout" data-action="sidebar_style_dark" href="javascript:void(0)">
                <span>Sidebar Dark</span>
            </a>
            <!-- END Sidebar Styles -->

            <div class="dropdown-divider"></div>

            <!-- Header Styles -->
            <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
            <a class="dropdown-item fw-medium" data-toggle="layout" data-action="header_style_light" href="javascript:void(0)">
                <span>Header Light</span>
            </a>
            <a class="dropdown-item fw-medium" data-toggle="layout" data-action="header_style_dark" href="javascript:void(0)">
                <span>Header Dark</span>
            </a>
            <!-- END Header Styles -->
        </div>
    </div>
    <!-- END Options -->

    <!-- Close Sidebar, Visible only on mobile screens -->
    <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
    <a class="d-lg-none btn btn-sm btn-alt-secondary ms-1" data-toggle="layout" data-action="sidebar_close" href="javascript:void(0)">
        <i class="fa fa-fw fa-times"></i>
    </a>
    <!-- END Close Sidebar -->
</div>

<div>
    <a class="d-lg-none btn btn-sm btn-alt-secondary ms-1" data-toggle="layout" data-action="sidebar_close" href="javascript:void(0)">
        <i class="fa fa-fw fa-times"></i>
    </a>
</div>
<!-- END Extra -->
</div>
<!-- END Side Header -->

<!-- Sidebar Scrolling -->
<div class="js-sidebar-scroll position-relative">
    <!-- Side Navigation -->
    <div class="content-side">
        <ul class="nav-main">
            <li class="nav-main-item">
                <a class="nav-main-link{{ request()->is('admin') ? ' active' : '' }}" href="{{ route('admin.dashboard.index') }}">
                    <i class="nav-main-link-icon fas fa-tags"></i>
                    <span class="nav-main-link-name">Dashboard</span>
                </a>
            </li>
        </ul>

        <ul class="nav-main position-absolute my-0 w-100" style="bottom: 0">
            <li class="nav-main-item bg-gray-700 py-1">
                <a class="nav-main-link{{ request()->is('dashboard') ? ' active' : '' }}" href="{{ route('auth.logout') }}">
                    <i class="nav-main-link-icon fas fa-sign-out-alt"></i>
                    <span class="nav-main-link-name">ออกจากระบบ</span>
                </a>
            </li>
        </ul>
    </div>
    <!-- END Side Navigation -->
</div>
<!-- END Sidebar Scrolling -->
</nav>
<!-- END Sidebar -->
