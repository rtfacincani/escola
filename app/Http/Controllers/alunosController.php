<?php

namespace App\Http\Controllers;

use App\Models\Aluno;
use Illuminate\Http\Request;
use Maatwebsite\Excel;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Input;
use Session;
use Validator;
//Use Redirect;
use View;
use PDF;

class alunosController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }


    public function exportar(){
        $exportar = Aluno::select('Matricula','Nome')->get();
        \Excel::create('Tabela de Alunos', function($excel) use($exportar){
            $excel->sheet('Alunos',function($sheet) use($exportar){
                $sheet->fromArray($exportar);
            });
        })->export('xlsx');
    }

    public function alunopdf(){
        $alunos = Aluno::select('Matricula','Nome')->get();

        $pdf=PDF::loadview('pdf.alunos',['alunos'=>$alunos]);
        return $pdf->stream('alunos.pdf');
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $search = \Request::get('search');
        $alunos = Aluno::where('Nome','like','%'.$search.'%')->orderBy('id')->paginate(15);
        //$medicamentos =  Medicamento::all();
        return view('alunos.index',['alunos' => $alunos]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //return route('alunos.create');
        return View::make('alunos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Session::flash('message', 'Aluno Criado!');
        return Redirect::to('alunos');

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
        $aluno = Aluno::find($id);
        $mat = $aluno->Matricula;
        $aluno->delete();

        // redirect
        Session::flash('message', 'Aluno Matrícula No.: '.$mat.' removido da base de dados!');
        return Redirect::to('alunos');
    }
}
