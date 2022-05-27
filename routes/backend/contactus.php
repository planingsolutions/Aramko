<?php
use App\Http\Controllers\Front\ContactContrller;


Route::get('contactshow', [ContactContrller::class, 'contactshow'])->name('contactshow');

Route::post('contactdelete',[ContactContrller::class, 'contactdelete']);
Route::post('postcontact',[ContactContrller::class, 'postcontact']);







