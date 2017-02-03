@extends('layouts.dashboard')
@section('section')
    <div class="container col-md-12">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-primary">
                    <div class="panel panel-heading">Apresentando Medicamento</div>
                    <div class="panel panel-body">
                        <div class="col-md-12">
                            <strong>Nome do Medicamento:</strong> {{ $med->Nome }}<br>
                        </div>
                    </div>
                    <div class="panel panel-footer">
                        <a href="{{ route('med.index')}}"><button type="button" class="btn btn-info" ><i class="fa fa-undo"></i><b style="font-family: Arial"> Retornar</b></button></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('script')
    <script type="text/javascript">

    </script>
@endsection