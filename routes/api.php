<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('subscription', function () {
    sleep(2);

   return response()->json([
       'subscription' => 'details'
   ]);
});
