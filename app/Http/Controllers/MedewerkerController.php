<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class MedewerkerController extends Controller
{
    public function index() {
        if (!Auth::check()) {
            return redirect('login');
        }

        return view('medewerkers.index', [
            'users' => User::simplePaginate(8)->withQueryString()
        ]);
    }

    public function edit($id) {

        if (!Auth::check()) {
            return redirect('login');
        }

        return view('medewerkers.edit', ['medewerker' => User::find($id)]);
    }

    public function update($id, Request $request) {
        $medewerker = User::find($id);

        $medewerker->name = $request->name;
        $medewerker->email = $request->email;

        $medewerker->save();

        return redirect('medewerkers');
    }

    public function delete($id) {
        $medewerker = User::find($id);

        $medewerker->delete();

        return redirect('medewerkers');
    }
}
