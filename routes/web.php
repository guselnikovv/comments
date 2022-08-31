<?php

    use App\Http\Controllers\RegisterController;
    use Illuminate\Support\Facades\Auth;
    use Illuminate\Support\Facades\Route;

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

Route::post('/ajax', [App\Http\Controllers\AjaxController::class, 'render'])->name('getComments');
Route::post('/ajax/add_comment', [App\Http\Controllers\AjaxController::class, 'addComment'])->name('add_comment');
Route::post('/ajax/get_author', [App\Http\Controllers\AjaxController::class, 'searchAuthor'])->name('get_author');
Route::post('/ajax/get_comments_author', [App\Http\Controllers\AjaxController::class, 'getCommentsAuthor'])->name('get_author');
Route::get('/test', [App\Http\Controllers\AjaxController::class, 'test']);


Route::post('/', [RegisterController::class, 'create'])->name('register');

Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


