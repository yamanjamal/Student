<?php

use App\Http\Controllers\RecordController;
use App\Http\Controllers\SemesterController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\SubjectController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Auth::routes();


Route::group(['middleware' => 'auth'], function() {

   Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

   //فصل دراسي
    // +++++++++++++++++++++++++++++++start Semester api+++++++++++++++++++++++++++++++++++
    Route::group(['prefix' => 'semester' ,'as'=>'semester.'], function() {
        Route::get('/index',               [SemesterController::class,'index'])->name('index');;
        Route::get('/create',               [SemesterController::class,'create'])->name('create');;
        Route::get('/show/{semester}',      [SemesterController::class,'show' ])->name('show');;
        Route::post('/store',              [SemesterController::class,'store'])->name('store');;
        Route::put('/update/{semester}',    [SemesterController::class,'update'])->name('update');;
        Route::delete('/destroy/{semester}',[SemesterController::class,'destroy'])->name('destroy');;
    });
    // +++++++++++++++++++++++++++++++end Semester api+++++++++++++++++++++++++++++++++++


    // مادة
    // +++++++++++++++++++++++++++++++start Subjects api+++++++++++++++++++++++++++++++++++
    Route::group(['prefix' => 'subject' ,'as'=>'subject.'], function() {
        Route::get('/index',               [SubjectController::class,'index'])->name('index');;
        Route::get('/create',               [SubjectController::class,'create'])->name('create');;
        Route::get('/show/{subject}',      [SubjectController::class,'show' ])->name('show');;
        Route::post('/store',              [SubjectController::class,'store'])->name('store');;
        Route::put('/update/{subject}',    [SubjectController::class,'update'])->name('update');;
        Route::delete('/destroy/{subject}',[SubjectController::class,'destroy'])->name('destroy');;
    });
    // +++++++++++++++++++++++++++++++end Subjects api+++++++++++++++++++++++++++++++++++


//طالب
    // +++++++++++++++++++++++++++++++start Student api+++++++++++++++++++++++++++++++++++
    Route::group(['prefix' => 'student' ,'as'=>'student.'], function() {
        Route::get('/index',               [StudentController::class,'index'])->name('index');;
        Route::get('/create',               [StudentController::class,'create'])->name('create');;
        Route::get('/show/{student}',      [StudentController::class,'show' ])->name('show');;
        Route::post('/store',              [StudentController::class,'store'])->name('store');;
        Route::put('/update/{student}',    [StudentController::class,'update'])->name('update');;
        Route::delete('/destroy/{student}',[StudentController::class,'destroy'])->name('destroy');;
    });
    // +++++++++++++++++++++++++++++++end Student api+++++++++++++++++++++++++++++++++++

//جلسة
    // +++++++++++++++++++++++++++++++start Session api+++++++++++++++++++++++++++++++++++
    Route::group(['prefix' => 'session' ,'as'=>'session.'], function() {
        Route::get('/index',               [SessionController::class,'index'])->name('index');;
        Route::get('/create',              [SessionController::class,'create'])->name('create');;
        Route::get('/show/{session}',      [SessionController::class,'show' ])->name('show');;
        Route::post('/store',              [SessionController::class,'store'])->name('store');;
        Route::get('/edit/{session}',      [SessionController::class,'edit'])->name('edit');;
        Route::put('/update/{session}',    [SessionController::class,'update'])->name('update');;
        Route::delete('/destroy/{session}',[SessionController::class,'destroy'])->name('destroy');;
    });
    // +++++++++++++++++++++++++++++++end Session api+++++++++++++++++++++++++++++++++++

//سجل
    // +++++++++++++++++++++++++++++++start Record api+++++++++++++++++++++++++++++++++++
    Route::group(['prefix' => 'record' ,'as'=>'record.'], function() {
        Route::get('/index',               [RecordController::class,'index'])->name('index');;
        Route::get('/show/{record}',      [RecordController::class,'show' ])->name('show');;
        Route::post('/store',              [RecordController::class,'store'])->name('store');;
        Route::put('/update/{record}',    [RecordController::class,'update'])->name('update');;
        Route::delete('/destroy/{record}',[RecordController::class,'destroy'])->name('destroy');;
    });
    // +++++++++++++++++++++++++++++++end Record api+++++++++++++++++++++++++++++++++++


});



