<?php

use App\Http\Controllers\Api\v1\EmailController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::group(['prefix' => 'v1', 'namespace' => 'App\Http\Controllers\Api\v1'], function(){
    //Route::apiResource('email', EmailController::class);  //->middleware('auth:api');
    
    Route::post('/email/send', [EmailController::class, 
        'send_mail']);  //->middleware('auth:api');

    // Route::post('/account/register', function(Request $request) {
    //     return (new UserAccountController())->register($request);
    // });
});

// Route::post('/tokens/create', function (Request $request) {
//     $token = $request->user()->createToken($request->token_name);
 
//     return ['token' => $token->plainTextToken];
// });

// Route::get('profile', function () {
//     // Only authenticated users may enter...
// })->middleware('auth');

// Route::get('/settings/security', function () {
//     // Users must confirm their password before continuing...
// })->middleware(['auth', 'password.confirm']);

Route:: get ('/', function () {
    return 'Site is under maintainance, check back later!';
 });
 
//  http://localhost/user/dashboard
 
//  Route:: post('user/dashboard', function () {
//     return 'Welcome to dashboard';
//  });
 
// //  http://localhost/user/add
 
//  Route:: put('user/add', function () {
//  //
//  });
 
// //  http://localhost/post/example
 
//  Route:: delete('post/example', function () {
//  //
//  });