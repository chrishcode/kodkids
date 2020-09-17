@extends('spark::layouts.app')

@section('content')
<home :user="user" inline-template>
<section class="text-gray-700 body-font">
  <div class="container py-24 mx-auto">
  <h1 class="text-3xl font-medium mb-4">Welcome! Let's learn some code!</h1>
  <p class="mb-8">Here is a collection of all our curated videos.</p>
    <div class="flex flex-wrap -m-4">
    @foreach($videos as $video)
      <div class="lg:w-1/4 md:w-1/2 p-4 w-full">
        <a class="block relative h-48 rounded">
        <iframe class="rounded-lg" width="100%" height="100%" src="{{ $video->youtube_url }}" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </a>
        <div class="mt-4">
          <h3 class="text-gray-500 text-xs tracking-widest title-font mb-1">{{ $video->course->name }}</h3>
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
