<?php

use App\Http\Controllers\JongereController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MedewerkerController;

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
use Jongeren\Jongeren;

Route::get('/', function () {

    if (Auth::check()) {
        return view('index');
    } else {
        return redirect('/login');
    }
});

Route::get('/medewerkers', [MedewerkerController::class, 'index']);

Route::get('/medewerkers/edit/{id}', [MedewerkerController::class, 'edit']);
Route::post('/medewerkers/edit/{id}', [MedewerkerController::class, 'update']);

Route::get('/medewerkers/add', [MedewerkerController::class, 'add']);

Route::post('/medewerkers/delete/{id}', [MedewerkerController::class, 'delete']);

Route::get('/jongeren', [JongereController::class, 'index']);

Route::get('/jongeren/edit/{id}', [JongereController::class, 'edit']);

Route::post('/logout', function () {

    return redirect('auth.login');

});

Route::get('/dashboard', function () {
    return redirect('/');
});

require __DIR__.'/auth.php';
