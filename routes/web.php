<?php

use Illuminate\Support\Facades\Route;



Route::match(['get','post'],'/', [App\Http\Controllers\Contact\ContactController::class, 'Contact'])->name('contact.form');






