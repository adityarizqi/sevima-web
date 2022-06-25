<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AuthorController extends Controller
{
    public function get_index(){
        if(auth()->user()->details == null){
            return redirect()->route('backend.user.profile')->with('info','Silahkan lengkapi data diri Anda terlebih dahulu.');
        }
        $detail = json_decode(auth()->user()->details);
        $par_city = strtolower($detail->city);
        $par_province = strtolower($detail->province);

        $par_merge = $par_city . ' ' . $par_province;

        $query = User::query();

        $query->where('id','!=',auth()->user()->id);

        $query->where('type','author');

        $query->where('key','like',"%{$par_merge}%");

        $params['data'] = $query->paginate(10);

        return view('backend.author.index', $params);
    }
}
