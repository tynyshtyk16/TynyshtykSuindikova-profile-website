<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use App\Models\Post;
use App\Http\Controllers\BlogController;
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


Route::get('/', function () {
    return view('home');
});

Route::get('/cv', function(){
	return view('cv');
});

Route::get('/about', function(){
	return view('about');
});
Route::get('/contact', function(){
	return view('contact');
});

Route::get('/skills', function(){
	return view('skills');
});

Route::get('post/create', function() {
    DB::table('post')->insert([
        'id' => 6,
        'title' => 'Lab',
        'body' => ' just post.'
    ]); 
});

Route::get('post',[BlogController::class, 'index']);

Route::get('post/create',function(){
    return view('blog.create');
});
Route::post('post/create', [BlogController::class, 'store'])->name('add-blog');

