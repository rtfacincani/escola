@extends('layouts.dashboard')
@section('section')
    <div class="container col-md-12">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-primary">
                    <div class="panel panel-heading">Registro de Aluno</div>
                    <div class="panel panel-body">
                        {!! Form::open(['route'=>'alunos.store','method'=>'POST']) !!}

                        <div class="col-md-4">
                            <div class="form-group{{ $errors->has('Nome') ? ' has-error' : '' }}">
                                <input type="text" name="Nome" id="nome_med" class="form-control" id="info" placeholder="Nome do Aluno" value="{{old('Nome')}}" required="required"/>
                            </div>
                            @if ($errors->has('Nome'))
                                <span class="help-block">
                                      <strong class="text-danger">{{ $errors->first('Nome') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                    <div class="panel panel-footer">
                        <button type="submit" class="btn btn-primary"><i class="fa fa-check"> <b style="font-family: Arial">Salvar</b></i></button>
                        <a href="{{ route('alunos.index')}}"><button type="button" class="btn btn-warning" ><i class="fa fa-times"></i><b style="font-family: Arial"> Cancelar</b></button></a>
                    </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection