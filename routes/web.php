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
Route::post('/medewerkers/add', [MedewerkerController::class, 'store']);

Route::post('/medewerkers/delete/{id}', [MedewerkerController::class, 'delete']);

Route::get('/jongeren', [JongereController::class, 'index']);

Route::get('/jongeren/edit/{id}', [JongereController::class, 'edit']);
Route::post('/jongeren/edit/{id}', [JongereController::class, 'update']);

Route::get('/jongeren/add', [JongereController::class, 'add']);
Route::post('/jongeren/add', [JongereController::class, 'store']);

Route::post('/jongeren/delete/{id}', [JongereController::class, 'delete']);

Route::get('/activiteiten', [ActiviteitContoller::class, 'index']);

Route::get('/activiteiten/edit/{id}', [ActiviteitController::class, 'edit']);
Route::post('/activiteiten/edit/{id}', [ActiviteitController::class, 'update']);

Route::get('/activiteiten/add', [ActiviteitController::class, 'add']);
Route::post('/activiteiten/add', [ActiviteitController::class, 'store']);

Route::post('/activiteiten/delete/{id}', [ActiviteitController::class, 'delete']);


Route::post('/logout', function () {

    return redirect('auth.login');

});

Route::get('/dashboard', function () {
    return redirect('/');
});

require __DIR__.'/auth.php';
