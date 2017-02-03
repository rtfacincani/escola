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
                <h2 class="panel-title"><i class="fa fa fa-heartbeat fa-fw"></i> Medicamentos</h2>
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
                            <form action="medicamento" method="get" role="search">
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
                        <a href="{{ route('med.create')}}"> <button type="button" class="btn btn-success" ><i class="fa fa-plus"></i> Novo Medicamento</button></a>
                        <div class="btn-group">
                            <button type="button" class="btn btn-info"><i class="fa fa-download"></i> Exportar</button>
                            <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown">
                                <span class="caret"></span>
                                <span class="sr-only">Toggole Dropdown</span>
                            </button>
                            <ul class="dropdown-menu" role="menu" id="export-menu">
                                <li id="export-to-pdf"><a href="{{URL::to('getPDF')}}"><i class="fa fa-file-pdf-o"></i> para PDF</a></li>
                                <li id="export-to-excel"><a href="{{URL::to('export')}}"><i class="fa fa-file-excel-o"></i> para Excel</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="table-responsive">
                        <table class="table table-hover table-striped table-condensed table-bordered">
                            <thead>
                            <tr>
                                <th>
                                    ID
                                </th>
                                <th>
                                    Nome do Medicamento
                                </th>
                                <th class="cabecalho">
                                    <i class="glyphicon glyphicon-cog"></i> Ações
                                </th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($medicamentos as $key => $med)
                                <tr>
                                    <td class="col-md-1" id="medid{{$med->id}}">{{$med->id}}</td>
                                    <td class="col-md-9" id="medid{{$med->Nome}}">{{$med->Nome}}</td>
                                    <td class="none col-md-2" align="center">
                                        <div class="btn-toolbar">
                                            {{ Form::open(array('url' => 'med/' . $med->id)) }}
                                            {{ Form::hidden('_method', 'DELETE') }}
                                            <a href="{{ URL::to('med/' . $med->id) }}" class="btn btn-xs btn-info" data-id="{{$med->id}}" data-toggle="tooltip" title="Visualizar"><i class="glyphicon glyphicon-eye-open"></i></a>
                                            <a href="#" class="btn btn-xs btn-primary" data-id="{{$med->id}}" data-toggle="tooltip" title="Alterar"><i class="glyphicon glyphicon-pencil"></i></a>

                                            {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['class'=>'btn btn-xs btn-danger', 'data-toggle'=>'tooltip','title'=>'Excluir','type'=>'submit']) !!}
                                            {{ Form::close() }}
                                        </div>

                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                            <tfoot>
                            <tr>
                                <td colspan="3"><center>{!! $medicamentos->links('layouts.pagination') !!}</center></td>
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