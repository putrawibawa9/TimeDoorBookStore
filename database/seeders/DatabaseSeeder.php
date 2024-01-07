<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Post;
use App\Models\Category;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        User::factory(100)->create();
        // User::create([
        //     'name' => 'Putra Wibawa',
        //     'email' => 'putrawibaw9@gmail.com',
        //     'password' => bcrypt('123')
        // ]);

        // User::create([
        //     'name' => 'Linda Damayanti',
        //     'email' => 'damayanti9@gmail.com',
        //     'password' => bcrypt('123')
        // ]);
        User::factory(100)->create();
        
        Category::factory(100)->create();

         Post::factory(200)->create();
        // Post::create([
        //     'category_id' => 1,
        //     'user_id' =>2,
        //     'title' => 'What is VS Code',
        //     'slug' => 'what-is-vs-code',
        //     'excerpt' => 'Visual Studio Code (VSCode) is a free',
        //     'body' =>'Visual Studio Code (VSCode) is a free and open-source source-code editor developed by Microsoft. It is a lightweight and highly customizable code editor that supports a wide range of programming languages and extensions. VSCode is designed to be simple and efficient while providing powerful features for developers.'
        // ]);

        // Post::create(
        // [
        //     'category_id' => 2,
        //     'user_id' =>1,
        //     'title' => 'What is PHP',
        //     'slug' => 'what-is-php',
        //     'excerpt' => 'PHP (Hypertext Preprocessor) is a server-side scripting language',
        //     'body' =>'PHP (Hypertext Preprocessor) is a server-side scripting language that is widely used for web development. It is an open-source, general-purpose scripting language that can be embedded into HTML. PHP is designed to be simple and easy to use, making it a popular choice for developing dynamic web pages and web applications.' 
        // ]);



     
    }
}
