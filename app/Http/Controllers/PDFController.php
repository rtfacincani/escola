<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;
Use App\Models\Medicamento;

class PDFController extends Controller
{
    function getPDF(){
        $medicamentos = medicamento::all();

        $pdf=PDF::loadview('pdf.medicamentos',['medicamentos'=>$medicamentos]);
        return $pdf->stream('medicamentos.pdf');
    }
    //
}
