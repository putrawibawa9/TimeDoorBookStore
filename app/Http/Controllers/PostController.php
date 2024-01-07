<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Category;
use App\Models\Author;
use App\Models\User;
use Illuminate\Http\Request;
use Faker\Factory as Faker;

class PostController extends Controller
{
    public function index(){
        $faker = Faker::create();


        $title = '';
        if(request('category')){
            $category = Category::firstWhere('slug', request('category'));
            $title = 'in '. $category->name;
        }

        if(request('author')){
            $author = User::firstWhere('user_name', request('author'));
            $title = 'by '. $author->name;
        }
        return view('posts',[
            'title'=> 'All Books ' .$title,
            'posts' => Post::latest()->filter(request(['search', 'category','author']))->paginate(10)->withQueryString(),
            'gambar' => 'gambar.jpg',
            'ratings' =>  $faker->randomDigit(),
            'ratings2' =>  $faker->randomDigit(),
           
        ]);
    }

    public function top(){
        $faker = Faker::create();


        $title = '';
        if(request('category')){
            $category = Category::firstWhere('slug', request('category'));
            $title = 'in '. $category->name;
        }

        if(request('author')){
            $author = User::firstWhere('user_name', request('author'));
            $title = 'by '. $author->name;
        }
        return view('top',[
            'title'=> 'Top 10 Famous Books ' .$title,
            'posts' => Post::latest()->filter(request(['search', 'category','author']))->paginate(10)->withQueryString(),
            'gambar' => 'gambar.jpg',
            'ratings' =>  $faker->randomDigit(),
            'ratings2' =>  $faker->randomDigit(),
           
        ]);
    }

    public function rating(){
        $faker = Faker::create();


        $title = '';
        if(request('category')){
            $category = Category::firstWhere('slug', request('category'));
            $title = 'in '. $category->name;
        }

        if(request('author')){
            $author = User::firstWhere('user_name', request('author'));
            $title = 'by '. $author->name;
        }
        return view('rating',[
            'title'=> 'Give ratings ' .$title,
            'posts' => Post::latest()->filter(request(['search', 'category','author']))->paginate(10)->withQueryString(),
            'gambar' => 'gambar.jpg',
            'ratings' =>  $faker->randomDigit(),
            'ratings2' =>  $faker->randomDigit(),
           
        ]);
    }

    public function show(Post $post){
        return view('post',[
            'title' => ' single post',
            "post" => $post
        ]);
    }


}


