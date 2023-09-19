<?php

namespace App\Models;



class Post 
{
   private static $blog_posts = [[
       "title" =>"Judul Blog 1",
       "slug" =>"judul-blog-1",
       "author" =>"Fajar",
       "body" =>"Salah satu andalan wisata Kota Yogyakarta adalah Pantai Parangtritsi. Tepatnya Pantai Parangtritis berada di Kecamatan Kretek, Bantul, Daerah Istimewa Yogyakarta. Pantai ini terletak sekitar 27 km arah selatan Yogyakarta."
    ],
    [
       "title" =>"Judul Blog 2",
       "slug" =>"judul-blog-2",
       "author" =>"Abdi",
       "body" =>"Pemandangan Pantai Parangtritis sangat memesona. Di sebelah kiri, terlihat tebing yang sangat tinggi, di sebelah kanan, kita bisa melihat batu karang besar yang seolah-olah siap menjaga gempuran ombak yang datang setiap saat. Pantai bersih dengan buih-buih putih bergradasi abu-abu dan kombinasi hijau sungguh elok."
   ]];

    public static function all()
    {
        return collect(self::$blog_posts);
    }

    public static function find($slug)
    {
        $posts = static::all();
        return $posts->firstWhere('slug' , $slug);
    }
}
