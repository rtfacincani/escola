@extends('layouts.dashboard')

<style>
#cont-img{
    width:115px;
    height:126px;
    padding:4px;
    float:left;
    border:2px solid #999;  
    margin-left: 16px;
    margin-bottom: 16px;
}

.center-img{
    width:97px;
    height:118px;
    max-width:115px !important;
    max-height:126px !important;
    top: 37%;
    left:50%;
    position:relative;
    margin-top:-43px; /*Metade do valor da altura da img*/
    margin-left:-50px; /*Metade do valor da largura da img*/
    cursor:pointer;
}

.horizontal-align {
    position: relative;

}
</style>

@section('section')
    <div class="container col-md-12">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-primary">
                    <div class="panel panel-heading">Registro de Aluno</div>
                    <div class="panel panel-body">
                        {!! Form::open(['route'=>'alunos.store','method'=>'POST']) !!}
                        <input type="hidden" name="_token" value="{{ Session::token() }}">

                        <ul class="nav nav-tabs nav-pills">
                            <li class="active"><a href="#aluno" data-toggle="tab">Dados do Aluno</a></li>
                            <li><a href="#Resp" data-toggle="tab">Responsáveis</a></li>
                            <li><a href="#Saude" data-toggle="tab">Info. de Saúde</a></li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane active" id="aluno">
                                <div class="row">
                                    <br>
                                    <div class="col-md-2" id="cont-img" title="Clique para alterar a foto">
                                        <img src = "{{ asset("images/padrao.png") }}" class='center-img' id="foto"></img>
                                        <input type="file" id="arqfoto" style="display:none">
                                    </div>                                    
                                    <div class="col-md-3">
                                        <div class="form-group{{ $errors->has('Matricula') ? ' has-error' : '' }}">
                                            <div class="input-group Matricula">
                                                <div class='input-group-addon'>
                                                    <span>Mat.</span>
                                                </div>    
                                                <input type="text" name="Matricula" id="nome_med" class="form-control" id="info_Mat" placeholder="Matrícula" value="{{old('Matricula')}}" required="required"/>
                                            </div>    
                                        </div>
                                        @if ($errors->has('Matricula'))
                                            <span class="help-block">
                                                  <strong class="text-danger">{{ $errors->first('Matricula') }}</strong>
                                            </span>
                                        @endif
                                    </div>

                                    <p></p>

                                    <div class="col-md-9">
                                        <div class="form-group{{ $errors->has('Nome') ? ' has-error' : '' }}">
                                            <div class="input-group Nome">
                                                <div class="input-group-addon">
                                                    <span>Nome</span>
                                                </div>    
                                                <input type="text" name="Nome" id="nome_med" class="form-control" id="info" placeholder="Nome do Aluno" value="{{old('Nome')}}" required="required"/>
                                            </div>    
                                        </div>
                                        @if ($errors->has('Nome'))
                                            <span class="help-block">
                                                  <strong class="text-danger">{{ $errors->first('Nome') }}</strong>
                                            </span>
                                        @endif
                                    </div>

                                    

                                    <div class="col-md-3">
                                        <div class="form-group{{ $errors->has('DataNascimento') ? ' has-error' : '' }}">
                                            <div class="input-group date">
                                                <div class="input-group-addon">
                                                    <span class="fa fa-calendar"></span>
                                                </div>
                                                <input type="text" name="dtnasc" id="dtnasc" class="form-control" id="dtnasc" placeholder="Nascimento" value="{{old('DataNascimento')}}" required="required" data-date-end-date="0d"/>
                                            </div>
                                        </div>
                                        @if ($errors->has('DataNascimento'))
                                            <span class="help-block">
                                                  <strong class="text-danger">{{ $errors->first('DataNascimento') }}</strong>
                                            </span>
                                        @endif
                                    </div>

                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <div class="input-group idade">
                                                <div class="input-group-addon">
                                                    <span class="fa fa-asterisk"></span>
                                                </div>
                                                <B>
                                                <input type="text" name="idade" id="idade" class="form-control"  disabled="disabled" value="{{old('idade')}}"/></B>
                                            </div>
                                        </div>
                                    </div>



                                    <div class="col-md-4">
                                        <div class="form-group{{ $errors->has('Sexo') ? ' has-error' : '' }}">
                                            <div class="input-group sexo">
                                                <div class="input-group-addon">
                                                    <span class="fa fa-female"><span class="fa fa-male"></span>
                                                </div>    
                                                {!!  Form::select('Sexo', ['F' => 'Feminino', 'M' => 'Masculino'],null,array('required','class' => 'form-control','placeholder'=>'Sexo','id'=>'sexo')) !!}
                                            </div>
                                            <!-- <input type="text" name="sexo" id="sexo" class="form-control" id="sexo" placeholder="Sexo" value="{{old('Sexo')}}" required="required"/> -->
                                        </div>
                                        @if ($errors->has('Sexo'))
                                            <span class="help-block">
                                                  <strong class="text-danger">{{ $errors->first('Sexo') }}</strong>
                                            </span>
                                        @endif
                                    </div>

                                    <div class="row"></div>

                                    <div class="col-md-3">
                                        <div class="form-group{{ $errors->has('TelResidencial') ? ' has-error' : '' }}">
                                            <div class="input-group Telefone">
                                                <div class="input-group-addon">
                                                    <span class="fa fa-phone"></span>
                                                </div>
                                                <input type="text" name="telresidencial" id="telresidencial" class="form-control" id="telresidencial" placeholder="Tel. Residencial" value="{{old('TelResidencial')}}" required="required"/>
                                            </div>
                                        </div>
                                        @if ($errors->has('TelResidencial'))
                                            <span class="help-block">
                                                  <strong class="text-danger">{{ $errors->first('TelResidencial') }}</strong>
                                            </span>
                                        @endif
                                    </div>

                                    <div class="col-md-3">
                                        <div class="form-group{{ $errors->has('CEP') ? ' has-error' : '' }}">
                                            <div class="input-group cep">
                                                <div class="input-group-addon">
                                                    <span>CEP</span>
                                                </div>
                                                <input type="text" name="cep" id="cep" class="form-control" placeholder="CEP só números" value="{{old('CEP')}}" required="required"/>
                                            </div>
                                        </div>
                                        @if ($errors->has('CEP'))
                                            <span class="help-block">
                                                  <strong class="text-danger">{{ $errors->first('CEP') }}</strong>
                                            </span>
                                        @endif
                                    </div>

                                    <div class="row"></div>

                                    <div class="col-md-8">
                                        <div class="form-group{{ $errors->has('Endereco') ? ' has-error' : '' }}">
                                            <div class="input-group rua">
                                                <div class="input-group-addon">
                                                    <span class="fa fa-home"></span>
                                                </div>
                                                <input type="text" name="rua" id="rua" class="form-control" id="endereco" placeholder="Endereço" value="{{old('Endereco')}}" required="required"/>
                                            </div>
                                        </div>
                                        @if ($errors->has('Endereco'))
                                            <span class="help-block">
                                                  <strong class="text-danger">{{ $errors->first('Endereco') }}</strong>
                                            </span>
                                        @endif
                                    </div>

                                    <div class="col-md-2">
                                        <div class="form-group{{ $errors->has('Numero') ? ' has-error' : '' }}">
                                            <div class="input-group numero">
                                                <div class="input-group-addon">
                                                    <span>No.</span>
                                                </div>
                                                <input type="text" name="numero" id="numero" class="form-control" id="numero" placeholder="No." value="{{old('Numero')}}" required="required"/>
                                            </div>
                                        </div>
                                        @if ($errors->has('Numero'))
                                            <span class="help-block">
                                                  <strong class="text-danger">{{ $errors->first('Numero') }}</strong>
                                            </span>
                                        @endif
                                    </div>

                                    <div class="row"></div>

                                    <div class="col-md-10">
                                        <div class="form-group{{ $errors->has('Complemento') ? ' has-error' : '' }}">
                                            <div class="input-group comp">
                                                <div class="input-group-addon">
                                                    <span>Complemento</span>
                                                </div>
                                                <input type="text" name="complemento" id="complemento" class="form-control" id="complemento" placeholder="Complemento" value="{{old('Complemento')}}" required="required"/>
                                            </div>
                                        </div>
                                        @if ($errors->has('Complemento'))
                                            <span class="help-block">
                                                  <strong class="text-danger">{{ $errors->first('Complemento') }}</strong>
                                            </span>
                                        @endif
                                    </div>

                                    <div class="row"></div>

                                    <div class="col-md-4">
                                        <div class="form-group{{ $errors->has('Bairro') ? ' has-error' : '' }}">
                                            <div class="input-group bairro">
                                                <div class="input-group-addon">
                                                    <span>Bairro</span>
                                                </div>
                                                <input type="text" name="bairro" id="bairro" class="form-control" id="bairro" placeholder="Bairro" value="{{old('Bairro')}}" required="required"/>
                                            </div>
                                        </div>
                                        @if ($errors->has('Bairro'))
                                            <span class="help-block">
                                                  <strong class="text-danger">{{ $errors->first('Bairro') }}</strong>
                                            </span>
                                        @endif
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group{{ $errors->has('Municipio') ? ' has-error' : '' }}">
                                            <div class="input-group cidade">
                                                <div class="input-group-addon">
                                                    <span>Mun.</span>
                                                </div>
                                                <input type="text" name="cidade" id="cidade" class="form-control" id="municipio" placeholder="Município" value="{{old('Municipio')}}" required="required"/>
                                            </div>
                                        </div>
                                        @if ($errors->has('Municipio'))
                                            <span class="help-block">
                                                  <strong class="text-danger">{{ $errors->first('Municipio') }}</strong>
                                            </span>
                                        @endif
                                    </div>

                                    <div class="col-md-2">
                                        <div class="form-group{{ $errors->has('Estado') ? ' has-error' : '' }}">
                                            <div class="input-group uf">
                                                <div class="input-group-addon">
                                                    <span>UF</span>
                                                </div>
                                                <input type="text" name="estado" id="estado" class="form-control" id="estado" placeholder="Estado" value="{{old('Estado')}}" required="required"/>
                                            </div>
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
                                <p></p>
                                <div class="col-md-6 ">
                                    <div class="form-group{{ $errors->has('Mae') ? ' has-error' : '' }}">
                                        <div class="input-group mae">
                                            <div class="input-group-addon">
                                                <span class="fa fa-female"></span>
                                            </div>
                                            <input type="text" name="mae" id="mae" class="form-control" id="mae" placeholder="Nome da Mãe" value="{{old('Mae')}}" required="required"/>
                                        </div>
                                    </div>
                                    @if ($errors->has('Mae'))
                                        <span class="help-block">
                                                  <strong class="text-danger">{{ $errors->first('Mae') }}</strong>
                                            </span>
                                    @endif
                                </div>

                                <div class="col-md-3 ">
                                    <div class="form-group{{ $errors->has('RGMae') ? ' has-error' : '' }}">
                                        <div class="input-group rgmae">
                                            <div class="input-group-addon">
                                                <span>RG</span>
                                            </div>
                                            <input type="text" name="rgmae" id="rgmae" class="form-control" id="rgmae" placeholder="RG da Mãe" value="{{old('RGMae')}}" />
                                        </div>
                                    </div>
                                    @if ($errors->has('RGMae'))
                                        <span class="help-block">
                                                  <strong class="text-danger">{{ $errors->first('RGMae') }}</strong>
                                            </span>
                                    @endif
                                </div>

                                <div class="col-md-3 ">
                                    <div class="form-group{{ $errors->has('CPFMae') ? ' has-error' : '' }}">
                                        <div class="input-group cpfmae">
                                            <div class="input-group-addon">
                                                <span>CPF</span>
                                            </div>
                                            <input type="text" name="cpfmae" id="cpfmae" class="form-control" id="cpfmae" placeholder="C.P.F. da Mãe" value="{{old('CPFMae')}}" />
                                        </div>
                                    </div>
                                    @if ($errors->has('CPFMae'))
                                        <span class="help-block">
                                                  <strong class="text-danger">{{ $errors->first('CPFMae') }}</strong>
                                            </span>
                                    @endif
                                </div>


                                <div class="row"></div>

                                <div class="col-md-3 ">
                                    <div class="form-group{{ $errors->has('CelMae') ? ' has-error' : '' }}">
                                        <div class="input-group celmae">
                                            <div class="input-group-addon">
                                                <span class="fa fa-phone"></span>
                                            </div>
                                            <input type="text" name="celmae" id="celmae" class="form-control" id="celmae" placeholder="Tel. Celular" value="{{old('CelMae')}}" required="required"/>
                                        </div>
                                    </div>
                                    @if ($errors->has('CelMae'))
                                        <span class="help-block">
                                                  <strong class="text-danger">{{ $errors->first('CelMae') }}</strong>
                                            </span>
                                    @endif
                                </div>

                                <div class="col-md-3 ">
                                    <div class="form-group{{ $errors->has('TelTrabMae') ? ' has-error' : '' }}">
                                        <div class="input-group teltrabmae">
                                            <div class="input-group-addon">
                                                <span class="fa fa-phone"></span>
                                            </div>
                                            <input type="text" name="teltrabmae" id="teltrabmae" class="form-control" id="teltrabmae" placeholder="Tel. do Trab." value="{{old('TelTrabMae')}}" />
                                        </div>
                                    </div>
                                    @if ($errors->has('TelTrabMae'))
                                        <span class="help-block">
                                                  <strong class="text-danger">{{ $errors->first('TelTrabMae') }}</strong>
                                            </span>
                                    @endif
                                </div>

                                <div class="col-md-2 ">
                                    <div class="form-group{{ $errors->has('RamalTrabMae') ? ' has-error' : '' }}">
                                        <input type="text" name="ramaltrabmae" id="ramaltrabmae" class="form-control" id="ramaltrabmae" placeholder="Ramal Trab." value="{{old('RamalTrabMae')}}" />
                                    </div>
                                    @if ($errors->has('RamalTrabMae'))
                                        <span class="help-block">
                                                  <strong class="text-danger">{{ $errors->first('RamalTrabMae') }}</strong>
                                            </span>
                                    @endif
                                </div>

                                <div class="col-md-4 ">
                                    <div class="form-group{{ $errors->has('EmailMae') ? ' has-error' : '' }}">
                                        <div class="input-group emailmae">
                                            <div class="input-group-addon">
                                                <span class="fa fa-envelope"></span>
                                            </div>
                                            <input type="text" name="emailmae" id="emailmae" class="form-control" id="emailmae" placeholder="E-mail da Mãe" value="{{old('EmailMae')}}" />
                                        </div>
                                    </div>
                                    @if ($errors->has('EmailMae'))
                                        <span class="help-block">
                                                  <strong class="text-danger">{{ $errors->first('EmailMae') }}</strong>
                                            </span>
                                    @endif
                                </div>

                                <div class="row nv-line"></div>

                                <p></p>
                                <div class="col-md-6 ">
                                    <div class="form-group{{ $errors->has('Pai') ? ' has-error' : '' }}">
                                        <div class="input-group pai">
                                            <div class="input-group-addon">
                                                <span class="fa fa-male"></span>
                                            </div>
                                            <input type="text" name="pai" id="pai" class="form-control" id="pai" placeholder="Nome do Pai" value="{{old('Pai')}}" required="required"/>
                                        </div>
                                    </div>
                                    @if ($errors->has('Pai'))
                                        <span class="help-block">
                                                  <strong class="text-danger">{{ $errors->first('Pai') }}</strong>
                                            </span>
                                    @endif
                                </div>

                                <div class="col-md-3 ">
                                    <div class="form-group{{ $errors->has('RGpai') ? ' has-error' : '' }}">
                                        <div class="input-group rgpai">
                                            <div class="input-group-addon">
                                                <span>RG</span>
                                            </div>
                                            <input type="text" name="rgpai" id="rgpai" class="form-control" id="rgpai" placeholder="RG do Pai" value="{{old('RGPai')}}" />
                                        </div>
                                    </div>
                                    @if ($errors->has('RGPai'))
                                        <span class="help-block">
                                                  <strong class="text-danger">{{ $errors->first('RGPai') }}</strong>
                                            </span>
                                    @endif
                                </div>

                                <div class="col-md-3 ">
                                    <div class="form-group{{ $errors->has('CPFPai') ? ' has-error' : '' }}">
                                        <div class="input-group cpfpai">
                                            <div class="input-group-addon">
                                                <span>CPF</span>
                                            </div>
                                            <input type="text" name="cpfpai" id="cpfpai" class="form-control" id="cpfpai" placeholder="C.P.F. do Pai" value="{{old('CPFPai')}}" />
                                        </div>
                                    </div>
                                    @if ($errors->has('CPFPai'))
                                        <span class="help-block">
                                                  <strong class="text-danger">{{ $errors->first('CPFPai') }}</strong>
                                            </span>
                                    @endif
                                </div>


                                <div class="row"></div>

                                <div class="col-md-3 ">
                                    <div class="form-group{{ $errors->has('CelPai') ? ' has-error' : '' }}">
                                        <div class="input-group celpai">
                                            <div class="input-group-addon">
                                                <span class="fa fa-phone"></span>
                                            </div>
                                            <input type="text" name="celpai" id="celpai" class="form-control" id="celpai" placeholder="Tel. Celular" value="{{old('CelPai')}}" required="required"/>
                                        </div>
                                    </div>
                                    @if ($errors->has('CelPai'))
                                        <span class="help-block">
                                                  <strong class="text-danger">{{ $errors->first('CelPai') }}</strong>
                                            </span>
                                    @endif
                                </div>

                                <div class="col-md-3 ">
                                    <div class="form-group{{ $errors->has('TelTrabPai') ? ' has-error' : '' }}">
                                        <div class="input-group teltraboai">
                                            <div class="input-group-addon">
                                                <span class="fa fa-phone"></span>
                                            </div>
                                            <input type="text" name="teltrabpai" id="teltrabpai" class="form-control" id="teltrabpai" placeholder="Tel. do Trab." value="{{old('TelTrabPai')}}" />
                                        </div>
                                    </div>
                                    @if ($errors->has('TelTrabPai'))
                                        <span class="help-block">
                                                  <strong class="text-danger">{{ $errors->first('TelTrabPai') }}</strong>
                                            </span>
                                    @endif
                                </div>

                                <div class="col-md-2 ">
                                    <div class="form-group{{ $errors->has('RamalTrabPai') ? ' has-error' : '' }}">
                                        <input type="text" name="ramaltrabpai" id="ramaltrabpai" class="form-control" id="ramaltrabpai" placeholder="Ramal Trab." value="{{old('RamalTrabPai')}}" />
                                    </div>
                                    @if ($errors->has('RamalTrabPai'))
                                        <span class="help-block">
                                                  <strong class="text-danger">{{ $errors->first('RamalTrabPai') }}</strong>
                                            </span>
                                    @endif
                                </div>

                                <div class="col-md-4 ">
                                    <div class="form-group{{ $errors->has('EmailPai') ? ' has-error' : '' }}">
                                        <div class="input-group emailpai">
                                            <div class="input-group-addon">
                                                <span class="fa fa-envelope"></span>
                                            </div>
                                            <input type="text" name="emailpai" id="emailpai" class="form-control" id="emailpai" placeholder="E-mail do Pai" value="{{old('EmailPai')}}" />
                                        </div>
                                    </div>
                                    @if ($errors->has('EmailPai'))
                                        <span class="help-block">
                                                  <strong class="text-danger">{{ $errors->first('EmailPai') }}</strong>
                                            </span>
                                    @endif
                                </div>


                            </div>
                            <div class="tab-pane" id="Saude">
                                <p></p>

                                <div class="col-md-4 ">
                                    <div class="form-group{{ $errors->has('TipoSanguineo') ? ' has-error' : '' }}">
                                        <div class="input-group tiposanguineo">
                                            <div class="input-group-addon">
                                                <span class="fa fa-heart"></span>
                                            </div>
                                            {!! Form::select('TipoSanguineo', ['A' => 'Tipo A', 'B' => 'Tipo B','AB'=>'Tipo AB','O'=>'Tipo O'], null, array('required','class' => 'form-control','placeholder'=>'Sel. Tipo Sanguíneo')) !!}
                                            <!-- <input type="text" name="tiposanguineo" id="tiposanguineo" class="form-control" id="tiposanguineo" placeholder="Tipo Sanguineo" value="{{old('TipoSanguineo')}}" /> -->
                                        </div>
                                    </div>
                                    @if ($errors->has('TipoSanguineo'))
                                        <span class="help-block">
                                                  <strong class="text-danger">{{ $errors->first('TipoSanguineo') }}</strong>
                                            </span>
                                    @endif
                                </div>

                                <div class="col-md-3 ">
                                    <div class="form-group{{ $errors->has('FatorRH') ? ' has-error' : '' }}">
                                        <div class="input-group fatorrh">
                                            <div class="input-group-addon">
                                                <span class="fa fa-heart"></span>
                                            </div>
                                            {!! Form::select('FatorRH', ['+' => 'Positivo', '-' => 'Negativo'], null, array('required','class' => 'form-control','placeholder'=>'Sel. Fator RH')) !!}
                                            <!-- <input type="text" name="fatorrh" id="fatorrh" class="form-control" id="fatorrh" placeholder="Fator RH" value="{{old('FatorRH')}}" /> -->
                                        </div>
                                    </div>
                                    @if ($errors->has('FatorRH'))
                                        <span class="help-block">
                                                  <strong class="text-danger">{{ $errors->first('FatorRH') }}</strong>
                                            </span>
                                    @endif
                                </div>

                                <div class="row"></div>

                                <div class="col-md-7">
                                    <div class="form-group{{ $errors->has('reacao') ? ' has-error' : '' }}">
                                        <div class="input-group reacao">
                                            <div class="input-group-addon">
                                                {{ Form::checkbox('reacao', 0, null, ['class' => 'field','id'=>'reacao']) }}
                                                
                                            </div>
                                            <input type="text" name="labelreacao" id="labelreacao" class="form-control" value="Possui reação alérgica a algum medicamento?">
                                            <!-- <input type="text" name="reacao" id="reacao" class="form-control" id="reacao" placeholder="Possui alguma reação alérgica a algum medicamento?" value="{{old('Pai')}}" required="required"/> -->
                                        </div>
                                    </div>
                                    @if ($errors->has('reacao'))
                                        <span class="help-block">
                                                  <strong class="text-danger">{{ $errors->first('reacao') }}</strong>
                                            </span>
                                    @endif
                                </div>

                                <div class="col-md-9" id="relmed" style="display: none;">
                                    <div class="form-group">
                                        {!! Form::label('labelrel','Relacão de Medicamentos. Marque todos que são alérgicos para o aluno!') !!}<br />
                                        {!! Form::select('medicamentos[]',
                                        $medicamentos,
                                        null,
                                        ['id'=>'med','class' => 'field input-sm','multiple' => true,
                                        'placeholder'=>'Selecione o(s) medicamento(s)...','size'=>'10'])!!}
                                    </div>
                                </div>

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

