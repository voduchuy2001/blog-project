<div class="leftside-menu">

    <!-- LOGO -->
    <a href="{{route('home')}}" class="logo text-center logo-light">
        <span class="logo-lg">
            <img src="admin/assets/images/logo-dark.png" alt="" height="16">
        </span>
        <span class="logo-sm">
            <img src="admin/assets/images/logo_sm_dark.png" alt="" height="16">
        </span>
    </a>
    <div class="h-100" id="leftside-menu-container" data-simplebar="">

        <!--- Sidemenu -->
        <ul class="side-nav">

            <li class="side-nav-title side-nav-item">Manage</li>

            <li class="side-nav-item {{ request()->routeIs('tag.*') ? 'menuitem-active' : '' }}">
                <a href="{{route('tag.list')}}" class="side-nav-link">
                    <i class="uil-tag-alt"></i>
                    <span> Tags </span>
                </a>
            </li>

            <li class="side-nav-item {{ request()->routeIs('category.*') ? 'menuitem-active' : '' }}">
                <a href="{{route('category.list')}}" class="side-nav-link">
                    <i class="uil-layer-group"></i>
                    <span> Categories </span>
                </a>
            </li>

            <li class="side-nav-item">
                <a href="apps-chat.html" class="side-nav-link">
                    <i class="uil-book"></i>
                    <span> Post </span>
                </a>
            </li>

            <li class="side-nav-item">
                <a href="apps-chat.html" class="side-nav-link">
                    <i class="uil-atom"></i>
                    <span> Site settings </span>
                </a>
            </li>
        </ul>
        <!-- End Sidebar -->
    </div>
    <!-- Sidebar -left -->
</div>