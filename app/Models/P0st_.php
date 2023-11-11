<?php

namespace App\Models;



class Post
{
    private static $blog_posts =[
        [
            "title" => "Judul Tulisan Pertama",
            "slug" => "judul-tulisan-pertama",
            "author" => "Daffa Arkantaqqy",
            "body" => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Modi consectetur accusantium ipsa eum placeat! Commodi laboriosam quibusdam dicta necessitatibus unde, cumque quia ipsum eveniet molestias nihil, repudiandae ex magnam illum natus quos aliquid nisi dignissimos harum labore numquam. Nemo dolore necessitatibus obcaecati ipsum dignissimos, perferendis pariatur magnam deserunt quos. Repudiandae praesentium voluptatum, dolorum, odio tenetur alias dolorem eveniet similique ad rem laboriosam quaerat vero nihil quam eos quae fugit reprehenderit magni cum. Alias saepe soluta et fugiat laboriosam, quidem modi!"
        ],
        [
            "title" => "Judul Tulisan Kedua",
            "slug" => "judul-tulisan-kedua",
            "author" => "Muhammad Rizki",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia earum ducimus ratione accusantium nostrum fuga, quae atque, iusto quis nihil excepturi quod tempora consectetur. Quia, repudiandae. Dolore dolorem accusamus earum? Exercitationem sequi cupiditate, molestiae consectetur facere saepe laudantium! Voluptatibus tempore, cupiditate odio ex incidunt repellat praesentium obcaecati! Accusantium doloremque perspiciatis rem ipsum, eum sint in autem architecto, quos natus sequi nihil! Aperiam, dicta dolore labore optio obcaecati laudantium quasi enim aliquid officia id ad quos, porro quaerat harum. Ut quam illum quisquam eum officia soluta saepe alias non, velit ducimus doloremque ipsa obcaecati dolorum vel accusamus sapiente. Iusto, fugiat quod! Laboriosam vitae dolorum architecto cupiditate praesentium ipsa, iusto repellendus fuga!",
        ]
        ];

        public static function all()
        {
            return collect(self::$blog_posts);
        }

        public static function find($slug)
        {
            $posts = static::all();
            return $posts->firstWhere('slug', $slug);
        }


        
}