@section('script')

    <script type='text/javascript'>    
        $.ajaxSetup({
            headers: { 'X-CSRF-Token' : $('meta[name=_token]').attr('content') }
        });
        $(document).ready(function() {

            //$('.TelResidencial').mask('0000-0000');

            $("#foto").click(function(){
                var nome_arquivo
                $("#arqfoto").click();
                $('input:file').change(function(){
                    nome_arquivo = $( this ).val();
                    alert( nome_arquivo );
                });

                $("#foto").attr('src',nome_arquivo);
            });



            $("#cep").on('blur', function () {

                value = $(this).val();

                $.post("/alunos/cep", {cep: value}, function (data) {
                    $("#rua").val('');
                    $("#bairro").val('');
                    $("#cidade").val('');
                    $("#estado").val('');
                    if (data.sucesso != "0") {
                        $("#rua").val(data.rua);
                        $("#bairro").val(data.bairro);
                        $("#cidade").val(data.cidade);
                        $("#estado").val(data.estado);
                        $('#numero').focus();
                    }
                    else {
                        alert('Cep não localizado!');
                    }
                }, 'json');

            });


            //noinspection JSJQueryEfficiency
            $("#dtnasc").on('blur', function () {
                var nasc = $(this).val();
                var partes = nasc.split("/");
                var junta = partes[0] + "-" + (partes[1] - 1) + "-" + partes[2];
                var atual = new Date();
                var mesatual = atual.getMonth();
                //alert(mesatual+" - "+ (partes[1]-1));
                var idade = calculateAge(partes[0], partes[1] - 1, partes[2]);
                if(!isNaN(idade)){
                    $('#idade').val(idade + ' ano(s)');
                }
              
                $('#sexo').focus();

            });

            $("#reacao").click(function (evento) {
                if ($("#reacao").is(':checked')) {
                    $("#relmed").css("display", "block");
                } else {
                    $("#relmed").css("display", "none");
                }
            });

            //noinspection JSJQueryEfficiency
            $("#dtnasc").datepicker({
                format: "dd/mm/yyyy",
                language: "pt-BR",
                autoclose:false,
                clearBtn:true,
                todayHighlight:true
                });




            function calculateAge(dia, mes, ano) {
                var dob = new Date(ano, mes, dia);
                var currentDate = new Date();
                var age = currentDate.getFullYear() - dob.getFullYear();
                if (currentDate.getMonth() < dob.getMonth()) {
                    age--;
                } else if (currentDate.getMonth() == dob.getMonth()) {
                    if (currentDate.getDate() < dob.getDate()) {
                        age--;
                    }
                }
                return age;
            }
        });
    </script>
@stop
