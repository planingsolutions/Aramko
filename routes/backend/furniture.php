<?php

use App\http\Controllers\Front\Furniture\FurnitureController;

Route::get('furnitureTable', [FurnitureController::class, 'showfurniture'])->name('furnitureTable');
Route::post('Edit-furniture', [FurnitureController::class, 'editfurniture']);
Route::post('Store-furniture',[FurnitureController::class, 'storefurniture']);
Route::post('Delete-furniture',[FurnitureController::class, 'destroyfurniture']);
Route::post('Create-furniture',[FurnitureController::class, 'createfurniture']); 