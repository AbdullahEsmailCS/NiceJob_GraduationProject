@if (Auth::check())
@if (Auth::user()->role == 'admin')
<!-- Your existing navbar code for admin here -->

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="{{ route('admin.dashboard') }}">
        <img src="{{ asset('assets\images\regImg.png') }}" alt="Avatar Logo" style="width:40px;" class=" ms-3">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="{{ route('admin.dashboard') }}">Dashboard <span
                        class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="{{ route('admin.jobs') }}" id="navbarDropdown" role="button"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    jobs Management
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="{{ route('admin.jobs') }}">All Jobs</a>
                    <a class="dropdown-item" href="#">Pending Jobs</a>
                    <a class="dropdown-item" href="#">Approved Jobs</a>
                    <a class="dropdown-item" href="#">Rejected Jobs</a>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="{{ route('admin.users') }}" id="navbarDropdown" role="button"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Users Management
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="#">All Employers</a>
                    <a class="dropdown-item" href="#">Pending Employers</a>
                    <a class="dropdown-item" href="#">Approved Employers</a>
                    <a class="dropdown-item" href="#">Rejected Employers</a>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="{{ route('admin.jobApplications') }}" id="navbarDropdown"
                    role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Application Management
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="#">All Candidates</a>
                    <a class="dropdown-item" href="#">Pending Candidates</a>
                    <a class="dropdown-item" href="#">Approved Candidates</a>
                    <a class="dropdown-item" href="#">Rejected Candidates</a>
                </div>
            </li>

        </ul>
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link" href="{{ route('account.profile') }}">Profile</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('account.logout') }}">Logout</a>
            </li>
        </ul>
    </div>
    <div class="dropdown">
        <div class="nav-item dropdown has-arrow new-user-menus hav ">
            <a href="#" class="dropdown-toggle nav-link " data-bs-toggle="dropdown" aria-expanded="true">
                <span class="user-img">
                    <img src="{{ asset('uploads/images/profile_pic/'.Auth::user()->image) }}"
                        class="img-fluid rounded-circle" alt="{{ Auth::user()->name }}"
                        style="width: 45px ;height: 45px;">
                    <div class="user-text">
                        <h6>{{ Auth::user()->name }}</h6>
                        <p class="text-muted mb-0">{{ Auth::user()->role }}</p>
                    </div>
                </span>
            </a>
            <ul class="dropdown-menu dropdown-menu-lg-end">
                <li><a class="dropdown-item active" href="{{ route('account.profile') }}">My Account</a></li>
                <li><a class="dropdown-item" href="{{ route('user-personal-information.create') }}">Add Personal
                        lnformation</a></li>
                <li><a class="dropdown-item" href="{{ route('account.profileDetails') }}">Personal
                        lnformation </a></li>
                <li>
                    <hr class="dropdown-divider">
                </li>
                <li><a class="dropdown-item" href="{{ route('account.logout') }}">Logout</a></li>
            </ul>
        </div>
    </div>
</nav>

@elseif (Auth::user()->role == 'applicant')
<!-- Your existing navbar code for applicants here -->

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="{{ route('home') }}">
        <img src="{{ asset('assets\images\regImg.png') }}" alt="Avatar Logo" style="width:40px;" class=" ms-3">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="{{ route('home') }}">Dashboard <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('jobs') }}">Find Jobs</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('account.savedJobs') }}">Saved Jobs</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('account.myJobApplications') }}">Applied Jobs</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('account.profile') }}">Profile</a>
            </li>
        </ul>
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link" href="{{ route('account.logout') }}">Logout</a>
            </li>
        </ul>
    </div>
    <div class="dropdown">
        <div class="nav-item dropdown has-arrow new-user-menus hav ">
            <a href="#" class="dropdown-toggle nav-link " data-bs-toggle="dropdown" aria-expanded="true">
                <span class="user-img">
                    <img src="{{ asset('uploads/images/profile_pic/'.Auth::user()->image) }}"
                        class="img-fluid rounded-circle" alt="{{ Auth::user()->name }}"
                        style="width: 45px ;height: 45px;">
                    <div class="user-text">
                        <h6>{{ Auth::user()->name }}</h6>
                        <p class="text-muted mb-0">{{ Auth::user()->role }}</p>
                    </div>
                </span>
            </a>
            <ul class="dropdown-menu dropdown-menu-lg-end">
                <li><a class="dropdown-item active" href="{{ route('account.profile') }}">My Account</a></li>
                <li><a class="dropdown-item" href="{{ route('user-personal-information.create') }}">Add Personal
                        lnformation</a></li>
                <li><a class="dropdown-item" href="{{ route('account.profileDetails') }}">Personal
                        lnformation </a></li>
                <li>
                    <hr class="dropdown-divider">
                </li>
                <li><a class="dropdown-item" href="{{ route('account.logout') }}">Logout</a></li>
            </ul>
        </div>
    </div>
