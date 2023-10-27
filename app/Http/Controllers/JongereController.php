<?php

namespace App\Http\Controllers;

use App\Models\Activiteit;
use App\Models\Instituut;
use App\Models\Jongere;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class JongereController extends Controller
{
    public function index() {

        if (!Auth::check()) {
            return redirect('login');
        }

        return view('jongeren.index',
            ['jongeren' => Jongere::simplePaginate(8)->withQueryString()],
            ['activiteiten' => Activiteit::all()],
            ['instituten' => Instituut::all()]
        );
    }
}
