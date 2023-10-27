<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\View\View;

class Medewerkers extends Controller
{
    public function index(): View {
        return view('medewerkers.index', [
            'users' => User::simplePaginate(8)->withQueryString()
        ]);
    }
}
