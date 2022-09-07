<div class="main-sidebar sidebar-style-2 shadow-sm">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="/dashboard">{{ auth()->user()->title }}</a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="/dashboard">{{ auth()->user()->initials }}</a>
        </div>

        @can('admin' )
        <ul class="sidebar-menu mb-3">
            <li class="menu-header">Dashboard</li>
            <li class="{{ Request::is('dashboard/anggota') ? 'active' : false }}"><a class="nav-link"
                    href="/dashboard/anggota"><i class="fas fa-tachometer-alt"></i>
                    <span>Dashboard</span></a></li>
        </ul>
        @endcan
        <ul class="sidebar-menu mb-3">
            <li class="menu-header">User</li>
            <li class="{{ Request::is('dashboard/user') ? 'active' : false }}"><a class="nav-link"
                    href="/dashboard/user"><i class="fas fa-user-lock"></i>
                    <span>Change Password</span></a></li>
        </ul>


        <ul class="sidebar-menu mb-3">
            <li class="menu-header">Update</li>
            @can('admin')
            <ul class="sidebar-menu mb-3">
                <li
                    class="dropdown {{ Request::is('allprogram/program') ? 'active' : ''  || Request::is('allnews/news') ? 'active' : '' || Request::is('allaward/award') ? 'active' : '' || Request::is('alltalent/product') ? 'active' : ''}} ">
                    <a href="#" class="nav-link has-dropdown"><i class="far fa-file-alt"></i> <span>All Posts</span></a>
                    <ul class="dropdown-menu">

                        <li class="{{ Request::is('allprogram/program*') ? 'active' : false }}"><a class="nav-link"
                                href="/allprogram/program"><i class="fas fa-clipboard-list"></i> All Programs</a></li>

                        <li class="{{ Request::is('allnews/news*') ? 'active' : false }}"><a class="nav-link"
                                href="/allnews/news"><i class="fas fa-newspaper"></i>All News</a></li>

                        <li class="{{ Request::is('allaward/award*') ? 'active' : false }}"><a class="nav-link"
                                href="/allaward/award"><i class="fas fa-medal"></i>All Achievement
                            </a></li>
                        <li class="{{ Request::is('alltalent/product*') ? 'active' : false }}"><a class="nav-link"
                                href="/alltalent/product"><i class="fas fa-star "></i>All Talent
                            </a></li>
                    </ul>
                </li>
            </ul>
            @endcan
            <li
                class="dropdown {{ Request::is('dashboard/program*') ? 'active' : ''  || Request::is('dashboard/news*') ? 'active' : '' || Request::is('dashboard/award*') ? 'active' : '' || Request::is('mail/secretary*') ? 'active' : '' || Request::is('import/anggotas*') ? 'active' : '' || Request::is('dashboard/product*') ? 'active' : ''}}" >
                <a href="#" class="nav-link has-dropdown"><i class="far fa-file-alt"></i> <span>Update</span></a>
                <ul class="dropdown-menu">

                    <li class="{{ Request::is('dashboard/program*') ? 'active' : false }}"><a class="nav-link"
                            href="/dashboard/program"><i class="fas fa-clipboard-list"></i>Programs</a></li>

                    <li class="{{ Request::is('dashboard/news*') ? 'active' : false }}"><a class="nav-link"
                            href="/dashboard/news"><i class="fas fa-newspaper"></i> News</a></li>
                    <li class="{{ Request::is('dashboard/product*') ? 'active' : false }}"><a class="nav-link"
                            href="/dashboard/product"><i class="fas fa-star "></i> Talent</a></li>

                    <li class="{{ Request::is('dashboard/award*') ? 'active' : false }}"><a class="nav-link"
                            href="/dashboard/award"><i class="fas fa-medal"></i> Achievement
                        </a></li>
                    <li class="{{ Request::is('mail/secretary*') ? 'active' : false }}"><a class="nav-link"
                            href="/mail/secretary"><i class="fas fa-envelope"></i> Mail
                        </a></li>
                    <li class="{{ Request::is('import/anggotas*') ? 'active' : false }}"><a class="nav-link"
                            href="/import/anggotas"><i class="fas fa-file-import"></i> Import Member
                        </a></li>
                </ul>
            </li>
        </ul>

        @can('admin')
        <ul class="sidebar-menu mb-3">
            <li class="menu-header">Categories</li>
            <li class="{{ Request::is('dashboard/categoryprogram*') ? 'active' : false }}"><a class="nav-link"
                    href="/dashboard/categoryprogram"><i class="fas fa-th-list"></i> <span>Category Program</span></a>
            </li>
            <li class="{{ Request::is('dashboard/categoryproduct*') ? 'active' : false }}"><a class="nav-link"
                    href="/dashboard/categoryproduct"><i class="fas fa-th-list"></i> <span>Category Talent</span></a>
            </li>
        </ul>
        @endcan

        @can('secretary')
        <ul class="sidebar-menu mb-3">
            <li class="menu-header">Secretary</li>
            <li class="{{ Request::is('dashboard/secretary*') ? 'active' : false }}"><a class="nav-link"
                    href="/dashboard/secretary"><i class="fas fa-envelope"></i> <span>Mail</span></a>
            </li>
        </ul>
        @endcan
    </aside>
</div>