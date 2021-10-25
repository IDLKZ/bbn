<?php

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

//Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//    return $request->user();
//});


Route::get('/books', function (){
    $data = [
      [
          'id' => 1,
          'title' => 'Title 1',
          'img' => 'https://wallpaperaccess.com/full/1968763.jpg',
          'description' => 'Hello World!'
      ],
        [
            'id' => 2,
            'title' => 'Title 2',
            'img' => 'https://wallpapercave.com/wp/wp3640533.jpg',
            'description' => 'Hello World 2!'
        ]
    ];

    return response()->json($data);
});
