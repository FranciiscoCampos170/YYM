<?php 
namespace App\Exports;

//use App\Invoice;

use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromView;

class PaymentReceipt implements FromView
{
    public function view(): View
    {
        $data = [];
        return view('exports.receipt', ['data' => $data]);        
    }
}