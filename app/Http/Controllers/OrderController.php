<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function get_index()
    {
        $params = [];
        if(auth()->user()->type == 'author'){
            $courses_id = Course::where('author_id', auth()->user()->id)->get()->map(function ($relation) {
                return $relation->id;
            });
            $params['data'] = Order::whereIn('course_id', $courses_id)->orderBy('id', 'DESC')->paginate(10);
        }else if(auth()->user()->type == 'admin'){
            $params['data'] = Order::orderBy('id', 'DESC')->paginate(10);
        }else{
            $params['data'] = Order::where('user_id', auth()->user()->id)->orderBy('id', 'DESC')->paginate(10);
        }

        return view('backend.order.index', $params);
    }
}
