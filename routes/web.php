<?php

use App\Http\Controllers\Etudiantcontroller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Usercontroller;


Route::get('acceuil', function(){return view("acceuil");})->name('acceuil');
Route::get('signup', function(){return view("signup");})->name('signup');
Route::get('login', function(){return view("login");})->name('login');
Route::post('vlogin', [Usercontroller::class, 'vlogin'])->name('vlogin');
//user route
Route::post('create', [Usercontroller::class, 'create'])->name('create_user');
Route::get('reins', function(){return view("enregiper");})->name('reins');
//etudiant route
Route::get('ajoutetu', function(){return view("ajoutetu");})->name('ajoutetu');
Route::post('createtu', [Etudiantcontroller::class, 'createtu'])->name('createtu');
Route::get('succes', function(){return view("succes");})->name('succes');
Route::get('affichetu', [Etudiantcontroller::class, 'affichetu'])->name('affichetu');
Route::post('cherchetu', [Etudiantcontroller::class, 'cherchetu'])->name('cherchetu');
Route::get('searchetu', function(){return view("searchetu");})->name('searchetu');

// action sur etudiant
Route::get('editer/{id}', [Etudiantcontroller::class, 'vedit'])->name('editetu');
Route::put('vedit', [Etudiantcontroller::class, 'editer'])->name('vedit');
Route::get('showupdateetu', function(){return view("succesEditetu");})->name('show_update_etu');


