<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
//        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
//
        $comments = DB::table('comments')
            ->join('users', 'comments.user_id', '=', 'users.id')
            ->select('comments.id', 'users.id AS user_id', 'users.name', 'comments.comment', 'users.avatar', 'comments.created_at')
            ->offset(0)
            ->limit(3)
            ->orderBy('comments.id', 'asc')
            ->get();

        $sliders1 = DB::table('comments')
            ->join('users', 'comments.user_id', '=', 'users.id')
            ->select('comments.id', 'users.id AS user_id', 'users.name', 'comments.comment', 'users.avatar', 'comments.created_at')
            ->orderByRaw("RAND()")
            ->limit(2)
            ->get();
         $sliders2 = DB::table('comments')
            ->join('users', 'comments.user_id', '=', 'users.id')
            ->select('comments.id', 'users.id AS user_id', 'users.name', 'comments.comment', 'users.avatar', 'comments.created_at')
            ->orderByRaw("RAND()")
            ->limit(2)
            ->get();
         $sliders3 = DB::table('comments')
            ->join('users', 'comments.user_id', '=', 'users.id')
            ->select('comments.id', 'users.id AS user_id', 'users.name', 'comments.comment', 'users.avatar', 'comments.created_at')
            ->orderByRaw("RAND()")
            ->limit(2)
            ->get();



        return view('home', compact('comments', 'sliders1', 'sliders2', 'sliders3'));
    }
}
