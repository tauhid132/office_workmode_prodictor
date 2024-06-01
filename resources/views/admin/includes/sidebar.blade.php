<nav class="navbar sidebar navbar-expand-xl navbar-light">
    <div class="d-flex align-items-center">
        <a class="navbar-brand" href="">
            <img class="light-mode-item navbar-brand-item" src="{{ asset('images/logo.png') }}" alt="logo" style="height: 50px">
            <img class="dark-mode-item navbar-brand-item" src="{{ asset('images/logo.svg') }}" alt="logo" style="height: 40px">
        </a>
    </div>
    <div class="offcanvas offcanvas-start flex-row custom-scrollbar h-100" data-bs-backdrop="true" tabindex="-1" id="offcanvasSidebar">
        <div class="offcanvas-body sidebar-content d-flex flex-column pt-4">
            <ul class="navbar-nav flex-column" id="navbar-sidebar">
                <li class="nav-item"><a href="{{ route('view.dashboard') }}" class="nav-link {{ Request::is('admin/dashboard') ? 'active':''  }}"><i class="fa fa-tachometer "></i> Dashboard</a></li>
               
               
                <li class="nav-item"><a href="{{ route('viewCompanyInfo') }}" class="nav-link {{ Request::is('admin/users/*') ? 'active':''  }}"><i class="fa fa-building"></i> My Company</a></li>
                <li class="nav-item"><a href="{{ route('viewEmployees') }}" class="nav-link"><i class="fa fa-user"></i> Employees</a></li>
                <li class="nav-item"><a href="{{ route('viewProjects') }}" class="nav-link {{ Request::is('admin/blogs/*') ? 'active':''  }}"><i class="fa fa-blog "></i> Projects</a></li>
                
                
              
                
            </ul>
            <div class="d-flex align-items-center justify-content-between text-primary-hover mt-auto p-3">
                <a class="h6 fw-light mb-0 text-body" href="{{ route('viewMyProfile') }}" data-bs-toggle="tooltip" data-bs-placement="top" aria-label="Profile Settings">
                    <i class="fa-solid fa fa-cog"></i> Profile Settings
                </a>
            </div>
        </div>
    </div>
</nav>