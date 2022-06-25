<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function get_index()
    {
        return view('backend.index');
    }
}
