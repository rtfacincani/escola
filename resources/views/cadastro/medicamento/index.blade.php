@extends('layouts.dashboard')
@section ('page_heading','Médicamentos')
@section ('section')
        <table class="table table-striped">
            <tr>
                <th>No.</th>
                <th>Nome do Remédio</th>
                <th>Ações</th>
            </tr>
            <a href="{{route('medicamento.create')}}">
                @include('widgets.button', array('class'=>'success btn-outline', 'value'=>'Novo Medicamento'))</a>
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
                                @include('widgets.button', array('class'=>'primary', 'size'=>'sm', 'value'=>'Alterar'))</a>
                            <input type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Você tem certeza que deseja excluir?');" name="name" value="remover">
                        </form>
                    </td>
                </tr>
            @endforeach

        </table>
    </div>
    <center>{!! $medicamentos->links() !!}</center>
@stop
