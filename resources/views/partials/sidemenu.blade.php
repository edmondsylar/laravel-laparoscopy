<nav class="pcoded-navbar">
    <div class="navbar-wrapper">
        <div class="navbar-brand header-logo">
            <a href="index.html" class="b-brand">
                <div class="b-bg">
                    <i class="feather icon-trending-up"></i>
                </div>
                <span class="b-title">laparoscopy</span>
            </a>
            <a class="mobile-menu" id="mobile-collapse" href="javascript:"><span></span></a>
        </div>
        <div class="navbar-content scroll-div">
            <ul class="nav pcoded-inner-navbar">
                <li class="nav-item pcoded-menu-caption">
                    <label>Navigation</label>
                </li>

                <li data-username="basic components Button Alert Badges breadcrumb Paggination progress Tooltip popovers Carousel Cards Collapse Tabs pills Modal Grid System Typography Extra Shadows Embeds" class="nav-item pcoded-hasmenu ">
                    <a href="javascript:" class="nav-link "><span class="pcoded-micon"><i class="feather icon-box"></i></span><span class="pcoded-mtext">Dashboard</span></a>
                    <ul class="pcoded-submenu">
                        <li class=""><a href="{{ url('/home') }}" class="">Updates</a></li>
                        <li class=""><a href="{{ url('/user_sessions') }}" class="">Statistics</a></li>
                    </ul>
                </li>


                <li class="nav-item pcoded-menu-caption">
                    <label>User Content</label>
                </li>

                <li data-username="basic components Button Alert Badges breadcrumb Paggination progress Tooltip popovers Carousel Cards Collapse Tabs pills Modal Grid System Typography Extra Shadows Embeds" class="nav-item pcoded-hasmenu">
                    <a href="javascript:" class="nav-link "><span class="pcoded-micon"><i class="feather icon-box"></i></span><span class="pcoded-mtext">Practice Area</span></a>
                    <ul class="pcoded-submenu">
                        <li class=""><a href="{{ url('/practice_dashboard') }}" class="">Practice Dashboard</a></li>
                        <li class=""><a href="{{ url('/user_sessions') }}" class="">In Review</a></li>
                        <li class=""><a href="{{ url('/user_sessions') }}" class="">Completed</a></li>
                    </ul>
                </li>


                <li data-username="basic components Button Alert Badges breadcrumb Paggination progress Tooltip popovers Carousel Cards Collapse Tabs pills Modal Grid System Typography Extra Shadows Embeds" class="nav-item pcoded-hasmenu">
                    <a href="javascript:" class="nav-link "><span class="pcoded-micon"><i class="feather icon-box"></i></span><span class="pcoded-mtext">Modules</span></a>
                    <ul class="pcoded-submenu">
                        <li class=""><a href="{{ url('/modules') }}" class="">All Modules</a></li>
                        <li class=""><a href="{{ url('/user_sessions') }}" class="">Active Modules</a></li>
                    </ul>
                </li>


                <!-- This should be the last item on the menu. -->
                <li data-username="dashboard Default Ecommerce CRM Analytics Crypto Project" class="nav-item">
                    <a href="{{ url('/faqs') }}" class="nav-link "><span class="pcoded-micon"><i class="feather icon-home"></i></span><span class="pcoded-mtext">FAQs</span></a>
                </li>

            </ul>
        </div>
    </div>
</nav>
