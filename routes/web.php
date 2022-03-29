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

Route::get('/', function () {

    $menuLink = config('menuLink');
    $comics = config('comics');
    $linkBox = config('linkBox');

    $data= ['comics' => $comics, 'menuLink' => $menuLink, 'linkBox' => $linkBox,];
    return view('home', $data);
});
