<?php

namespace App\Http\Controllers;

use App\Http\Requests\SignupStoreRequest;
use App\Models\AccountInfo;
use App\Models\Plan;
use App\Models\User;
use DateTime;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Exports\PaymentReceipt;
use Maatwebsite\Excel\Excel;
use Maatwebsite\Excel\Facades;
use Maatwebsite\Excel\Facades\Excel as FacadesExcel;


class SignupController extends Controller
{
    //adicionar um middleware no construct para permitir so os que nao tem conta (guest)
    //ver codigo do projeto antigo

    public function signup($planId)
    {
        //Plan::create(['name' => "PLANO-PREMIUM", 'price' => 7000]);
        //Plan::create(['name' => "PLANO-ESCOLAR", 'price' => 5400 ]);
        //validar caso ele meta id errado na url redirectionar para a pagina actual
        $planInfo = Plan::where('id', $planId)->firstOrFail();
        return view('plans.signup.register', compact('planInfo'));
        //return view('auth.register', compact('planInfo'));
    }

    public function store(SignupStoreRequest $request)
    {
        try {
        //cadastrar utilizador
            // validar email, tem que ser unico.
            //se o metodo de pagamento selecionado for transferencia verificar se o campo de arquivo tem valor e armazenar
            //validar arquivo carregado: precisa ser pdf
        DB::transaction(function () use($request){
            $user = User::create([
                    'name' => $request->get('firstName') ." ". $request->get('lastName'),
                    'email' => $request->get('email'),
                    'password' => Hash::make($request->get('password')),
                ]);

            $signup = AccountInfo::create([
                'plan_id' => $request->get('selected_plan'), 
                'month' => $request->get('payment_period'),
                'total' => $request->get('total_to_pay'),
                'payment_method' => 1,
                'total_of_rooms' => $request->get('total_of_rooms'),
                'file' => $request->get('file') ?: 'null',
                'user_id' => $user->id,
                'state' => "pending",
                'paid_at' => now()
            ]);

            if ($request->get('userAccountTypeRadio') == 2) {
                $fileName = time().'_'.$request->file->getClientOriginalName();
                $filePath = $request->file->move(public_path('comprovativos'), $fileName);
                
                $signup->file = $fileName;
                $signup->save();
            }

            return redirect()->route('signup.success');
   
        });
        }catch (\Exception $e) {
            return redirect()->back();
        }
    }

    public function generateReceipt(Request $request)
    {
        //return response()->json($request);
         return FacadesExcel::download(new PaymentReceipt, 'xxx.pdf');
            //return response()->json($pdf);
        //return response()->json("ola!");
        
    }
}
