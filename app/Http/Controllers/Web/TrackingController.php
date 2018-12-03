<?php

namespace App\Http\Controllers\Web;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TrackingController extends Controller
{
    public function index()
    {
        $users =  User::query()->whereType('user')->get();

        return view('users.index',compact('users'));
    }
}
