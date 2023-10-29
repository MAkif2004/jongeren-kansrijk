<?php

namespace App\Http\Controllers;

use App\Models\Activiteit;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ActiviteitController extends Controller
{
    public function index()
    {
        if (!Auth::check()) {
            return redirect('login');
        }

        return view('activiteiten.index', [
            'activiteiten' => Activiteit::simplePaginate(8)->withQueryString()
        ]);
    }

    public function edit($id)
    {

        if (!Auth::check()) {
            return redirect('login');
        }

        return view('medewerkers.edit', ['medewerker' => User::find($id)]);
    }

    public function add()
    {

        if (!Auth::check()) {
            return redirect('login');
        }

        return view('medewerkers.add');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:' . User::class],
            'password' => ['required'],
        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        return redirect('/medewerkers');
    }

    public function update($id, Request $request)
    {
        $medewerker = User::find($id);

        $medewerker->name = $request->name;
        $medewerker->email = $request->email;

        $medewerker->save();

        return redirect('medewerkers');
    }

    public function delete($id)
    {
        $medewerker = User::find($id);

        $medewerker->delete();

        return redirect('medewerkers');
    }
}
