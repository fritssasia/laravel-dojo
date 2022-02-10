<?php

namespace App\Models;

class Post
{
   private static $blog_posts = [
        [
            "title" => "Judul post pertama",
            "slug" => "judul-post-pertama",
            "author" => "Fritslx",
            "body" => "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Laboriosam, deleniti nihil. Aliquam hic quas ducimus quae fugiat eveniet error deserunt minima optio animi! Tempore officiis magni cumque, reprehenderit aspernatur magnam?"
        ],
        [
            "title" => "Judul post kedua",
            "slug" => "judul-post-kedua",
            "author" => "Syahrul",
            "body" => "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Laboriosam, deleniti nihil. Aliquam hic quas ducimus quae fugiat eveniet error deserunt minima optio animi! Tempore officiis magni cumque, reprehenderit aspernatur magnam? Lorem ipsum dolor, sit amet consectetur adipisicing elit. Laboriosam, deleniti nihil. Aliquam hic quas ducimus quae fugiat eveniet error deserunt minima optio animi! Tempore officiis magni cumque, reprehenderit aspernatur magnam?"
        ],
    ];

    public static function all()
    {
        return self::$blog_posts;
    }

    public static function find($slug)
    {
        $posts = self::$blog_posts;
        $post = [];
        foreach ($posts as $p) {
            if ($p["slug"] === $slug) {
                $post = $p;
            }
        }

        return $post;
    }
}
