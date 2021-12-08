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

Route::get('mirfanjquery', function () {
    return view('jquery');
});

Route::get('mirfanpraktikum2', function () {
    return view('praktikum2');
});



// Route::get('isiannama',"ViewController@showForm") ;
// Route::post('greetings',"ViewController@resultGreetings");


//uts
Route::get('mirfanuts',"ViewController@showuts");
//php
Route::get('mirfanphp',"ViewController@showphp");

//route CRUD
Route::get('/pegawai','PegawaiController@index');
Route::get('/pegawai/tambah','PegawaiController@tambah');
Route::post('/pegawai/store','PegawaiController@store');

Route::get('/pegawai/edit/{id}','PegawaiController@edit');
Route::post('/pegawai/update','PegawaiController@update');

Route::get('/pegawai/hapus/{id}','PegawaiController@hapus');

//Tugas Query Builder (25 Nov 2021)
Route::get('/pendapatan','PendapatanController@index');
Route::get('/pendapatan/tambah','PendapatanController@tambah');
Route::post('/pendapatan/store','PendapatanController@store');

Route::get('/pendapatan/edit/{id}','PendapatanController@edit');
Route::post('/pendapatan/update','PendapatanController@update');

Route::get('/pendapatan/hapus/{id}','PendapatanController@hapus');



Route::get('/absen','AbsenController@indexabsen');
Route::get('/absen/add','AbsenController@add');
Route::post('/absen/store','PendapatanController@store');

Route::get('/absen/edit/{id}','AbsenController@edit');
Route::post('/absen/update','AbsenController@update');

Route::get('/absen/hapus/{id}','AbsenController@hapus');

