<header class="main-header">
    <a href="/" class="logo">
        <span class="logo-mini">
            <img src="{{ asset('images/favicon.png') }}" alt="FBSS Logo" style="width: 35px">
        </span>
        <span class="logo-lg">
            <img src="{{ asset('images/logo.png') }}" alt="FBSS Logo" style="width: 180px">
        </span>
    </a>

    <nav class="navbar navbar-static-top">
        <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
            <span class="sr-only">Toggle navigation</span>
        </a>
        <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
              <li>
                <a href="tel:8850962175">
                  HELPLINE NO. +91- 8850962175
                </a>
              </li>
               {{--   <li class="dropdown notifications-menu">

                   <a href="">
                        <img src="{{ asset('images/favicon.png') }}" class="user-image" alt="User Image" style="width:20px;"> Log Out
                    </a>
                </li>  --}}
                <li>
                        <a href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                     document.getElementById('logout-form').submit();">
                            Logout
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            {{ csrf_field() }}
                        </form>
                </li>
            </ul>
        </div>
    </nav>
</header>
