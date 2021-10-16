<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        //validar o estado, se for pendente exibir apenas mensagem.

        $user = User::whereId(auth()->user()->id)
                           ->with(['account'])
                           ->firstOrFail();

        return view('dashboard.index', compact('user'));
    }
}
