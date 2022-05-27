<?php
use App\Http\Controllers\Front\page3\MainSectionController;
use App\Http\Controllers\Front\page3\ProjectController;
use App\Http\Controllers\Front\page3\about\sectionOneController;
use App\Http\Controllers\Front\page3\about\sectionTwoController;
use App\Http\Controllers\Front\page3\about\sectionThreeController;

use App\Http\Controllers\Front\page3\servicess\servOneController;
use App\Http\Controllers\Front\page3\servicess\servTwoController;
use App\Http\Controllers\Front\page3\servicess\servThreeController;



    Route::get('MainsectionPage3', [MainSectionController::class, 'show'])->name('MainsectionPage3');
    Route::post('Edit-MainsectionTable', [MainSectionController::class, 'edit']);
    Route::post('Store-MainsectionTable',[MainSectionController::class, 'storeMain']);
    Route::post('Delete-MainsectionTable',[MainSectionController::class, 'destroy']);
    Route::post('Create-MainsectionTable',[MainSectionController::class, 'create']); 

// About ///////
    Route::get('Aboutussection', [sectionOneController::class, 'showsec1'])->name('Aboutussection');
    Route::post('Edit1-AboutussectionTable', [sectionOneController::class, 'editsec1']);
    Route::post('Store1-AboutussectionTable',[sectionOneController::class, 'storesec1']);
    Route::post('Delete1-AboutussectionTable',[sectionOneController::class, 'destroysec1']);

    Route::get('AboutussectionTwo', [sectionTwoController::class, 'showsec2'])->name('AboutussectionTwo');
    Route::post('editMain', [sectionTwoController::class, 'editsec2']);
    Route::post('storeMain',[sectionTwoController::class, 'storesec2']);
    Route::post('destroyMain',[sectionTwoController::class, 'destroysec2']);

    Route::get('AboutussectionTableThree', [sectionThreeController::class, 'showw'])->name('AboutussectionTableThree');
    Route::post('editt', [sectionThreeController::class, 'editt']);
    Route::post('storee',[sectionThreeController::class, 'storee']);
    Route::post('destroyy',[sectionThreeController::class, 'destroyy']);

// end about /////////

// servicess start //////
    Route::get('ServicessOneTable', [servOneController::class, 'showserv1'])->name('ServicessOneTable');
    Route::post('edittmainsection', [servOneController::class, 'edittmainsection']);
    Route::post('storemainsection',[servOneController::class, 'storemainsection']);
    Route::post('destroymainsection',[servOneController::class, 'destroymainsection']);

    Route::get('ServicessTwoTable', [servTwoController::class, 'showserv2'])->name('ServicessTwoTable');
    Route::post('editservdetails', [servTwoController::class, 'editservdetails']);
    Route::post('storedetails',[servTwoController::class, 'storedetails']);
    Route::post('destroydetails',[servTwoController::class, 'destroydetails']);

    Route::get('ServicessThreeTable', [servThreeController::class, 'showserv3'])->name('ServicessThreeTable');
    Route::post('editserv', [servThreeController::class, 'editserv']);
    Route::post('storeserv',[servThreeController::class, 'storeserv']);
    Route::post('destroyserv',[servThreeController::class, 'destroyserv']);

// servicess end ///////


// projects start ////

    Route::get('Jobforms', [ProjectController::class, 'showJobforms'])->name('Jobforms');
    Route::post('destroyJobforms',[ProjectController::class, 'destroyJobforms']);
    Route::post('storeJobforms',[ProjectController::class, 'storeJobforms'])->name('storeJobforms');

// projects end ////




