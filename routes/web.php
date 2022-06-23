<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Calendar;
use App\Models\Event;
use App\Http\Controllers\Auth\SocialLoginController;
use GuzzleHttp\Psr7\Request;
use Spatie\Sitemap\SitemapGenerator;

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
    return view('welcome');
});

Route::get('test', function () {
    return view('default');
});

Route::get('/contact', function (Request $request)
{

});

Route::get('home', function () {
    return view('welcome');
})->name('welcome');

Route::get('/template', function () {
    return view('template');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});


Route::view('/calendar', 'calendar');
Livewire::component('calendar', Calendar::class);

/* Manually generate sitemap */
Route::get("generate-sitemap", function () {

    SitemapGenerator::create('https://onlinewebtutorblog.com/')->writeToFile(public_path('sitemap.xml'));
    dd("done");
});

// Socialite Login
Route::get('login/social/{provider}', [SocialLoginController::class,'redirect'])->name('social.redirect');
Route::get('login/social/{provider}/callback',[SocialLoginController::class,'callback']);
