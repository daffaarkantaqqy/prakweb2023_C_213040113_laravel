<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view ('home', [
        "title" => "Home"
    ]);
});

Route::get('/about', function () {
    return view ('about', [
        "title" => "About",
        "name" => "Daffa Arkantaqqy",
        "email" => "daffaarkantaqqy@gmail.com",
        "image" => "foto.png"
    ]);
});


Route::get('/blog', function () {
    $blog_post = [
        [
            "title" => "Judul post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Daffa Arkantaqqy",
            "body" => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Modi consectetur accusantium ipsa eum placeat! Commodi laboriosam quibusdam dicta necessitatibus unde, cumque quia ipsum eveniet molestias nihil, repudiandae ex magnam illum natus quos aliquid nisi dignissimos harum labore numquam. Nemo dolore necessitatibus obcaecati ipsum dignissimos, perferendis pariatur magnam deserunt quos. Repudiandae praesentium voluptatum, dolorum, odio tenetur alias dolorem eveniet similique ad rem laboriosam quaerat vero nihil quam eos quae fugit reprehenderit magni cum. Alias saepe soluta et fugiat laboriosam, quidem modi!"
        ],
        [
            "title" => "Judul post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Muhammad Rizki",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia earum ducimus ratione accusantium nostrum fuga, quae atque, iusto quis nihil excepturi quod tempora consectetur. Quia, repudiandae. Dolore dolorem accusamus earum? Exercitationem sequi cupiditate, molestiae consectetur facere saepe laudantium! Voluptatibus tempore, cupiditate odio ex incidunt repellat praesentium obcaecati! Accusantium doloremque perspiciatis rem ipsum, eum sint in autem architecto, quos natus sequi nihil! Aperiam, dicta dolore labore optio obcaecati laudantium quasi enim aliquid officia id ad quos, porro quaerat harum. Ut quam illum quisquam eum officia soluta saepe alias non, velit ducimus doloremque ipsa obcaecati dolorum vel accusamus sapiente. Iusto, fugiat quod! Laboriosam vitae dolorum architecto cupiditate praesentium ipsa, iusto repellendus fuga!",
        ],
    ];
    return view ('posts', [
        "title" => "Posts",
        "posts" => $blog_post
    ]);
});




//halaman single post
Route::get('posts/{slug}', function($slug){
    $blog_post = [
        [
            "title" => "Judul post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Daffa Arkantaqqy",
            "body" => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Modi consectetur accusantium ipsa eum placeat! Commodi laboriosam quibusdam dicta necessitatibus unde, cumque quia ipsum eveniet molestias nihil, repudiandae ex magnam illum natus quos aliquid nisi dignissimos harum labore numquam. Nemo dolore necessitatibus obcaecati ipsum dignissimos, perferendis pariatur magnam deserunt quos. Repudiandae praesentium voluptatum, dolorum, odio tenetur alias dolorem eveniet similique ad rem laboriosam quaerat vero nihil quam eos quae fugit reprehenderit magni cum. Alias saepe soluta et fugiat laboriosam, quidem modi!"
        ],
        [
            "title" => "Judul post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Muhammad Rizki",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia earum ducimus ratione accusantium nostrum fuga, quae atque, iusto quis nihil excepturi quod tempora consectetur. Quia, repudiandae. Dolore dolorem accusamus earum? Exercitationem sequi cupiditate, molestiae consectetur facere saepe laudantium! Voluptatibus tempore, cupiditate odio ex incidunt repellat praesentium obcaecati! Accusantium doloremque perspiciatis rem ipsum, eum sint in autem architecto, quos natus sequi nihil! Aperiam, dicta dolore labore optio obcaecati laudantium quasi enim aliquid officia id ad quos, porro quaerat harum. Ut quam illum quisquam eum officia soluta saepe alias non, velit ducimus doloremque ipsa obcaecati dolorum vel accusamus sapiente. Iusto, fugiat quod! Laboriosam vitae dolorum architecto cupiditate praesentium ipsa, iusto repellendus fuga!",
        ],
    ];


    $new_post = [];
    foreach($blog_post as $post) {
        if($post["slug"] === $slug){
            $new_post = $post;
        }
    }
    return view('post', [
        "title" => "Single Post",
        "post" => $new_post
    ]);
});
