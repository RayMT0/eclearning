@extends('layout.master')
@section('title','ECLearning Courses')
@section('content')
    <div class="screen_base container-xxl">
        @include('component.sidebar')
        <main class="course_main">
            @if($course === 'cpp')
                @include('component.course_cpp')
            @elseif ($course === 'javascript')
                @include('component.course_js')
            @else
                @include('component.course_default')
            @endif
        </main>
    </div>
@endsection