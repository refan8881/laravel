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
Route::get('/about', function () {
    return '<h1>Hallo</h1>' .
        'selamat datang di web app saya<br>' .
        'laravel,emang keren';
});
Route::get('profi', function () {
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
route::get('anan}/{minum}/{harga}', function ($mkn, $mnm, $hrg) {
    return 'Makanan Yang Saya Pesan Adalah : ' . $mkn . '<br>'
        . 'Minuman : ' . $mnm . '<br>'
        . 'Total Harga : ' . $hrg;
});
// route optional parameter
route::get('halo/{nama?}', function ($nama = 'refan') {
    return 'hallo nama saya adalah ' . $nama;
});
// latihan route optional parameter
Route::get('pesanan/{makanan?}/{minuman?}/{harga?}', function ($makan = null, $minum = null, $hrg = null) {
    if (isset($makan)) {
        echo "anda memesan : " . $makan;
    }
    if (isset($minum)) {
        echo "dan : " . $minum;
    }
    if (isset($hrg)) {
        echo "dengan harga : " . $hrg;
    }
    if ($makan == null && $minum == null && $hrg == null) {
        echo "Anda Belum Memesan";
    }
});

route::get('/testmodel', function () {
    $query = new App\post;
    $query->title = " 5 amalan pembuka joodoh";
    $query->content = "shalat malam,sedekah,puasa sunnah,,silaturahmi";
    $query->save();
    return $query;
});

route::get('/penggajian', function () {

    $query = App\Penggajian::all();
    return $query;
});
route::get('data-gaji-1', function () {
    $gaji = App\Penggajian::where('nama', '=', 'bagas')->get();
    return $gaji;
});
route::get('data-gaji-2', function () {
    $gaji = App\Penggajian::select('id', 'nama', 'agama')
        ->where('agama', '=', 'islam')
        ->get();
    return $gaji;
});
route::get('data-gaji/{id}', function ($id) {
    $gaji = App\Penggajian::FindOrFail($id);
    return $gaji;
});