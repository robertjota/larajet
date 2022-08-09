<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\TagController;
use App\Http\Controllers\Admin\PostController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\PermissionController;
use App\Http\Controllers\Admin\EventoController;

Route::get('', [HomeController::class, 'index'])->middleware('can:admin.home')->name('admin.home');

Route::resource('users', UserController::class)->only(['index', 'edit', 'update'])->names('admin.users');

Route::resource('roles', RoleController::class)->names('admin.roles');

Route::resource('permissions', PermissionController::class)->names('admin.permissions');

Route::resource('categories', CategoryController::class)->except('show')->names('admin.categories');

Route::resource('tags', TagController::class)->except('show')->names('admin.tags');

Route::resource('posts', PostController::class)->except('show')->names('admin.posts');

//Route::group(['middleware' => ['auth']], function () {

    Route::get('eventos', [EventoController::class, 'index'])->middleware('can:admin.eventos.index')->name('admin.eventos.index');
    Route::get('eventos/mostrar', [EventoController::class, 'show']);
    Route::post('eventos/guardar', [EventoController::class, 'store']);
    Route::post('eventos/editar/{id}', [EventoController::class, 'edit']);
    Route::post('eventos/actualizar/{evento}', [EventoController::class, 'update']);
    Route::post('eventos/eliminar/{id}', [EventoController::class, 'destroy']);

//});



