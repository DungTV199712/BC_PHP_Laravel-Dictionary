<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/find', function () {
    return view('Dictionary');
});

Route::post('/login', function (Illuminate\Http\Request $request) {
    $dictionary = ["hello" => 'xin chao',
        "how" => 'nhu the nao',
        "book" => 'sach',
        "computer" => 'may tinh'
    ];

    foreach ($dictionary as $word => $description) {
        if ($request->search == $word) {
            return view('mean', [
                'dictionary' => $dictionary
            ]);
        }
    }

    return view('find_error');
});
