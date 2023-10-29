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

        return view('activiteiten.edit', ['activiteit' => Activiteit::find($id)]);
    }

    public function add()
    {

        if (!Auth::check()) {
            return redirect('login');
        }

        return view('activiteiten.add');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'description' => ['required', 'string']
        ]);

        Activiteit::create([
            'name' => $request->name,
            'description' => $request->description,
            'start_date' => $request->start_date,
            'end_date' => $request->end_date,
        ]);

        return redirect('activiteiten');
    }

    public function update($id, Request $request)
    {
        $activiteit = Activiteit::find($id);

        $activiteit->name = $request->name;
        $activiteit->description = $request->description;

        $activiteit->save();

        return redirect('activiteiten');
    }

    public function delete($id)
    {
        $activiteit = Activiteit::find($id);

        $activiteit->delete();

        return redirect('activiteiten');
    }
}
