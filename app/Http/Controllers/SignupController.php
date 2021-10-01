<?php

namespace App\Http\Controllers;

use App\Models\Plan;
use Illuminate\Http\Request;

class SignupController extends Controller
{
    //adicionar um middleware no construct para permitir so os que nao tem conta (guest)
    //ver codigo do projeto antigo

    public function signup($planId)
    {
        $planInfo = Plan::where('id', $planId)->firstOrFail();
        return view('plans.signup.register', compact('planInfo'));
        //return view('auth.register', compact('planInfo'));
    }
}
