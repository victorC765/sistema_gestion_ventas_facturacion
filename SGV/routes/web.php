<?php

use App\Http\Controllers\clienteController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\productosController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/productos',[productosController::class, 'index'])->name("productos.index");
Route::post('/buscarSerial',[productosController::class, 'index'])->name("productos.index.serial");
Route::post('/añadirProducto',[productosController::class, 'create'])->name("productos.create");
Route::post('/modificarProducto',[productosController::class, 'update'])->name("productos.update");
Route::get('/seriales',[productosController::class, 'mandar'])->name("productos.mandar");
Route::get('/xd',[productosController::class, 'mandar'])->name("productos.xd");
Route::post('/añadirserial',[productosController::class, 'añadirSerial'])->name("productos.añadirSerial");
Route::get('/clientes',[clienteController::class, 'index'])->name("clientes.index");
Route::post('/añadircliente',[clienteController::class, 'create'])->name("clientes.create");