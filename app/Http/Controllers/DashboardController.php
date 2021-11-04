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
                           ->with(['account','rooms'])
                           ->firstOrFail();
                    
        $roomCreated = $user->rooms->count();
        $totalOfRoom = $user->account->total_of_rooms;

        $firstValue = $roomCreated * 20;
        $secondValue = $totalOfRoom * 20;

        $percentage = $firstValue / $secondValue;

        $percentage = $percentage * 100;

        return view('dashboard.index', compact('user','percentage'));
    }
}
