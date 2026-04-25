<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Models\Contacto;

Route::get('/', function () {
    return view('welcome');
});

// 1. RUTA PARA VER LA AGENDA
Route::get('/agenda', function () {
    $contactos = Contacto::all(); // Recupera todos los contactos de la DB
    return view('agenda', compact('contactos')); // Carga la vista agenda.blade.php
});

// 2. RUTA PARA GUARDAR (La que ya tenías)
Route::post('/agenda', function (Request $request) {
    Contacto::create($request->all());
    return back();
});

Route::delete('/agenda/{id}', function ($id) {
    App\Models\Contacto::destroy($id);
    return back();
});