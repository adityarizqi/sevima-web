<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class VerificationController extends Controller
{
    public function get_identify_account(){
        return view('auth.identify', ['ignore_dashboard_layout' => true]);
    }

    public function post_identify_account(Request $request){
        $user = User::find(auth()->user()->id);
        $user->type = $request->type;
        return $user->save() ? redirect()->route('backend.dashboard') : redirect()->back()->with(['error' => 'Terjadi kesalahan.']);
    }
}
