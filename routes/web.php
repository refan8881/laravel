<?php

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

// router basic
Route::get('/about',function(){
    return '<h1>Hallo</h1>'.
    'selamat datang di web app saya<br>'.
    'laravel,emang keren';
});
Route::get('profi',function()
{
    return view('biodata');
});

// route::get('refan',function()
// {
//     return view('r');
// });
// route::get('excecute',function()
// {
//     return view('e');
// });
// route::get('fliker',function()
// {
//     return view('f');
// });
// route::get('abilty',function()
// {
//     return view('a');
// });
// route::get('ndlesbattle',function()
// {
//     return view('n');
// });
route::get('pesan/{makanan}/{minum}/{harga}',function($mkn,$mnm,$hrg){
    return 'Makanan Yang Saya Pesan Adalah : '.$mkn.'<br>'
    .'Minuman : '.$mnm.'<br>'
    .'Total Harga : '.$hrg;
});
