@extends('layouts.dashboard')
@section('section')
    <style type="text/css">
        .none a{text-decoration: none}
        .cabecalho {text-align: center}
        thead tr th{
            background-color: #6b9dbb;
            color: white;
        }
    </style>
    <div class="container-fluid">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h2 class="panel-title"><i class="fa fa fa-child fa-fw"></i> Alunos</h2>
            </div>
            <div class="panel-body col-md-12">
                <div class="row">
                    @if (Session::has('message'))
                          <div class="alert alert-success fade in">
                              <a href="#" class="close" data-dismiss="alert">&times;</a>
                              <strong>Sucesso!</strong> {{ Session::get('message') }}
                          </div>
                    @endif
                </div>
                <div class="row">
                    <div class="col-md-5">
                        <div class="form-group">
                            <form action="alunos" method="get" role="search">
                                <div class="input-group custom-search-form">
                                    <span class="input-group-btn">
                                        <input type="text" name="search" class="form-control" id="search" placeholder="Pesquise pelo Nome"/>
                                        <button type="submit" class="btn btn-default-sm">
                                            <i class="fa fa-search"></i>
                                        </button>
                                    </span>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-md-1"></div>
                    <div class="col-md-5">

                        <a href="{{route('alunos.create')}}"> <button type="button" class="btn btn-success" ><i class="fa fa-plus"></i> Novo Aluno</button></a>
                        <div class="btn-group">
                            <button type="button" class="btn btn-info"><i class="fa fa-download"></i> Exportar</button>
                            <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown">
                                <span class="caret"></span>
                                <span class="sr-only">Toggole Dropdown</span>
                            </button>
                            <ul class="dropdown-menu" role="menu" id="export-menu">
                                <li id="export-to-pdf"><a href="{{route('alunos.pdf')}}"><i class="fa fa-file-pdf-o"></i> para PDF</a></li>
                                <li id="export-to-excel"><a href="{{route('alunos.xlsx')}}"><i class="fa fa-file-excel-o"></i> para Excel</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="table-responsive">
                        <table class="table table-hover table-striped table-condensed table-bordered">
                            <thead>
                            <tr>
                                <th class="cabecalho">
                                    Matrícula
                                </th>
                                <th class="cabecalho">
                                    <strong>Aluno</strong>
                                </th>
                                <th class="cabecalho">
                                    Sexo
                                </th>
                                <th class="cabecalho">
                                    Tel. Residencial
                                </th>
                                <th class="cabecalho">
                                    Alérgico?
                                </th>
                                <th class="cabecalho">
                                    Inadimplente?
                                </th>
                                <th class="cabecalho">
                                    <i class="glyphicon glyphicon-cog"></i> Ações
                                </th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($alunos as $key => $al)
                                <tr>
                                    <td class="col-md-1" id="alid{{$al->Matricula}}">{{$al->Matricula}}</td>
                                    <td class="col-md-4" id="alid{{$al->Nome}}">{{$al->Nome}}</td>
                                    <td class="col-md-1" align="center" id="alid{{$al->Sexo}}">{{$al->Sexo === "M" ? "Masculino" : "Feminino"}}</td>
                                    <td class="col-md-2" align="right" id="alid{{$al->TelResidencial}}">{{$al->TelResidencial}}</td>
                                    <td class="col-md-1" align="center" id="alid{{$al->ReacaoAlergica}}">{{$al->ReacaoAlergica === 0 ? "Não" : "Sim"}}</td>
                                    <td class="col-md-1" align="center" id="alid{{$al->TelResidencial}}">Não</td>
                                    <td class="none col-md-2" align="center">
                                        <div class="btn-toolbar">
                                            {{ Form::open(array('url' => 'alunos/' . $al->id)) }}
                                            {{ Form::hidden('_method', 'DELETE') }}
                                            <a href="{{ URL::to('alunos/' . $al->id) }}" class="btn btn-xs btn-info" data-id="{{$al->id}}" data-toggle="tooltip" title="Visualizar"><i class="glyphicon glyphicon-eye-open"></i></a>
                                            <a href="{{ URL::to('alunos/' . $al->id . '/edit') }}" class="btn btn-xs btn-primary" data-id="{{$al->id}}" data-toggle="tooltip" title="Alterar"><i class="glyphicon glyphicon-pencil"></i></a>

                                            {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['class'=>'btn btn-xs btn-danger', 'data-toggle'=>'tooltip','title'=>'Excluir','type'=>'submit']) !!}
                                            {!! Form::button('<i class="fa fa-list-alt"></i>', ['class'=>'btn btn-xs btn-warning', 'data-toggle'=>'tooltip','title'=>'Turma','type'=>'submit']) !!}
                                            {!! Form::button('<i class="fa fa-money"></i>', ['class'=>'btn btn-xs btn-success', 'data-toggle'=>'tooltip','title'=>'Financeiro','type'=>'submit']) !!}
                                            {{ Form::close() }}
                                        </div>

                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                            <tfoot>
                            <tr>
                                <td colspan="12"><center>{!! $alunos->links('layouts.pagination') !!}</center></td>
                            </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        $('[data-toggle="tooltip"]').tooltip();
    </script>
@endsection