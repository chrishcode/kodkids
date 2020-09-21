@extends('spark::layouts.app')

@section('content')
<home :user="user" inline-template>
<section class="text-gray-700 body-font">
  <div class="container py-24 mx-auto">
  <h1 class="text-3xl font-black mb-4">Welcome! <br> Our first open source goodie Flare is out now!</h1>
  <p class="mb-8">We just released our first open source product called Flare, a beautifully designed application scaffolding for AdonisJS. Flare provides the perfect starting point for your next Adonis application and includes login and registration out of the box.</p>
    <div class="flex flex-wrap -m-4">
      <img class="border-solid border-2 border-gray-200 rounded-lg mt-4" src="https://file.coffee/u/zTdVq7kjij.png" alt="flare" />
    </div>
  </div>
</section>
</home>
@endsection
