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

// protip: namespacing name like user.create

Route::get('/', ['as' => 'home', function () {
    return view('home');
}]);

Route::get('welcome', ['as' => 'welcome', function () {
    return view('welcome');
}]);

Route::get('contact', ['as' => 'contact.form', function () {
    return view('contact');
}]);

Route::post('contact', ['as' => 'contact.submit', function () {
    // for debugging
    // dd(request()->input());

    // https://laravel.com/docs/5.4/validation
    $validation = validator(
        request()->only('name','email','message'),
        [
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required'
        ]
    );

    if ($validation->passes()) {
        // dd('passed!!!');
        Mail::to('sphamorn@gmail.com')->send(new App\Mail\Contact(request()));
        return view('success');

    }

    // for debugging
    // dd($validation->errors());

    // redirect to this route with the errors from our validator which grabs the error "message bag"
    // and put it into the session at the next request then destroyed .. see "flash session data"

    // the withInput allows you to use {{ old('message') }}
    // the form gets to use "old" input from the session data.
    // see the form at contact.blade.php
    return redirect()->route('contact.form')->withErrors($validation->errors())->withInput();
}]);

Route::get('contact/success', ['as' => 'contact.success', function () {
    return view('success');
}]);
