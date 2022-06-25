<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthorController extends Controller
{
    public function get_index(){
        if(auth()->user()->details == null){
            return redirect()->route('backend.user.profile')->with('info','Silahkan lengkapi data diri Anda terlebih dahulu.');
        }
        return "s";
        // $params['data'] = auth()->user()->type == 'author' ?
        //     DB::Table('author_relations')->where('author_id', auth()->user()->id)->orderBy('user_id', 'DESC')->paginate(10) :
        //     DB::Table('users')->orderBy('name', 'DESC')->paginate(10);
        // return view('backend.author.index', $params);
    }
}
