<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Api\V1\AuthorController as Authorsv1;
use App\Http\Controllers\Api\V1\BookController as Booksv1;

use App\Http\Controllers\Api\V2\AuthorController as Authorsv2;
use App\Http\Controllers\Api\V2\BookController as Booksv2;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::apiResource('v1/authors', Authorsv1::class)->except('destroy');
Route::apiResource('v1/books', Booksv1::class);

Route::apiResource('v2/authors', Authorsv2::class)->except('destroy');
Route::apiResource('v2/books', Booksv2::class);
