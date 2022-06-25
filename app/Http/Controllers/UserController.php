<?php

namespace App\Http\Controllers;

use App\Models\Helper;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function get_index(){
        $params['data'] = auth()->user()->type == 'author' ?
            DB::Table('author_relations')->where('author_id', auth()->user()->id)->orderBy('user_id', 'DESC')->paginate(10) :
            DB::Table('users')->orderBy('name', 'DESC')->paginate(10);
        return view('backend.user.index', $params);
    }

    public function get_profile(){
        $params['user'] = auth()->user();
        $params['data'] = $params['user']->details != null ? json_decode($params['user']->details) : null;
        return view('backend.user.profile', $params);
    }

    public function post_profile(Request $request){
        $user = User::find(auth()->user()->id);
        $user->name = $request->name;

        if($request->has('image')){
            if($user->image != null && !str_contains($user->image, 'https://')){
                Helper::remove_image($user->image);
            }
            $user->image = Helper::upload_image('uploads/users/images', $request->image);
        }

        $user->details = json_encode($request->except(['_token', 'name', 'image']));
        $user->key = strtolower($request->get('city')) . ' ' . strtolower($request->get('province'));
        return $user->update() ? redirect()->back()->with('success', 'Profil berhasil diperbarui.') :
            redirect()->back()->with('error', 'Terjadi kesalahan.');
    }
}
