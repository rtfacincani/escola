<!-- @include('widgets.button', array('class'=>'primary fa fa-pencil', 'size'=>'sm', 'value'=>' Alterar'))</a> -->

<form class="" action="{{route('medicamento.destroy',$med->id)}}" method="post">
    <input type="hidden" name="_method" value="delete">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">

    <input type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Você tem certeza que deseja excluir?');" name="name" value=" Remover">
</form>


@extends ('layouts.plane')
@section ('body')
<div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
            <br /><br /><br />
               @section ('login_panel_title','Por favor informe os dados')
               @section ('login_panel_body')
                        <form role="form">
                            <fieldset>
                                <div class="form-group">
                                    <input class="form-control" placeholder="E-mail" name="email" type="email" autofocus>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Password" name="password" type="password" value="">
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input name="remember" type="checkbox" value="Lembre-se de mim">Lembre-se de mim
                                    </label>
                                </div>
                                <!-- Change this to a button or input when using this as a form -->
                                <a href="{{ url ('/login') }}" class="btn btn-lg btn-success btn-block">Logar</a>
                            </fieldset>
                            <a class="btn btn-link" href="{{ url('/password/reset') }}">
                                   <h5 style="align-self: center">Esqueceu a sua senha?</h5></a>
                        </form>
                    
                @endsection
                @include('widgets.panel', array('as'=>'login', 'header'=>true))
            </div>
        </div>
    </div>
@stop