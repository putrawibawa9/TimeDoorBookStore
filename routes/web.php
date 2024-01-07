<?php

use App\Models\User;
use App\Models\Post;
use App\Models\Category;
use App\Models\Volunteer;
use App\Models\Volunteers;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\VolunteerController;
use App\Http\Controllers\DashboardPostController;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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



Route::get('/', function ( ) {
    $user = User::where('id',1)->first();
  

    return view('home',[
        'title'=>'Home',
        'nana' => $user
    ]);
});


// Route::get('/about', function (Post $post) {
//     return view('about',[
//         'title'=>'About',
//         'nama'=> 'putra',
//         'alamat'=> 'sukawati',
//         'image'=> 'putra.jpg',
//         'post'=> $post
//     ]

// );
// });

Route::resource('/about', AboutController::class);




Route::get('/',[PostController::class, 'index' ] );

//halaman single post

Route::get('/posts/{post:slug}',[PostController::class, 'show']);


Route::get('/categories', function(){

    return view('categories',[
        'title' => 'Post Categories',
        'categories' => Category::all(),
        'gambar' => 'gambar.jpg'
    ]);
});


Route::get('/top',[PostController::class, 'top' ] );
Route::get('/ratings',[PostController::class, 'rating' ] );




Route::get('/dashboard', function(){
 return view ('dashboard.index');
})->middleware('auth');


Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);




Route::resource('/dashboard/posts', DashboardPostController::class);