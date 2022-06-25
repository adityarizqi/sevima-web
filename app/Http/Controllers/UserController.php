<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function get_index(){
        $params['data'] = auth()->user()->type == 'author' ?
            DB::Table('author_relations')->where('author_id', auth()->user()->id)->orderBy('user_id', 'DESC')->paginate(10) :
            DB::Table('author_relations')->orderBy('user_id', 'DESC')->paginate(10);
        return view('backend.user.index', $params);
    }
}
