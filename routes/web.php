<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

use Illuminate\Support\Facades\Auth;

Route::get('/', function () {

    if (Auth::check()) {
        return view('index');
    } else {
        return redirect('/login');
    }
});

Route::post('/logout', function () {

    return redirect('auth.login');

});

Route::get('/dashboard', function () {
    return redirect('/');
});

require __DIR__.'/auth.php';
