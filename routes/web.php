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

    $data = ['color' => 'red'];

    return view('home', $data);

})->name('home');


Route::get('boolean', function () {

    $data = [
        'h1' => [
            'color' => 'lime',
            'transformer' => 'uppercase'
        ]
    ];

    return view('boolean', $data);

})->name('boolean');
