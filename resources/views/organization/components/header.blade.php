<nav class="header-navbar navbar-expand-lg navbar navbar-fixed align-items-center navbar-shadow navbar-brand-center" data-nav="brand-center">
    </div>
    <div class="navbar-container d-flex content">
        <div class="bookmark-wrapper d-flex align-items-center">
            <ul class="nav navbar-nav d-xl-none">
                <li class="nav-item"><a class="nav-link menu-toggle" href="#"><i class="ficon" data-feather="menu"></i></a></li>
            </ul>
            <ul class="nav navbar-nav bookmark-icons">
            <a href="{{  route('org.home')}}">
            <span class="brand-logo">
                <img src="{{ asset('storage/avatars/' . Auth::user()->profile) }}"
                    class="me-75" height="40" width="40"
                    alt="{{ Auth::user()->firstname }}">
                </span>
            </a>
            <a href="{{  route('org.home')}}"><h2 class="brand-text mb-0 mt-1 text-primary">{{ Auth::user()->firstname }}</span></h2></a>
            </ul>
        </div>
        <ul class="nav navbar-nav align-items-center ms-auto">
            
            
            <li class="nav-item dropdown dropdown-user"><a class="nav-link dropdown-toggle dropdown-user-link" id="dropdown-user" href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <div class="user-nav d-sm-flex d-none"><span class="user-name fw-bolder">{{ Auth::user()->firstname }}</span><span class="user-status">Administrateur</span></div><span class="avatar">
                       @if (stristr(Auth::user()->profile, 'avatar.png'))
                       <img class="round" src="{{ asset('assets/organization/organization.png')}}" alt="avatar" height="40" width="40"><span class="avatar-status-online"></span></span>
                       @else
                       <span class="avatar">
                        <img class="round" src="{{ asset('storage/avatars/' . Auth::user()->profile)}}" alt="avatar" height="40" width="40"><span class="avatar-status-online"></span></span>
                       @endif
                </a>
                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdown-user"><a class="dropdown-item" href="page-profile.html"><i class="me-50" data-feather="user"></i> Profile</a>
                    <div class="dropdown-divider"></div>
                    <form action="{{ route('org.logout') }}" method="POST">
                        @csrf
                        <button type="submit" class="dropdown-item w-100"><i class="ml-3" data-feather="power"></i>Se d??connecter</button>
                    </form>
                </div>
            </li>
        </ul>
    </div>
</nav>