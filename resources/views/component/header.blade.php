{{-- Navbar --}}
<nav class="navbar navbar-expand-lg navbar-light bg-light position-absolute start-0 top-0 end-0 z-2">
    <div class="container-fluid">
      <a class="navbar-brand fw-bold ms-5 align-items-center" href="/home">
        <img src="/assets/icons/logo_EClearning.svg" alt="logo">
        ECLearning
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
        <ul class="navbar-nav fw-medium">
          <li class="nav-item">
            <a class="nav-link {{$path == 'home' ? 'active' : ''}}" aria-current="page" href="/home">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{$path == 'course' ? 'active' : ''}}" href="/course">Course</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{$path == 'monitors' ? 'active' : ''}}" href="#">Monitors</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{$path == 'testimonials' ? 'active' : ''}}" href="#">Testimonials</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{$path == 'blogs' ? 'active' : ''}}" href="#">Blogs</a>
          </li>
        </ul>
      </div>
      <a href="/sign-up" class="collapse navbar-collapse flex-grow-0 btn btn-primary me-5 fw-medium ps-4 pe-4" id="navbarNav">Sign up</a>
    </div>
</nav>