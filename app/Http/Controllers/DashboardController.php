<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Post;

class DashboardController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $user_id = auth()->user()->id; //getting user id from user model
        $user = User::find($user_id);
        return view('dashboard')->with('posts', $user->posts);
    }
}
//this was originaly HomeController but i change it to Dashboard controller
//so thing that needs to change is public const HOME = '/dashboard'; in provider foler at RouteServiceProvider