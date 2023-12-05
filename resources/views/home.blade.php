<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" type="image/x-icon" href="/assets/icons/logo_EClearning.svg">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="/css/app.css">
    <title>Eclearning</title>
</head>
<body>
    {{-- Navbar --}}
    <nav class="navbar navbar-expand-lg navbar-light bg-light position-absolute start-0 top-0 end-0 z-2">
        <div class="container-fluid">
          <a class="navbar-brand fw-bold ms-5 align-items-center" href="#">
            <img src="/assets/icons/logo_EClearning.svg" alt="logo">
            ECLearning
          </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
            <ul class="navbar-nav fw-medium">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Course</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Monitors</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Testimonials</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Blogs</a>
              </li>
            </ul>
          </div>
          <a class="collapse navbar-collapse flex-grow-0 btn btn-primary me-5 fw-medium ps-4 pe-4" id="navbarNav">Sign up</a>
        </div>
      </nav>

      {{-- Home Banner --}}
      <div class="hero">
        <img src="/assets/images/home_banner.svg" alt="banner" class="hero_banner">
        
        <div class="hero_overlay"></div>

        <div class="hero_content h-100 container-xxl position-relative">
          <div class="hero_content_width d-flex h-100 align-items-center">
            <div class="text-dark">
              <h1 class="fw-bold mb-4">Start <span class="h1_gradient">learning</span> new programming skill from our complete courses</h1>
              <p class="lead mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Non ut laborum veritatis ipsum iure, atque repellat quis qui maiores possimus distinctio rem animi nobis quos porro consectetur obcaecati assumenda. Quia.</p>
              <a href="#" class="mt-2 btn btn-lg btn-primary rounded" role="button">Explore Course</a>
            </div>
          </div>
        </div>

        <a href="#scroll_course" class="hero_scroll-btn d-flex flex-column align-items-center">Recommended Courses<i class="bi bi-arrow-down-short"></i></a>
      </div>

      {{-- Content --}}
      <div class="container-md d-flex flex-column align-items-lg-start align-items-center mt-5" id="scroll_course">
        <h1 class="mb-5">Recommended Courses</h1>
        <div class="d-flex flex-lg-row flex-column flex-wrap justify-content-xxl-start justify-content-lg-between justify-content-center align-items-center column-gap-5 row-gap-5 mb-5">
          <div class="card" style="width: 25rem;">
            <img src="/assets/images/course_php.svg" alt="course-img" class="card-img-top">
            <div class="card-body">
              <p class="card-text"><i class="bi bi-play-circle"></i>Enrolled count</p>
              <h4 class="card-title">Title</h4>
              <a href="" class="btn btn-primary ps-4 pe-4"><i class="bi bi-arrow-right"></i></a>
            </div>
          </div>
          <div class="card" style="width: 25rem;">
            <img src="/assets/images/course_php.svg" alt="course-img" class="card-img-top">
            <div class="card-body">
              <p class="card-text"><i class="bi bi-play-circle"></i>Enrolled count</p>
              <h4 class="card-title">Title</h4>
              <a href="" class="btn btn-primary ps-4 pe-4"><i class="bi bi-arrow-right"></i></a>
            </div>
          </div>
          <div class="card" style="width: 25rem;">
            <img src="/assets/images/course_php.svg" alt="course-img" class="card-img-top">
            <div class="card-body">
              <p class="card-text"><i class="bi bi-play-circle"></i>Enrolled count</p>
              <h4 class="card-title">Title</h4>
              <a href="" class="btn btn-primary ps-4 pe-4"><i class="bi bi-arrow-right"></i></a>
            </div>
          </div>
          <div class="card" style="width: 25rem;">
            <img src="/assets/images/course_php.svg" alt="course-img" class="card-img-top">
            <div class="card-body">
              <p class="card-text"><i class="bi bi-play-circle"></i>Enrolled count</p>
              <h4 class="card-title">Title</h4>
              <a href="" class="btn btn-primary ps-4 pe-4"><i class="bi bi-arrow-right"></i></a>
            </div>
          </div>
          <div class="card" style="width: 25rem;">
            <img src="/assets/images/course_php.svg" alt="course-img" class="card-img-top">
            <div class="card-body">
              <p class="card-text"><i class="bi bi-play-circle"></i>Enrolled count</p>
              <h4 class="card-title">Title</h4>
              <a href="" class="btn btn-primary ps-4 pe-4"><i class="bi bi-arrow-right"></i></a>
            </div>
          </div>
        </div>
      </div>

      {{-- Footer --}}
      <footer class="container">
        
      </footer>
</body>
</html>