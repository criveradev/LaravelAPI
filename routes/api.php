<?php

use App\Http\Controllers\Api\V1\PostController as V1PostController;;
use App\Http\Controllers\Api\V2\PostController as V2PostController;
use Illuminate\Support\Facades\Route;


#Ruta API version 1
Route::apiResource('v1/posts', V1PostController::class)
->only(['index','show','destroy'])
->middleware('auth:sanctum');

#Ruta API version 2
Route::apiResource('v2/posts', V2PostController::class)
->only(['index','show'])
->middleware('auth:sanctum');