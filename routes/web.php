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
    $linkSection = config('linkSection');

    $data= ['comics' => $comics, 'menuLink' => $menuLink, 'linkSection' => $linkSection,];
    return view('home', $data);
});
