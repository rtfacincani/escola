@extends('layouts.dashboard')
@section('section')
    <div class="container col-md-12">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-primary">
                    <div class="panel panel-heading">Registro de Aluno</div>
                    <div class="panel panel-body">
                        {!! Form::open(['route'=>'alunos.store','method'=>'POST']) !!}
                        <ul class="nav nav-tabs nav-pills">
                            <li class="active"><a href="#aluno" data-toggle="tab">Dados do Aluno</a></li>
                            <li><a href="#Resp" data-toggle="tab">Responsáveis</a></li>
                            <li><a href="#Saude" data-toggle="tab">Info. de Saúde</a></li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane active" id="aluno">
                                <div class="row">
                                    <br>
                                    <div class="col-md-2">
                                        <div class="form-group{{ $errors->has('Matricula') ? ' has-error' : '' }}">
                                            <input type="text" name="Matricula" id="nome_med" class="form-control" id="info_Mat" placeholder="Matrícula" value="{{old('Matricula')}}" required="required"/>
                                        </div>
                                        @if ($errors->has('Matricula'))
                                            <span class="help-block">
                                                  <strong class="text-danger">{{ $errors->first('Matricula') }}</strong>
                                            </span>
                                        @endif
                                    </div>

                                    <div class="col-md-5">
                                        <div class="form-group{{ $errors->has('Nome') ? ' has-error' : '' }}">
                                            <input type="text" name="Nome" id="nome_med" class="form-control" id="info" placeholder="Nome do Aluno" value="{{old('Nome')}}" required="required"/>
                                        </div>
                                        @if ($errors->has('Nome'))
                                            <span class="help-block">
                                                  <strong class="text-danger">{{ $errors->first('Nome') }}</strong>
                                            </span>
                                        @endif
                                    </div>

                                    <div class="col-md-3">
                                        <div class="form-group{{ $errors->has('DataNascimento') ? ' has-error' : '' }}">
                                            <input type="text" name="dtnasc" id="dtnasc" class="form-control" id="dtnasc" placeholder="Data de Nascimento" value="{{old('DataNascimento')}}" required="required"/>
                                        </div>
                                        @if ($errors->has('DataNascimento'))
                                            <span class="help-block">
                                                  <strong class="text-danger">{{ $errors->first('DataNascimento') }}</strong>
                                            </span>
                                        @endif
                                    </div>

                                    <div class="col-md-2">
                                        <div class="form-group{{ $errors->has('Sexo') ? ' has-error' : '' }}">
                                            <input type="text" name="sexo" id="sexo" class="form-control" id="sexo" placeholder="Sexo" value="{{old('Sexo')}}" required="required"/>
                                        </div>
                                        @if ($errors->has('Sexo'))
                                            <span class="help-block">
                                                  <strong class="text-danger">{{ $errors->first('Sexo') }}</strong>
                                            </span>
                                        @endif
                                    </div>

                                    <p></p>

                                    <div class="col-md-2">
                                        <div class="form-group{{ $errors->has('TelResidencial') ? ' has-error' : '' }}">
                                            <input type="text" name="telresidencial" id="telresidencial" class="form-control" id="telresidencial" placeholder="Tel. Residencial" value="{{old('TelResidencial')}}" required="required"/>
                                        </div>
                                        @if ($errors->has('TelResidencial'))
                                            <span class="help-block">
                                                  <strong class="text-danger">{{ $errors->first('TelResidencial') }}</strong>
                                            </span>
                                        @endif
                                    </div>

                                    <div class="col-md-2">
                                        <div class="form-group{{ $errors->has('CEP') ? ' has-error' : '' }}">
                                            <input type="text" name="cep" id="cep" class="form-control" id="cep" placeholder="CEP" value="{{old('CEP')}}" required="required"/>
                                        </div>
                                        @if ($errors->has('CEP'))
                                            <span class="help-block">
                                                  <strong class="text-danger">{{ $errors->first('CEP') }}</strong>
                                            </span>
                                        @endif
                                    </div>

                                    <div class="col-md-7">
                                        <div class="form-group{{ $errors->has('Endereco') ? ' has-error' : '' }}">
                                            <input type="text" name="endereco" id="endereco" class="form-control" id="endereco" placeholder="Endereço" value="{{old('Endereco')}}" required="required"/>
                                        </div>
                                        @if ($errors->has('Endereco'))
                                            <span class="help-block">
                                                  <strong class="text-danger">{{ $errors->first('Endereco') }}</strong>
                                            </span>
                                        @endif
                                    </div>

                                    <div class="col-md-1">
                                        <div class="form-group{{ $errors->has('Numero') ? ' has-error' : '' }}">
                                            <input type="text" name="numero" id="numero" class="form-control" id="numero" placeholder="No." value="{{old('Numero')}}" required="required"/>
                                        </div>
                                        @if ($errors->has('Numero'))
                                            <span class="help-block">
                                                  <strong class="text-danger">{{ $errors->first('Numero') }}</strong>
                                            </span>
                                        @endif
                                    </div>

                                    <p></p>

                                    <div class="col-md-6">
                                        <div class="form-group{{ $errors->has('Complemento') ? ' has-error' : '' }}">
                                            <input type="text" name="complemento" id="complemento" class="form-control" id="complemento" placeholder="Complemento" value="{{old('Complemento')}}" required="required"/>
                                        </div>
                                        @if ($errors->has('Complemento'))
                                            <span class="help-block">
                                                  <strong class="text-danger">{{ $errors->first('Complemento') }}</strong>
                                            </span>
                                        @endif
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group{{ $errors->has('Bairro') ? ' has-error' : '' }}">
                                            <input type="text" name="bairro" id="bairro" class="form-control" id="bairro" placeholder="Bairro" value="{{old('Bairro')}}" required="required"/>
                                        </div>
                                        @if ($errors->has('Bairro'))
                                            <span class="help-block">
                                                  <strong class="text-danger">{{ $errors->first('Bairro') }}</strong>
                                            </span>
                                        @endif
                                    </div>

                                    <p></p>

                                    <div class="col-md-6">
                                        <div class="form-group{{ $errors->has('Municipio') ? ' has-error' : '' }}">
                                            <input type="text" name="municipio" id="municipio" class="form-control" id="municipio" placeholder="Município" value="{{old('Municipio')}}" required="required"/>
                                        </div>
                                        @if ($errors->has('Municipio'))
                                            <span class="help-block">
                                                  <strong class="text-danger">{{ $errors->first('Municipio') }}</strong>
                                            </span>
                                        @endif
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group{{ $errors->has('Estado') ? ' has-error' : '' }}">
                                            <input type="text" name="estado" id="estado" class="form-control" id="estado" placeholder="Estado" value="{{old('Estado')}}" required="required"/>
                                        </div>
                                        @if ($errors->has('Estado'))
                                            <span class="help-block">
                                                  <strong class="text-danger">{{ $errors->first('Estado') }}</strong>
                                            </span>
                                        @endif
                                    </div>

                                </div>
                            </div>
                            <div class="tab-pane" id="Resp">
                                Responsáveis
                            </div>
                            <div class="tab-pane" id="Saude">
                                Informações de Saúde
                            </div>
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
