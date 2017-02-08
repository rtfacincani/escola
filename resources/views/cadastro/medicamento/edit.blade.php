@extends('layouts.dashboard')
@section('section')
    <div class="container col-md-12">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-primary">
                    <div class="panel panel-heading">Alterando de Medicamento</div>
                    <div class="panel panel-body">

                        {{ Form::model($med, array('route' => array('med.update', $med->id), 'method' => 'PUT')) }}
                                <!-- <form action="/storemed" method="post" role="form"> -->
                        <div class="col-md-4">
                            <div class="form-group{{ $errors->has('Nome') ? ' has-error' : '' }}">

                                {{ Form::text('Nome', null, array('class' => 'form-control')) }}

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
                        <a href="{{ route('med.index')}}"><button type="button" class="btn btn-warning" ><i class="fa fa-times"></i><b style="font-family: Arial"> Cancelar</b></button></a>
                    </div>
                </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
@endsection
@section('script')
    <script type="text/javascript">

    </script>
@endsection