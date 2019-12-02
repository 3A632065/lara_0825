<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('posts', ['as' => 'posts.index', 'uses' => 'PostsController@index']);    //可省略

Route::get('post', ['as' => 'posts.show', 'uses' => 'PostsController@show']);

Route::get('about', ['as' => 'posts.about', 'uses' => 'PostsController@about']);

Route::get('contact', ['as' => 'posts.contact', 'uses' => 'PostsController@contact']);


Route::get('/', function () {
    //return view('welcome');
    /*
    \App\Post::create([
        'title'=>'test title',
        'content'=>'test content',
    ]);
    */
    /*
    $post = new\App\Post();
    $post->title = 'test title1';
    $post->content = 'test content1';
    $post->save();
    */
    /*
    $posts = \App\Post::all();
    dd($posts);
    */
    /*
    $post= \App\Post::find(1);
    dd($post);
    */
    /*
    $posts = \App\Post::where('id','<',10)->orderBy('id','DESC')->get();
    dd($posts);
    */
    /*
    $post = \App\Post::find(1);
    $post ->update ([
        'title'=>'updated title',
        'content'=>'updated content',
    ]);
    */
    /*
    $post = \App\Post::find(2);
    $post->title='saved title';
    $post->content='saved content';
    $post->save();
    */
    /*
    $post=\App\Post::find(9);
    $post->delete();
    */

    //\App\Post::destroy(11);

    //\App\Post::destroy(7,10,14);

    //6-1 1.2 取得Conllection
    /*
    $allPosts=\App\Post::all();
    dd($allPosts);
    */
    //6-1 3.4
    /*
    $featuredPosts=\App\Post::where('is_feature',1)->get();
    dd($featuredPosts);
    */

    //6-2 1.2 取得Model
    /*
    $fourthPost=\App\Post::find(8);
    dd($fourthPost);
    */
    //6-2 3.4
    /*
    $lastPost=\App\Post::orderBy('id','DESC')->first();
    dd($lastPost);
    */

    //在comments資料表當中建立多筆測試資料並對應post_id 2-3筆 (範例)
    /*
    $comment = new\App\Comment();
    $comment->content = 'test content2';
    $comment->post_id = '8';
    $comment->save();
    */

    //測試
    $post = \App\Post::find(2);
    echo $post->id.'    '.$post->title.'<br><hr>';
    foreach($post->comments as $comment) {
        echo '*'.$comment->content.'<br>';
    }

});
