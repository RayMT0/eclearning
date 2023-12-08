@extends('layout.master')
@section('title','ECLearning')
@section('content')
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
  <p class="fs-3 fw-medium mb-5">Recommended Courses</p>
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

{{-- FAQ --}}
<div class="container-lg">
  <div class="d-flex flex-lg-row flex-column justify-content-lg-between justify-content-center align-items-center">
    <div class="d-flex flex-column text-lg-start text-center">
      <p class="fs-3 fw-medium mb-1">Frequently Asked Questions</p>
      <p class="fs-6 fw-light">Contact us through eclearning@gmail.com if you still have further questions.</p>
    </div>
    <a href="" class="btn btn-primary h-fit w-fit mb-lg-0 mb-4">See All FAQ's</a>
  </div>
  <div class="accordion" id="accordionPanelsStayOpenExample">
    <div class="accordion-item">
      <h2 class="accordion-header">
        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
          Accordion Item #1
        </button>
      </h2>
      <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show">
        <div class="accordion-body">
          <strong>This is the first item's accordion body.</strong> It is shown by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
        </div>
      </div>
    </div>
    <div class="accordion-item">
      <h2 class="accordion-header">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false" aria-controls="panelsStayOpen-collapseTwo">
          Accordion Item #2
        </button>
      </h2>
      <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse">
        <div class="accordion-body">
          <strong>This is the second item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
        </div>
      </div>
    </div>
    <div class="accordion-item">
      <h2 class="accordion-header">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="false" aria-controls="panelsStayOpen-collapseThree">
          Accordion Item #3
        </button>
      </h2>
      <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse">
        <div class="accordion-body">
          <strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
        </div>
      </div>
    </div>
  </div>
</div>
@endsection