</nav>

@elseif (Auth::user()->role == 'employer')
<!-- Your existing navbar code for employers here -->

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="{{ route('account.createJob') }}">
        <img src="{{ asset('assets\images\regImg.png') }}" alt="Avatar Logo" style="width:40px;" class=" ms-3">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="{{ route('account.createJob') }}">Dashboard <span
                        class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('account.myJobs') }}">My Jobs</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('account.myJobApplications') }}">Applications</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Candidates</a>
            </li>
        </ul>
    </div>
    <div class="dropdown">
        <div class="nav-item dropdown has-arrow new-user-menus hav ">
            <a href="#" class="dropdown-toggle nav-link " data-bs-toggle="dropdown" aria-expanded="true">
                <span class="user-img">
                    <img src="{{ asset('uploads/images/profile_pic/'.Auth::user()->image) }}"
                        class="img-fluid rounded-circle" alt="{{ Auth::user()->name }}"
                        style="width: 45px ;height: 45px;">
                    <div class="user-text">
                        <h6>{{ Auth::user()->name }}</h6>
                        <p class="text-muted mb-0">{{ Auth::user()->role }}</p>
                    </div>
                </span>
            </a>
            <ul class="dropdown-menu dropdown-menu-lg-end">
                <li><a class="dropdown-item active" href="{{ route('account.profile') }}">My Account</a></li>
                <li><a class="dropdown-item" href="{{ route('user-personal-information.create') }}">Add Personal
                        lnformation</a></li>
                <li><a class="dropdown-item" href="{{ route('account.profileDetails') }}">Personal
                        lnformation </a></li>
                <li>
                    <hr class="dropdown-divider">
                </li>
                <li><a class="dropdown-item" href="{{ route('account.logout') }}">Logout</a></li>
            </ul>
        </div>
    </div>
</nav>

@elseif (Auth::user()->role == 'manpower Consultant')
<!-- Your existing navbar code for manpower Consultants here -->

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="{{ route('home') }}">Manpower Consultant</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="{{ route('home') }}">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('jobs.index') }}">Jobs</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('candidates.index') }}">Candidates</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('employers.index') }}">Employers</a>
            </li>
            @if (Auth::check())
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">
                    {{ Auth::user()->name }}
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="{{ route('employer.dashboard') }}">Dashboard</a>
                    <a class="dropdown-item" href="{{ route('employer.profile') }}">Profile</a>
                    <a class="dropdown-item" href="{{ route('employer.settings') }}">Settings</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="{{ route('logout') }}">Logout</a>
                </div>
            </li>
            @else
            <li class="nav-item">
                <a class="nav-link" href="{{ route('login') }}">Login</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('register') }}">Register</a>
            </li>
            @endif
        </ul>
    </div>
</nav>

@endif
@else
<!-- Your guest pages content here -->

<nav class="navbar navbar-expand-lg navbar-dark bg-dark ">
    <a class="navbar-brand" href="{{ route('home') }}">
        <img src="{{ asset('assets\images\regImg.png') }}" alt="Avatar Logo" style="width:40px;" class=" ms-3">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="{{ route('home') }}">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('jobs') }}">Find Jobs</a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="{{ route('account.registration') }}">Register as Employer</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('about') }}">About Us</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('contact') }}">Contact Us</a>
            </li>
        </ul>
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link" href="{{ route('account.login') }}">Login</a>
            </li>
        </ul>
    </div>
</nav>
@endif