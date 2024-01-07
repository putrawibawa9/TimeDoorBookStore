<?php

namespace App\Models;


class Post
{
    private static $blog_post = [
        [
            "title" => "judul post pertama",
            "slug" =>"judul1",
            "author"=> "putra wibawa",
            "body" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maiores, delectus. Repellat odio quas officiis sit fugiat inventore ex expedita sint, quis facere exercitationem voluptatem. Ab perspiciatis omnis facere id necessitatibus quae sit excepturi vero, eius, quibusdam corrupti labore non in!"
        ],
        [
            "title" => "judul post kedua",
            "slug" =>"judul2",
            "author"=> "linda damayanti",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores, debitis. Illum suscipit, natus ullam ab deleniti nesciunt? Quisquam atque eveniet ducimus deleniti nisi eius maiores dolor fugiat illum dicta, enim iste facere consequatur id consequuntur pariatur magni, sed est quae dolorem totam inventore iusto culpa? Cum, accusamus obcaecati. Vel, officia numquam perferendis in modi at voluptatum consequatur autem consectetur cupiditate pariatur, dolore esse. Unde animi deleniti neque! Illo, modi nam consequuntur optio ut earum fugiat ratione animi ducimus perspiciatis voluptate necessitatibus consectetur corrupti numquam ipsum fuga dolore possimus similique mollitia quia suscipit laudantium. Enim, eveniet fugiat. Impedit optio totam libero!" 
        ]
        ];

    public static function all(){
        return collect(self::$blog_post);
    }

    public static function find($slug){
        $posts = static::all();
      
        return $posts->firstWhere('slug', $slug);
    }
}


