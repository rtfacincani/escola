<?php

namespace App\Http\Controllers;

use PDF;

class PDFController extends Controller
{
    public function getPDF(){
        $medicamentos = medicamento::all();

        $pdf=PDF::loadview('pdf.medicamentos',['medicamentos'=>$medicamentos]);
        return $pdf->stream('medicamentos.pdf');
    }
    //
}
