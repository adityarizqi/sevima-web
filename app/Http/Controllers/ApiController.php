<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\News;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ApiController extends Controller
{
    protected $user, $course, $news;

    public function __construct(User $user, Course $course, News $news) {
        $this->user = $user;
        $this->course = $course;
        $this->news = $news;
    }

    public function post_login_user(Request $request) {
        if(!$request->has('email') || !$request->has('password')){
            return response()->json([
                'status' => 400,
                'message' => 'Email and password are required.'
            ]);
        }
        $user = $this->user->where('email', $request->email)->first();
        if(Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            return response()->json([
                'status' => 200,
                'message' => 'Login berhasil.',
                'data' => $user,
            ]);
        }
        return response()->json([
            'status' => 400,
            'message' => 'Pengguna tidak ditemukan.',
        ]);
    }

    public function post_register_user(Request $request) {
        if(!$request->has('email') || !$request->has('password') || !$request->has('name')){
            return response()->json([
                'status' => 400,
                'message' => 'Email, password dan nama lengkap harus diisi.'
            ]);
        }
        $user = $this->user->where('email', $request->email)->first();
        if($user){
            return response()->json([
                'status' => 400,
                'message' => 'Email sudah terdaftar.'
            ]);
        }
        $user = $this->user->create([
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'name' => $request->name,
            'type' => 'user',
        ]);
        return response()->json([
            'status' => 200,
            'message' => 'Pendaftaran berhasil.',
            'data' => $user,
        ]);
    }

    public function get_detail_user(Request $request) {
        $user = $this->user->find($request->id);
        if(!$user){
            return response()->json([
                'status' => 400,
                'message' => 'Pengguna tidak ditemukan.'
            ]);
        }
        return response()->json([
            'status' => 200,
            'message' => 'Berhasil.',
            'data' => $user,
        ]);
    }

    public function get_course() {
        $course = $this->course->all();
        return response()->json([
            'status' => 200,
            'message' => 'Berhasil',
            'data' => $course,
        ]);
    }

    public function get_news() {
        $news = $this->news->all();
        return response()->json([
            'status' => 200,
            'message' => 'Berhasil',
            'data' => $news,
        ]);
    }

}
