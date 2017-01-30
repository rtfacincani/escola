@extends('layouts.dashboard')
@section('section')
    <div class="container col-md-12">
        <div class="row">
            <div class="col-md-12">
            <div class="panel panel-primary">
            <div class="panel panel-heading">Registro de Medicamento</div>
            <div class="panel panel-body">

            <form action="#" method="post" role="form">
            <div class="col-md-4">
            <div class="form-group">
                 <input type="text" name="nome" id="nome_med" class="form-control" id="info" placeholder="Nome do Medicamento"/>

            </div>
            </div>
            <div class="col-md-3">
                <div class="form-group">
                    <input type="submit" name="registrar" id="registrar" class="btn btn-primary" value="Gravar"/>
                </div>
            </div>

            </form>
            </div>
            </div>
        </div>
    </div>
@endsection
@section('script')
    <script type="text/javascript">

    </script>
@endsection