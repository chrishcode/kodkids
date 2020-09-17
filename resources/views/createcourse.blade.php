@extends('spark::layouts.app')

@section('content')
<home :user="user" inline-template>
<section class="text-gray-700 body-font">
  <div class="container py-24 mx-auto">
    <form method="post" action="/courses">
    @csrf
        <div class="form-group row">
            <label class="col-md-4 col-form-label text-md-right">{{__('Name')}}</label>

            <div class="col-md-6">
                <input type="text" class="form-control" name="name" autofocus>
            </div>
        </div>

        <div class="form-group row">
            <label class="col-md-4 col-form-label text-md-right">{{__('Description')}}</label>

            <div class="col-md-6">
                <input type="text" class="form-control" name="description">
            </div>
        </div>

        <div class="form-group row mb-0">
            <div class="col-md-6 offset-md-4">
                <button type="submit" class="btn btn-primary">
                    {{__('Create course')}}
                </button>
            </div>
        </div>
    </form>
  </div>
</section>
</home>
@endsection
