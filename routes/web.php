<?php

use Illuminate\Http\Request;
use App\Models\Video;
use App\Models\Course;

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'WelcomeController@show');

Route::get('/home', 'HomeController@show');

Route::get('/videos/create', function () {
    if(Auth::guest()) {
        $courses = Course::orderBy('created_at', 'desc')->get();

        return view('welcome')->with('courses', $courses);
    }

    if(Auth::user()->email != 'kodkidsss@gmail.com') {
        return view('home');
    }

    $courses = Course::all();

    return view('createvideo')->with('courses', $courses);
});

Route::get('/videos', function () {
    if(Auth::guest()) {
        $courses = Course::orderBy('created_at', 'desc')->get();

        return view('welcome')->with('courses', $courses);
    }

    $videos = Video::orderBy('created_at', 'desc')->simplePaginate(8);

    return view('videos')->with('videos', $videos);
});

Route::get('/courses', function () {
    if(Auth::guest()) {
        $courses = Course::orderBy('created_at', 'desc')->get();

        return view('welcome')->with('courses', $courses);
    }
    
    $courses = Course::orderBy('created_at', 'desc')->get();

    return view('courses')->with('courses', $courses);
});

Route::get('/courses/{id}', function ($id) {
    $course = Course::find($id);
    $videos = $course->videos()->simplePaginate(8);

    if(Auth::guest()) {
        $courses = Course::orderBy('created_at', 'desc')->get();

        return view('welcome')->with('courses', $courses);
    }

    return view('course')->with(['course' => $course, 'videos' => $videos]);
});

Route::post('/videos', function (Request $request) {
    $video = new Video;

    $video->youtube_url = $request->youtube_url;
    $video->title = $request->title;
    $video->description = $request->description;
    $video->course_id = $request->course_id;

    $video->save();

    return 'Video was uploaded!';
});

Route::get('/courses/create', function () {
    if(Auth::guest()) {
        $courses = Course::orderBy('created_at', 'desc')->get();

        return view('welcome')->with('courses', $courses);
    }

    if(Auth::user()->email != 'kodkidsss@gmail.com') {
        return view('home');
    }
    return view('createcourse');
});

Route::post('/courses', function (Request $request) {
    $course = new Course;

    $course->name = $request->name;
    $course->description = $request->description;

    $course->save();

    return 'Course was created!';
});
