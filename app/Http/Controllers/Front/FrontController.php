<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Course;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function home ()
    {
        return view('front.home.home', [
            'courses'   => Course::where('status', 1)->get(),

        ]);
    }

    public function courseDetails ()
    {
        return view('front.course.details');
    }
}
