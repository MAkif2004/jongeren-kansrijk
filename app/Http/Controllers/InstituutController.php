<?php

namespace App\Http\Controllers;

use App\Models\Instituut;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class InstituutController extends Controller
{
    public function index() {

        if (!Auth::check()) {
            return redirect('login');
        }

        return view('instituten.index',
            ['instituten' => Instituut::simplePaginate(8)->withQueryString()]
        );
    }

    public function add() {

        if (!Auth::check()) {
            return redirect('login');
        }

        return view('instituten.add');
    }

    public function edit($id) {

        $instituut = Instituut::find($id);

        if (!Auth::check()) {
            return redirect('login');
        }

        return view('instituten.edit')->with(['instituut' => $instituut]);
    }

    public function update($id, Request $request) {
        $instituut = Instituut::find($id);

        $instituut->naam = $request->name;

        $instituut->save();

        return redirect('instituten');
    }

    public function store(Request $request) {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
        ]);

        Instituut::create([
            'naam' => $request->name,
        ]);

        return redirect('instituten');
    }

    public function delete($id) {
        $instituut = Instituut::find($id);

        $instituut->delete();

        return redirect('instituten');
    }
}
