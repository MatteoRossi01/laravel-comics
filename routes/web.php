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
    $footerLink = config('footerLink');

    $comicsLink = [];
    $shopLink = [];
    $dcLink = [];
    $siteLink = [];
    $socialLink = [];
    foreach ($footerLink as $link){
        if($link['type'] == 'comics'){
            $comicsLink[]= $link;
        } elseif ($link['type'] == 'DC'){
            $dcLink[]= $link;
        } elseif ($link['type'] == 'shop'){
            $shopLink[]= $link;
        } elseif ($link['type'] == 'site'){
            $siteLink[]= $link;
        } else {
            $socialLink[] = $link;
        }
    }

    $data= ['comics' => $comics, 'menuLink' => $menuLink, 'linkBox' => $linkBox, 'footerLink' => $footerLink, 'comicsLink' => $comicsLink, 'shopLink' => $shopLink, 'dcLink' => $dcLink, 'siteLink' => $siteLink, 'socialLink' => $socialLink];
    return view('home', $data);
});
