<div class="main-sidebar sidebar-style-2 shadow-sm">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="/dashboard">{{ auth()->user()->title }}</a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="/dashboard">{{ auth()->user()->initials }}</a>
        </div>
        <ul class="sidebar-menu mb-3">
            <li class="menu-header">Dashboard</li>
            <li class="{{ Request::is('dashboard') ? 'active' : false }}"><a class="nav-link" href="/dashboard"><i
                        class="fas fa-tachometer-alt"></i>
                    <span>Dashboard</span></a></li>
        </ul>
        <ul class="sidebar-menu mb-3">
            <li class="menu-header">Update</li>
            <li class="dropdown {{ Request::is('dashboard/program*') ? 'active' : false }}">
                <a href="" class="nav-link has-dropdown"><i class="far fa-file-alt"></i> <span>Posts</span></a>
                <ul class="dropdown-menu">
                    <li class="{{ Request::is('dashboard/program*') ? 'active' : false }}"><a class="nav-link"
                            href="/dashboard/program"><i class="fas fa-clipboard-list"></i>
                            <span>My Programs</span></a></li>
                    <li><a class="nav-link" href="forms-editor.html">Editor</a></li>
                    <li><a class="nav-link" href="forms-validation.html">Validation</a></li>
                </ul>
            </li>
        </ul>
        
        @can('admin')
        <ul class="sidebar-menu mb-3">
            <li class="menu-header">Categories</li>
            <li><a class="nav-link" href="/dashboard/categoryprogram"><i class="fas fa-th-list"></i> <span>All category</span></a>
            </li>
        </ul>
        @endcan
    </aside>
</div>