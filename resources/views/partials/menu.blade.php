{{-- slide bar section --}}
<aside id="sidebar" class="js-custom-scroll side-nav">
    <ul id="sideNav" class="side-nav-menu side-nav-menu-top-level mb-0">

        <!-- Dashboard -->
        <li class="side-nav-menu-item active">
            <a class="side-nav-menu-link media align-items-center" href="{{route('home')}}">
                <span class="side-nav-menu-icon d-flex mr-3">
                    <i class="gd-dashboard"></i>
                </span>
                <span class="side-nav-fadeout-on-closed media-body">{{ trans('menu.menu_items.home') }}</span>
            </a>
        </li>
        <!-- End Dashboard -->

        <!-- Users Management -->
        <li class="side-nav-menu-item side-nav-has-menu">
            <a class="side-nav-menu-link media align-items-center" href="#" data-target="#userManagement">
                <span class="side-nav-menu-icon d-flex mr-3">
                    <i class="gd-user"></i>
                </span>
                <span class="side-nav-fadeout-on-closed media-body">
                    {{ trans('menu.menu_items.user_management.title') }}
                </span>
                <span class="side-nav-control-icon d-flex">
                    <i class="gd-angle-right side-nav-fadeout-on-closed"></i>
                </span>
                <span class="side-nav__indicator side-nav-fadeout-on-closed"></span>
            </a>
            <!-- Users: subUsers -->
            <ul id="userManagement" class="side-nav-menu side-nav-menu-second-level mb-0">
                <li class="side-nav-menu-item">
                    <a class="side-nav-menu-link" href="{{route('permissions.index')}}">
                        {{ trans('menu.menu_items.user_management.modules.permissions') }}
                    </a>
                </li>
                <li class="side-nav-menu-item">
                    <a class="side-nav-menu-link" href="{{route('roles.index')}}">
                        {{ trans('menu.menu_items.user_management.modules.roles') }}
                    </a>
                </li>
                <li class="side-nav-menu-item">
                    <a class="side-nav-menu-link" href="{{route("users.index")}}">
                        {{ trans('menu.menu_items.user_management.modules.users') }}
                    </a>
                </li>
            </ul>
        </li>
        <!-- End Users -->



        <!-- requistion start  -->
        <li class="side-nav-menu-item">
            <a class="side-nav-menu-link media align-items-center" href="settings.html">
                <span class="side-nav-menu-icon d-flex mr-3">
                    <i class="gd-settings"></i>
                </span>
                <span class="side-nav-fadeout-on-closed media-body">
                    {{ trans('menu.menu_items.requisition.title') }}
                </span>
            </a>
        </li>
        <!-- requistion end -->
        <!-- purchaseOrdre start  -->
        <li class="side-nav-menu-item">
            <a class="side-nav-menu-link media align-items-center" href="settings.html">
                <span class="side-nav-menu-icon d-flex mr-3">
                    <i class="gd-settings"></i>
                </span>
                <span class="side-nav-fadeout-on-closed media-body">
                    {{ trans('menu.menu_items.purchaseorder.title') }}
                </span>
            </a>
        </li>
        <!-- Purchase  end -->
        <!-- warehouse start  -->
        <li class="side-nav-menu-item">
            <a class="side-nav-menu-link media align-items-center" href="settings.html">
                <span class="side-nav-menu-icon d-flex mr-3">
                    <i class="gd-settings"></i>
                </span>
                <span class="side-nav-fadeout-on-closed media-body">
                    {{ trans('menu.menu_items.warehouse.title') }}
                </span>
            </a>
        </li>
        <!-- warehouse  end -->

        <!-- testing start  -->
        <li class="side-nav-menu-item">
            <a class="side-nav-menu-link media align-items-center" href="settings.html">
                <span class="side-nav-menu-icon d-flex mr-3">
                    <i class="gd-settings"></i>
                </span>
                <span class="side-nav-fadeout-on-closed media-body">
                    {{ trans('menu.menu_items.warehouse.title') }}
                </span>
            </a>
        </li>
        <!-- testing  end -->
        <!-- production start  -->
        <li class="side-nav-menu-item">
            <a class="side-nav-menu-link media align-items-center" href="settings.html">
                <span class="side-nav-menu-icon d-flex mr-3">
                    <i class="gd-settings"></i>
                </span>
                <span class="side-nav-fadeout-on-closed media-body">
                    {{ trans('menu.menu_items.production.title') }}
                </span>
            </a>
        </li>
        <!-- production  end -->

        <!-- dispatch start  -->
        <li class="side-nav-menu-item">
            <a class="side-nav-menu-link media align-items-center" href="settings.html">
                <span class="side-nav-menu-icon d-flex mr-3">
                    <i class="gd-settings"></i>
                </span>
                <span class="side-nav-fadeout-on-closed media-body">
                    {{ trans('menu.menu_items.dispatch.title') }}
                </span>
            </a>
        </li>
        <!-- dispatch  end -->

        <!-- history start  -->
        <li class="side-nav-menu-item">
            <a class="side-nav-menu-link media align-items-center" href="settings.html">
                <span class="side-nav-menu-icon d-flex mr-3">
                    <i class="gd-settings"></i>
                </span>
                <span class="side-nav-fadeout-on-closed media-body">
                    {{ trans('menu.menu_items.history.title') }}
                </span>
            </a>
        </li>
        <!-- history  end -->

        <!-- Start Settings -->
        <li class="side-nav-menu-item side-nav-has-menu">
            <a class="side-nav-menu-link media align-items-center" href="#" data-target="#subPages">
                <span class="side-nav-menu-icon d-flex mr-3">
                    <i class="gd-settings"></i>
                </span>
                <span class="side-nav-fadeout-on-closed media-body">
                    {{ trans('menu.menu_items.settings.title') }}
                </span>
                <span class="side-nav-control-icon d-flex">
                    <i class="gd-angle-right side-nav-fadeout-on-closed"></i>
                </span>
                <span class="side-nav__indicator side-nav-fadeout-on-closed"></span>
            </a>
            <ul id="subPages" class="side-nav-menu side-nav-menu-second-level mb-0">
                <li class="side-nav-menu-item">
                    <a class="side-nav-menu-link" href="login.html">
                        {{ trans('menu.menu_items.settings.changepassword') }}
                    </a>
                </li>
                <li class="side-nav-menu-item">
                    <a class="side-nav-menu-link" href="register.html">
                        {{ trans('menu.menu_items.settings.addcategories') }}
                    </a>
                </li>
                <li class="side-nav-menu-item">
                    <a class="side-nav-menu-link" href="password-reset.html">
                        {{ trans('menu.menu_items.settings.additemname') }}
                    </a>
                </li>
            </ul>
        </li>
        <!-- End Settings -->

    </ul>
</aside>

{{-- slide bar section end --}}
