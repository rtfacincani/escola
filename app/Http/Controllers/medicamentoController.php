<?php

namespace App\Http\Controllers;

use App\Models\Medicamento;
use Illuminate\Http\Request;
use App\Http\Requests;
use Validator;
use Response;
use Illuminate\Support\Facades\Input;
use Maatwebsite\Excel;




class medicamentoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function medinfo()
    {
        $search = \Request::get('search');
        $medicamentos = Medicamento::where('Nome','like','%'.$search.'%')->orderBy('id')->paginate(10);
      //$medicamentos = Medicamento::all();
        //$medicamentos =  Medicamento::all();

      return view('cadastro.medicamento.index',['medicamentos' => $medicamentos]);
    }

    public function index()
    {
        $search = \Request::get('search');
        $medicamentos = Medicamento::where('Nome','like','%'.$search.'%')->orderBy('id')->paginate(15);
        //$medicamentos =  Medicamento::all();
        return view('cadastro.medicamento.index',['medicamentos' => $medicamentos]);
    }

    public function exportar(){
        $exportar = Medicamento::select('id as ID','Nome','created_at as Criado','updated_at as Atualizado')->get();
        \Excel::create('Tabela de Medicamentos', function($excel) use($exportar){
            $excel->sheet('Medicamentos',function($sheet) use($exportar){
                $sheet->fromArray($exportar);
            });
        })->export('xlsx');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cadastro.medicamento.registermed');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
