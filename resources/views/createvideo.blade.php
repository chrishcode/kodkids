@extends('spark::layouts.app')

@section('content')
<home :user="user" inline-template>
<section class="text-gray-700 body-font">
  <div class="container py-24 mx-auto">
    <form method="post" action="/videos">
    @csrf
        <div class="form-group row">
            <label class="col-md-4 col-form-label text-md-right">{{__('Vimeo ID')}}</label>

            <div class="col-md-6">
                <input type="text" class="form-control" name="youtube_url" autofocus>
            </div>
        </div>

        <div class="form-group row">
            <label class="col-md-4 col-form-label text-md-right">{{__('Title')}}</label>

            <div class="col-md-6">
                <input type="text" class="form-control" name="title">
            </div>
        </div>

        <div class="form-group row">
            <label class="col-md-4 col-form-label text-md-right">{{__('Description')}}</label>

            <div class="col-md-6">
                <input type="text" class="form-control" name="description">
            </div>
        </div>

        <div class="form-group row">
        <!-- {{ $courses }} -->
            <label class="col-md-4 col-form-label text-md-right">{{__('Course')}}</label>

            <div class="col-md-6">
                <select name="course_id" id="course">
                @foreach($courses as $course)
                    <option value="{{ $course->id }}">{{ $course->name }}</option>
                @endforeach
                </select>
            </div>
        </div>

        <div class="form-group row mb-0">
            <div class="col-md-6 offset-md-4">
                <button type="submit" class="btn btn-primary">
                    {{__('Upload video')}}
                </button>
            </div>
        </div>
    </form>
  </div>
</section>
</home>
@endsection
