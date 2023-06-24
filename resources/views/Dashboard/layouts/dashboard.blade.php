<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>OdontoCare Dashboard</title>
  <link href="/Odontocare/assets/img/favicon.ico" rel="icon" />
  <link rel="stylesheet" href="/Dashboard/lib/css/styles.css" />
  <link rel="stylesheet" href="/Odontocare/assets/css/styles.css" />
</head>

<body>
  <!--  Body Wrapper -->
  <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
    data-sidebar-position="fixed" data-header-position="fixed">
    <!-- Sidebar Start -->
    <aside class="left-sidebar">
      <!-- Sidebar scroll-->
      <div>
        <div class="brand-logo d-flex align-items-center justify-content-between">
          <a href="/admin" class="text-nowrap logo-img">
           <h1 class="m-0 text-primary"><i class="fa fa-tooth me-2"></i>OdontoCare</h1>
          </a>
          <div class="close-btn d-xl-none d-block sidebartoggler cursor-pointer" id="sidebarCollapse">
            <i class="ti ti-x fs-8"></i>
          </div>
        </div>
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav scroll-sidebar" data-simplebar="">
          <ul id="sidebarnav">
            <li class="nav-small-cap">
              <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
              <span class="hide-menu">Home</span>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="/admin" aria-expanded="false">
                <span>
                  <i class="ti ti-layout-dashboard"></i>
                </span>
                <span class="hide-menu">Dashboard</span>
              </a>
            </li>
            <li class="nav-small-cap">
              <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
              <span class="hide-menu">CONFIGURAÇÕES</span>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="/dashboard/dentist" aria-expanded="false">
                <span>
                  <i class="ti ti-article"></i>
                </span>
                <span class="hide-menu">Dentistas</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="/dashboard/consulta" aria-expanded="false">
                <span>
                  <i class="ti ti-cards"></i>
                </span>
                <span class="hide-menu">Consulta</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="/dashboard/contato" aria-expanded="false">
                <span>
                  <i class="ti ti-file-description"></i>
                </span>
                <span class="hide-menu">Contato</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="/dashboard/feedback" aria-expanded="false">
                <span>
                  <i class="ti ti-typography"></i>
                </span>
                <span class="hide-menu">Avaliação</span>
              </a>
            </li>
          </ul>
        </nav>
        <!-- End Sidebar navigation -->
      </div>
      <!-- End Sidebar scroll-->
    </aside>
    <!--  Sidebar End -->
    <!--  Main wrapper -->
    <div class="body-wrapper">
      <!--  Header Start -->
      <header class="app-header">
      <nav class="navbar-collapse justify-content-end px-0">
      <ul class="navbar-nav flex-row ms-auto align-items-center justify-content-end">
        <!-- Navbar Search -->
        <li class="nav-item d-block d-xl-none">
          @guest
          @if (Route::has('login'))
        <li class="nav-item">
          <a class="nav-link sidebartoggler nav-icon-hover" href="{{ route('login') }}">{{ __('Login') }}</a>
        </li>
        @endif

        @if (Route::has('register'))
        <li class="nav-item">
          <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
        </li>
        @endif
        @else
        <li class="nav-item dropdown">
          <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
            {{ Auth::user()->name }}
          </a>

          <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
              {{ __('Logout') }}
            </a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
              @csrf
            </form>
          </div>
        </li>
        @endguest
        </li>
      </ul>
</nav>
      </header>
      <!--  Header End -->
      <div class="container-fluid">
      @yield('content')
      </div>
    </div>
  </div>
  <script src="/Dashboard/lib/jquery/dist/jquery.min.js"></script>
  <script src="/Dashboard/lib/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <script src="/Dashboard/lib/sidebarmenu.js"></script>
  <script src="/Dashboard/lib/app.min.js"></script>
  <script src="/Dashboard/lib/apexcharts/dist/apexcharts.min.js"></script>
  <script src="/Dashboard/lib/simplebar/dist/simplebar.js"></script>
  <script src="/Dashboard/lib/dashboard.js"></script>
</body>

</html>
