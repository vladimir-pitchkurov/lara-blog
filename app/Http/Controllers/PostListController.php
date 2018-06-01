<?php

namespace App\Http\Controllers;

use App\Comment;
use App\Post;
use App\User;
use Illuminate\Http\Request;

class PostListController extends Controller
{
    public function show(){
        echo 'PostListController @ show - method';
        $a = User::all();
        $b = Post::all();
        $c = Comment::all();
        /*foreach ($c as $d){
            echo '<p>title = '.$d->title.'</p>';
        }
        echo '<br>id= '.$c[0]->id;*/
        //dd($c);

        $z = Post::find(1)->comments;

        $x = User::find(2)->posts;

        $q = Post::find(1)->user;

        dump($x);
        dump($z);
        dump($q);

        return;
    }
}
