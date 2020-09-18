@extends('spark::layouts.app')

@section('content')
<home :user="user" inline-template>
<section class="text-gray-700 body-font">
  <div class="container py-24 mx-auto">
  <h1 class="text-3xl font-black mb-4">Welcome! Let's learn Adonis!</h1>
  <p class="mb-8">Here is a collection of our most recent videos. We upload new videos every week day!</p>
    <div class="flex flex-wrap -m-4">
    @foreach($videos as $video)
      <div class="lg:w-1/3 md:w-1/2 p-3 w-full">
        <a class="block relative h-48 rounded">
        <iframe class="-ml-6" src="https://player.vimeo.com/video/{{ $video->youtube_url }}" width="100%" height="100%" frameborder="0" allow="autoplay; fullscreen" allowfullscreen></iframe>
        <!-- <iframe class="rounded-lg" width="100%" height="100%" src="{{ $video->youtube_url }}" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> -->
        </a>
        <div class="mt-4">
          <a href="/courses/{{ $video->course->id }}"><h3 class="text-gray-500 text-xs tracking-widest title-font mb-1">{{ $video->course->name }}</h3></a>
          <h3 class="text-blue-500 text-xs tracking-widest title-font mb-1">{{ $video->created_at->diffForHumans() }}</h3>
          <h2 class="text-gray-900 title-font text-lg font-medium">{{ $video->title }}</h2>
          <p class="mt-1">{{ $video->description }}</p>
        </div>
      </div>
    @endforeach
    </div>
    {{ $videos->links() }}
  </div>
</section>
</home>
@endsection
