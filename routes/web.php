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
    $data = [
        'brand'=>'BMW',
        'model'=>'118d M Sport',
        'km'=> 23.547,
        'color'=>'Grey',
    ];
    
    return view('homePage', $data);
});



Route::get('/chi-siamo', function () {
    return view('chiSiamo');
});



Route::get('/contatti', function () {
    return view('contatti');
});



Route::get('/catalogo-auto', function () {
    $catalogo = [

        'fascia'=> 'medio-alta',
        'autoUsate'=> [
                [
                'brand'=>'BMW',
                'model'=>'118d M Sport',
                'km'=> 23.547,
                'color'=>'Grey',
                ],
                [
                'brand'=>'Mercedes-Benz',
                'model'=>'A45 AMG 4Matic ',
                'km'=> 112.372,
                'color'=>'Grey',
                ],
                [
                'brand'=>'Audi Q3',
                'model'=>'35 TDI S tronic S line',
                'km'=> 53.349,
                'color'=>'white',
                ],
        ]
    ];

    return view('catalogoAuto', $catalogo);
});








