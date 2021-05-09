<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostsController extends Controller
{
    //
    public function index() {
        $id = 5;

        // $posts = DB::select('select * from posts where id = ?', [$id]);

        // $posts = DB::table('posts')
        // ->select('body')
        // ->where('id', $id)->get();

        // $posts = DB::table('posts')
        //     ->where('created_at', '<', now()->subDay())
        //     ->orWhere('title', 'Prof.')->get();

        // $posts = DB::table('posts')
        //         ->whereBetween('id', [2,5])->get();

        // $posts = DB::table('posts')
        //         ->whereNotNull('title')->get();

        // $posts = DB::table('posts')
        //         ->select('title')
        //         ->distinct()
        //         ->get();
        
        // $posts = DB::table('posts')
        //         ->orderBy('title', 'asc')
        //         ->get();

        // $posts = DB::table('posts')
        //         ->oldest()->get();

        // $posts = DB::table('posts')
        //         ->find($id);

        // $posts = DB::table('posts')
        //         ->where('id', $id)->count();

        // $posts = DB::table('posts')
        //         ->insert([
        //             'title' => 'New title',
        //             'body' => 'BA A A DD ',
        //         ]);

        // $posts = DB::table('posts')
        //         ->where('id', $id)
        //         ->update([
        //             'title' => 'Hello'
        //         ]);

        $posts = DB::table('posts')
                ->where('id', 6)
                ->delete();

        dd($posts);
    }
}
