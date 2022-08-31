<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;


class AjaxController extends Controller
{
    public function render(Request $request)
    {
        $comments = DB::table('comments')
            ->join('users', 'comments.user_id', '=', 'users.id')
            ->select('comments.id', 'users.id AS user_id', 'users.name', 'comments.comment', 'users.avatar', 'comments.created_at')
            ->offset($request->count_comm)
            ->limit(3)
            ->orderBy('comments.id', 'asc')
            ->get();

        if(count($comments) == 0){
            return 'false';
        }

        return view('layouts.comment', compact('comments'));
    }

    public function addComment(Request $request)
    {
        $comm = new Comment();
        $comm->user_id = Auth::user()->id;
        $comm->comment = $request->body;
        $comm->save();

        $comment = Comment::where('user_id', Auth::user()->id)->orderBy('id','desc')->first();

        $comments = DB::table('comments')
            ->join('users', 'comments.user_id', '=', 'users.id')
            ->select('comments.id', 'users.id AS user_id', 'users.name', 'comments.comment', 'users.avatar', 'comments.created_at')
            ->where('comments.id', '=', $comment->id)
            ->get();

        return view('layouts.comment', compact('comments'));

    }

    public function searchAuthor(Request $request)
    {
        $search = $request->search;
        $authors = User::where('name', 'like', "%$search%")->get();

        if($authors->first()) {
            return view('layouts.filterAuthor', compact('authors'));
        } else return "false";


    }

    public function getCommentsAuthor(Request $request)
    {

        $comments = DB::table('comments')
            ->join('users', 'comments.user_id', '=', 'users.id')
            ->select('comments.id', 'users.id AS user_id', 'users.name', 'comments.comment', 'users.avatar', 'comments.created_at')
            ->where('users.id', '=', $request->user_id)
            ->orderBy('comments.id', 'asc')
            ->get();

        return view('layouts.comment', compact('comments'));

    }
    
}
