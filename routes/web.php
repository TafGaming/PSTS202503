<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentsController;


Route::get('/', function () {
    return redirect('/students');
});




Route::resource('students', App\Http\Controllers\StudentsController::class);



