<?php

use Modules\User\Http\Controllers\Admin\UserController;

Route::get('user/add', [UserController::class, 'index']);
Route::post('user/add', [UserController::class, 'store']);
Route::get('user/list', [UserController::class, 'get']);

Route::get('user/edit/{id}', [UserController::class, 'edit']);
Route::post('user/edit/{id}', [UserController::class, 'update']);

Route::get('user/delete/{id}', [UserController::class, 'delete']);
