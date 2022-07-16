<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\User;

class UserController extends Controller
{
    public function index(){

    $users = DB::table('users')
            ->where('users.id', '=', session('id'))
            ->first();

        return view('user.index', compact('users'));
    }
}
