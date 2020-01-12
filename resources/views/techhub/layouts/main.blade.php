@include('techhub.layouts.head')
</head>
  <body class="header-fixed">
    <!-- partial:partials/_header.html -->
    <nav class="t-header">
      <div class="t-header-brand-wrapper">
        <a href="/home">
          <h1 class="md-4" style="color:black;">TechHub</h1>
        </a>
      </div>
      <div class="t-header-content-wrapper">
        <div class="t-header-content">
          <button class="t-header-toggler t-header-mobile-toggler d-block d-lg-none">
            <i class="mdi mdi-menu"></i>
          </button>
          <form action="#" class="t-header-search-box">
            <div class="input-group">
              <input type="text" class="form-control" id="inlineFormInputGroup" placeholder="Search" autocomplete="off">
              <button class="btn btn-primary" type="submit"><i class="mdi mdi-arrow-right-thick"></i></button>
            </div>
          </form>
          <ul class="nav ml-auto">
            <li class="nav-item dropdown">
              <a class="nav-link" href="#" id="notificationDropdown" data-toggle="dropdown" aria-expanded="false">
                <i class="mdi mdi-account-check mdi-1x"></i>
              </a>
              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="{{ route('logout') }}"
                onclick="event.preventDefault();
                document.getElementById('logout-form').submit();">
                Log out
              </a>

              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
              </form>
            </div>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- partial -->
    <div class="page-body">
      <!-- partial:partials/_sidebar.html -->
      <div class="sidebar">
        <div class="user-profile">
          <div class="display-avatar animated-avatar">
            <img class="profile-img img-lg rounded-circle" src="../assets/images/profile/user.png" alt="profile image">
          </div>
          <div class="info-wrapper">
            <h6 class="display-income">Edwin Kuria</h6>
            <p class="user-name">information technology</p>
          </div>
        </div>
        <ul class="navigation-menu">
          <li class="nav-category-divider">MAIN</li>
          <li>
            <a href="/home">
              <span class="link-title">Dashboard</span>
              <i class="mdi mdi-gauge link-icon"></i>
            </a>
          </li>
          <li>
            <a href="#">
              <span class="link-title">Members</span>
              <i class="mdi mdi-account link-icon"></i>
            </a>
          </li>
          <li>
            <a href="#">
              <span class="link-title">Meetings</span>
              <i class="mdi mdi-account-multiple-plus link-icon"></i>
            </a>
          </li>
          <li>
            <a href="#">
              <span class="link-title">Reports</span>
              <i class="mdi mdi-download link-icon"></i>
            </a>
          </li>
        </ul>
      </div>
      <!-- partial -->
      @yield('content')
      <!-- page content ends -->
    </div>
    <!--page body ends -->
@include('techhub.layouts.scripts')
