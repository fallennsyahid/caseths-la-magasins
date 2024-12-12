<ul class="navbar-nav topbar-nav ms-md-auto align-items-center">

    {{ $slot }}

    <li class="nav-item topbar-user dropdown hidden-caret" style="margin-right: 2rem">
        <a class="dropdown-toggle profile-pic" data-bs-toggle="dropdown" href="#" aria-expanded="false">
            <span class="profile-username">
                <span class="op-7">Hi,</span>
                <span class="fw-bold">{{ Auth::user()->name }}</span>
            </span>
        </a>
        <ul class="dropdown-menu dropdown-user animated fadeIn">
            <div class="dropdown-user-scroll scrollbar-outer">
                <li>
                    <div class="user-box">
                        <div class="avatar-lg">
                            <img src="{{ asset('assets/img/profile2.jpg') }}" alt="image profile"
                                class="avatar-img rounded" />
                        </div>
                        <div class="u-text">
                            <h4>{{ Auth::user()->name }}</h4>
                            <p class="text-muted">{{ Auth::user()->email }}</p>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="dropdown-divider"></div>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <a class="dropdown-item" href="route('logout')"
                            onclick="event.preventDefault();
                                      this.closest('form').submit();">
                            Logout
                        </a>
                    </form>
                </li>
            </div>
        </ul>
    </li>
</ul>
