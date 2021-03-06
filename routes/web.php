<?php

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

require __DIR__.'/posts.php';

require __DIR__.'/works.php';

require __DIR__.'/contact.php';

require __DIR__.'/admin_posts.php';

require __DIR__.'/admin_works.php';

/*
|--------------------------------------------------------------------------
| ROUTES BACKOFFICE
|--------------------------------------------------------------------------
*/
Route::get('/dashboard', function () {
    return view('admin.dashboard.index');
})->middleware(['auth'])->name('dashboard');


require __DIR__.'/auth.php';
