<?php

namespace App\Http\Controllers;

use App\Models\Medicamento;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
use Validator;
//use Input;
use Illuminate\Support\Facades\Input;
use Session;
//use Response;
use Maatwebsite\Excel;




class medicamentoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    //private $medicamento;

    public function __construct()
    {
        $this->middleware('auth');
        //$this->medicamento = $medicamento;
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
        $dadosformulario = $request->all(); //$request->all();   // $request->except('_token');
        $regras = array('Nome' => 'required|min:5|max:150');
        $validacao = Validator::make($dadosformulario,$regras);
        //dd($dadosformulario);
        //dd('entrei');

        if ($validacao->fails()) {
            //return 'Dados Inválidos';
            return Redirect::to('/cadmed')
                ->withErrors($validacao)
                ->withInput();
        }
        else{
            $med = new Medicamento;
            $med->Nome = Input::get('Nome');
            $med->save();
            Session::flash('message', 'Medicamento No.: '.$med->id.' cadastrado!');
            return redirect()->route('med.index');
        }

        //$resp = Medicamento::create($dadosformulario);

          //  dd($rep);
            /*if ($inserir)
                return redirect()->route('cadastro.medicamento.index')->with('sucesso','Medicamento criado com sucesso!');
            else
                return Redirect::to('/cadmed')
                    ->withErrors($inserir); **/

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
        $med = Medicamento::find($id);

        return view('cadastro.medicamento.medshow',['med' => $med]);

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
        // delete
        $med = Medicamento::find($id);
        $med->delete();

        // redirect
        Session::flash('message', 'Medicamento No.: '.$id.' removido da base de dados!');
        return redirect()->route('med.index');
    }
}
