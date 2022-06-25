<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\News;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function get_index()
    {
        return view('frontend.index', [
            'news' => News::orderBy('id', 'DESC')->limit(4)->get(),
            'courses' => Course::inRandomOrder()->limit(3)->get(),
        ]);
    }

    public function get_page($page)
    {
        return view('frontend.page', ['page' => $page]);
    }
}
