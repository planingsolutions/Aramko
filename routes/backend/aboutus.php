<?php
use App\Http\Controllers\Backend\About\AboutSectionController;


Route::get('AboutsectionTable', [AboutSectionController::class, 'index'])->name('AboutsectionTable');

Route::post('Edit-AboutsectionTable', [AboutSectionController::class, 'edit']);
Route::post('Store-AboutsectionTable',[AboutSectionController::class, 'store']);
Route::post('Delete-AboutsectionTable',[AboutSectionController::class, 'destroy']);
Route::post('Create-AboutsectionTable',[AboutSectionController::class, 'create']);






