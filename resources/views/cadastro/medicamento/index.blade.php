@extends('layouts.dashboard')
@section ('page_heading','Medicamentos')
@section ('section')
        <table class="table table-striped">
            <tr>
                <th>No.</th>
                <th>Nome do Remédio</th>
                <th>Ações</th>
            </tr>
            <a href="{{route('medicamento.create')}}">
                @include('widgets.button', array('class'=>'success btn-success fa fa-plus', 'size'=>'lg','value'=>' Novo Medicamento'))</a>
            <div class="col-md-3">
                {!! Form::open(['method'=>'GET','url'=>'medicamento','class'=>'navbar-form navbar-left','role'=>'search']) !!}
                <div class="input-group custom-search-form">
                    <input type="text" name="search" id="search" class="form-control" placeholder="Pesquise ....">
                    <span class="input-group-btn">
                        <button type="submit" class="btn btn-default-sm">
                            <i class="fa fa-search"></i>
                        </button>
                    </span>
                </div>
                {!! Form::close() !!}
            </div>
            <div class="btn-group">
                <button type="button" class="btn btn-info"><i class="fa fa-download"></i> Exportar</button>
                <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown">
                    <span class="caret"></span>
                    <span class="sr-only">Toggole Dropdown</span>
                </button>
                <ul class="dropdown-menu" role="menu" id="export-menu">
                    <li id="export-to-pdf"><a href="{{URL::to('getPDF')}}"><i class="fa fa-file-pdf-o"></i> Exportar para PDF</a></li>
                    <li id="export-to-excel"><a href="{{URL::to('getExcel')}}"><i class="fa fa-file-excel-o"></i> Exportar para Excel</a></li>
                </ul>
            </div>
            <p></p>
            <?php $no=1; ?>
            @foreach($medicamentos as $med)
                <tr>
                    <td>{{$no++}}</td>
                    <td>{{$med->Nome}}</td>
                    <td>
                        <form class="" action="{{route('medicamento.destroy',$med->id)}}" method="post">
                            <input type="hidden" name="_method" value="delete">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <a href="{{route('medicamento.edit',$med->id)}}"
                                @include('widgets.button', array('class'=>'primary fa fa-pencil', 'size'=>'sm', 'value'=>' Alterar'))</a>
                            <input type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Você tem certeza que deseja excluir?');" name="name" value=" Remover">
                        </form>
                    </td>
                </tr>
            @endforeach

        </table>
    </div>
    <center>{!! $medicamentos->links('layouts.pagination') !!}</center>
@stop
