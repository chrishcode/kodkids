@extends('spark::layouts.app')

@section('content')
<home :user="user" inline-template>
<section class="text-gray-700 body-font">
  <div class="container py-24 mx-auto">
  <h1 class="text-3xl font-medium mb-4">Courses</h1>
  <p class="mb-8">Here is a collection of all our courses.</p>
    <div class="flex flex-wrap -m-4">
    @foreach($courses as $course)
    <div class="p-4 md:w-1/3">
        <div class="flex rounded-lg h-full bg-gray-100 p-8 flex-col">
          <div class="flex items-center mb-3">
            <div class="w-8 h-8 mr-3 inline-flex items-center justify-center rounded-full bg-blue-500 text-white flex-shrink-0">
              <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                <path d="M22 12h-4l-3 9L9 3l-3 9H2"></path>
              </svg>
            </div>
            <h2 class="text-gray-900 text-lg title-font font-medium">{{ $course->name }}</h2>
          </div>
          <div class="flex-grow">
            <p class="leading-relaxed text-base">{{ $course->description }}</p>
            <a  href="/courses/{{ $course->id }}" class="mt-3 text-blue-500 inline-flex items-center">Watch course
              <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
                <path d="M5 12h14M12 5l7 7-7 7"></path>
              </svg>
            </a>
          </div>
        </div>
      </div>
    @endforeach
    </div>
  </div>
</section>
</home>
@endsection