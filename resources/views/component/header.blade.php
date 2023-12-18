{{-- Navbar --}}
<nav class="navbar navbar-expand-lg navbar-light bg-light position-fixed start-0 top-0 end-0 z-3">
    <div class="container-fluid">
      <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#sidebar" aria-controls="sidebar" aria-label="Toggle course navigation">
        <i class="bi bi-list fs-3" style="color: #0C0531"></i>
      </button>
      <a class="navbar-brand fw-bold ms-xxl-5 me-0 align-items-center" href="/home">
        <img src="/assets/icons/logo_EClearning.svg" alt="logo">
        <span class="nav_title">ECLearning</span>
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <i class="bi bi-three-dots fs-4" style="color: #0C0531"></i>
      </button>
      <div class="collapse navbar-collapse ms-lg-5" id="navbarNav">
        <ul class="navbar-nav fw-medium w-100">
          <li class="nav-item">
            <a class="nav-link {{$path == 'home' ? 'active' : ''}}" href="/home">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{$path == 'course' ? 'active' : ''}}" href="/course">Course</a>
          </li>
          </li>
          @if (session('auth') === 'guest')
            <a href="/{{$path === 'home' || $path === 'login' ? 'sign-up' : 'login'}}" class="collapse navbar-collapse flex-grow-0 btn btn-primary me-xxl-5 fw-medium ps-4 pe-4 ms-lg-auto" id="navbarNav">{{$path === 'home' || $path === 'login' ? 'Sign up' : 'Login'}}</a>
          @elseif (session('auth') === 'user')
            <li class="nav-item dropdown ms-lg-auto">
              <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                <i class="bi bi-person-circle me-2"></i>{{session('user')}}
              </a>
              <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="/logout">
                    Logout
                  </a>
              </div>
          </li>
          @endif
        </ul>
      </div>
    </div>
</nav>