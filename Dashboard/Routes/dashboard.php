<?php 
use Illuminate\Support\Facades\Route;
// Route::get('/', fn()=> response('foo'));
Route::get('/', fn()=>view('dashboard::sites.index'));
