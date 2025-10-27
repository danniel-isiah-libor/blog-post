<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/about', function () {
    return response()->json([
        'data' => 'John Doe'
    ], 200);
})->middleware('auth:api');

Route::post('/login', function (Request $request) {
    $email = $request->email;
    $password = $request->password;

    $req = request()->create('/oauth/token', 'POST', [
        'grant_type' => 'password',
        'client_id' => '019a2549-897e-734c-bbcd-d0056374c53c',
        'client_secret' => 'paa60K9Xp8wVbfYnVIj8zQh8m1TpOmSeqQeQPgPS',
        'username' => $email,
        'password' => $password,
        'scope' => '*',
    ]);

    $response = app()->handle($req);

    return response()->json(json_decode($response->getContent()));
});
