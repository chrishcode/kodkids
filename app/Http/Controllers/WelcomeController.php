<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;

class WelcomeController extends Controller
{
    /**
     * Show the application splash screen.
     *
     * @return Response
     */
    public function show()
    {
        $courses = Course::orderBy('created_at', 'desc')->get();

        return view('welcome')->with('courses', $courses);
    }
}
