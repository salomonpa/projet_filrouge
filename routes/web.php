<?php
use App\Http\Controllers\WelcomeController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('welcome', [WelcomeController::class, 'welcome'])->name('welcome');
Route::get('apropos', [WelcomeController::class, 'apropos'])->name('apropos');
Route::get('propriete', [WelcomeController::class, 'propriete'])->name('propriete');
Route::get('blog', [WelcomeController::class, 'blog'])->name('blog');
Route::get('contact', [WelcomeController::class, 'contact'])->name('contact');

