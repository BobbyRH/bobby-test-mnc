<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\StepSatu;
use App\Http\Controllers\StepDuaSatu;
use App\Http\Controllers\StepDuaDua;
use App\Http\Controllers\StepDuaTiga;
use App\Http\Controllers\StepDuaEmpat;
use App\Http\Controllers\StepDuaLima;
use App\Http\Controllers\StepDuaEnam;

Route::get('/', function () {
    return view('mainstep');
});

Route::get('/step1/{soal}', [StepSatu::class,'index'])->name('step1');
Route::get('/step2/satu', [StepDuaSatu::class,'index'])->name('step21');
Route::get('/step2/dua', [StepDuaDua::class,'index'])->name('step22');
Route::get('/step2/tiga', [StepDuaTiga::class,'index'])->name('step23');
Route::get('/step2/empat', [StepDuaEmpat::class,'index'])->name('step24');
Route::post('/step2/empat/login', [StepDuaEmpat::class,'login'])->name('step24login');
Route::get('/step2/empat/logout', [StepDuaEmpat::class,'logout'])->name('step24logout');

Route::get('/step2/lima', [StepDuaLima::class,'index'])->name('step25');
Route::resource('posts', StepDuaEnam::class);

// Route::get('/step2/empat', [StepDuaEmpat::class,'index'])->name('step24');
// Route::post('/step2/empat', [StepDuaEmpat::class,'login']);