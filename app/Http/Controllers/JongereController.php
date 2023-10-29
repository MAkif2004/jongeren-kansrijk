<?php

namespace App\Http\Controllers;

use App\Models\Activiteit;
use App\Models\Instituut;
use App\Models\Jongere;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class JongereController extends Controller
{
    public function index() {

        if (!Auth::check()) {
            return redirect('login');
        }

        return view('jongeren.index',
            ['jongeren' => Jongere::simplePaginate(8)->withQueryString()]
        );
    }

    public function add() {

        if (!Auth::check()) {
            return redirect('login');
        }

        return view('jongeren.add',
            ['activiteiten' => Activiteit::all()],
            ['instituten' => Instituut::all()]);
    }

    public function edit($id) {

        $jongere = Jongere::find($id);
        $activiteiten = Activiteit::all();
        $instituten = Instituut::all();

        if (!Auth::check()) {
            return redirect('login');
        }

        return view('jongeren.edit')->with(['jongere' => $jongere])->with(['activiteiten' => $activiteiten])->with(['instituten' => $instituten]);
    }

    public function update($id, Request $request) {
        $jongere = Jongere::find($id);

        $jongere->name = $request->name;
        $jongere->birthdate = $request->birthdate;
        $jongere->gender = $request->gender;
        $jongere->instituut_id = $request->institute;
        $jongere->activiteit_id = $request->activity;

        $jongere->save();

        return redirect('jongeren');
    }

    public function store(Request $request) {
            $request->validate([
                'name' => ['required', 'string', 'max:255'],
                'birthdate' => ['required', 'date', 'max:255'],
                'gender' => ['required', 'string', 'max:17'],
            ]);

            Jongere::create([
                'name' => $request->name,
                'birthdate' => $request->birthdate,
                'gender' => $request->gender,
                'activiteit_id' => $request->activity,
                'instituut_id' => $request->institute
            ]);

            return redirect('/jongeren');
    }

    public function delete($id) {
        $jongere = Jongere::find($id);

        $jongere->delete();

        return redirect('jongeren');
    }
}
