<?php

use App\Http\Resources\ItemResource;
use App\Http\Resources\UserResource;
use App\Models\Item;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::get('/user/{id}', function($id) {
    return new UserResource(User::findOrFail($id));
});

Route::get('/items', function() {
    return new ItemResource(Item::all());
});

Route::post('/user/{user}/inventory/add/{item}', function($userId, $itemId) {
    User::findOrFail($userId)->inventory()->syncWithoutDetaching($itemId);
});
