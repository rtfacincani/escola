<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Models\Aluno;
use App\Models\Medicamento;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use PDF;
use Session;
use Validator;
use View;

//Use Redirect;

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

    public function cep(Request $request)
    {
        $cep = $request->input('cep');
        $url = "http://cep.republicavirtual.com.br/web_cep.php?formato=xml&cep=".$cep;
        $reg = simplexml_load_file($url);
        $dados['sucesso'] = (string) $reg->resultado;
        $dados['rua']     = (string) $reg->tipo_logradouro.' '.$reg->logradouro;
        $dados['bairro']  = (string) $reg->bairro;
        $dados['cidade']  = (string) $reg->cidade;
        $dados['estado']  = (string) $reg->uf;
        return $dados;
    }

    public function cep2x(Request $request){
        $cep = $request; // $_POST['cep'];

        $reg = simplexml_load_file("http://cep.republicavirtual.com.br/web_cep.php?formato=xml&cep=".$cep);



        $dados['sucesso'] = (string) $reg->resultado;
        $dados['rua']     = (string) $reg->tipo_logradouro.' '.$reg->logradouro;
        $dados['bairro']  = (string) $reg->bairro;
        $dados['cidade']  = (string) $reg->cidade;
        $dados['estado']  = (string) $reg->uf;

        //echo json_encode($dados);
        //Session::flash('message', 'CEP : '.$cep);
        return Response::json($cep);
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
        $med = Medicamento::select('id','Nome');
        return View::make('alunos.create',get_defined_vars());
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
