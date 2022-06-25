<?php

namespace App\Http\Controllers;

use App\Models\Withdraw;
use Illuminate\Http\Request;

class WithdrawController extends Controller
{
    public function get_index(){
        $params['data'] = auth()->user()->type == 'author' ?
            Withdraw::where('author_id', auth()->user()->id)->orderBy('id', 'DESC')->paginate(10) :
            Withdraw::where('status','pending')->orderBy('id', 'ASC')->paginate(10);
        return view('backend.withdraw.index', $params);
    }
}
