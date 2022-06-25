<?php

namespace App\Http\Controllers;

use App\Models\ARelation;
use App\Models\Course;
use App\Models\Order;
use App\Models\RRelation;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function get_index()
    {
        $params = [];
        if(auth()->user()->type == 'author'){
            $relations_id = ARelation::where('author_id', auth()->user()->id)->get()->map(function ($relation) {
                return $relation->id;
            });
            $params['customer_count'] = User::whereIn('id', $relations_id)->count();

            $courses_id = Course::where('author_id', auth()->user()->id)->get()->map(function ($relation) {
                return $relation->id;
            });

            $params['revenue'] = Order::where('payment_status', 'approved')->whereIn('course_id', $courses_id)
                ->get()->sum('payment_amount');
        }else if(auth()->user()->type == 'admin'){
            $params['customer_count'] = User::all()->count();
            $params['revenue'] = Order::where('payment_status', 'approved')->sum('payment_amount');
        }

        $params['course_count'] = Course::all()->count();

        $params['avg_rating'] = RRelation::all()->sum('score') / RRelation::all()->count();

        $params['rating_count'] = RRelation::all()->count();

        $params['rate_5'] = RRelation::where('score', 5)->count();
        $params['rate_4'] = RRelation::where('score', 4)->count();
        $params['rate_3'] = RRelation::where('score', 3)->count();
        $params['rate_2'] = RRelation::where('score', 2)->count();
        $params['rate_1'] = RRelation::where('score', 1)->count();

        return view('backend.dashboard.index', $params);
    }
}
