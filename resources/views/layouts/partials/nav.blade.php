  <header
      id="header"
      class="header d-flex align-items-center sticky-top light-background"
    >
      <div
        class="container-fluid container-xl position-relative d-flex align-items-center"
      >
        <a href="{{route('pages.home')}}" class="logo d-flex align-items-center me-auto">
          <!-- Uncomment the line below if you also wish to use an image logo -->
          <!-- <img src="assets/img/logo.webp" alt=""> -->
          <h1 class="sitename">Mentor</h1>
        </a>

        <nav id="navmenu" class="navmenu">
          <ul>
            <li><a href="{{route('pages.home')}}">HOME<br /></a></li>
            <li><a href="{{route('pages.teachers')}}">TEACHERS</a></li>
            <li><a href="{{route('pages.account')}}">MY ACCOUNT</a></li>
            <li><a href="{{route('student.requests')}}">My REQUESTS</a></li>
            <li><a href="{{route('student.favorites')}}">My FAVORITES</a></li>
            <li><a href="{{route('teacher.dashboard')}}">TEACHER PANEL</a></li>
            <li><a href="{{route('admin.teacher-profiles')}}">ADMIN PANEL</a></li>
            <li><a href="login.html">LOGIN</a></li>
          </ul>
          <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
        </nav>

        <a class="btn-getstarted" href="#">0795717995</a>
      </div>
    </header>