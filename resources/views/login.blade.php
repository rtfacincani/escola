@extends ('layouts.plane')

@section ('body')
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <br /><br /><br />
                @section ('login_panel_title','<center>Nova Escola<br>Por favor informe os dados</center>')
                @section ('login_panel_body')
                    <div class="panel-body" >
                    <form role="form" method="POST" action="{{ url('/login') }}">
                        {{ csrf_field() }}
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <fieldset>
                            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                <div class="input-group margin-bottom-sm">
                                    <span class="input-group-addon"><i class="fa fa-envelope-o fa-fw"></i></span>
                                    <input class="form-control" placeholder="E-mail" name="email" type="email" id="email" value="{{ old('email') }}" autofocus required="required"/>
                                </div>
                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-key fa-fw"></i></span>
                                    <input class="form-control" placeholder="Senha" name="password" type="password" value="" required="required">
                                </div>
                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="checkbox">
                                <label>
                                    <input name="remember" type="checkbox" value="Remember Me">Lembre-se de mim
                                </label>
                            </div>
                            <!-- Change this to a button or input when using this as a form -->
                            <div class="form-group">
                                <div class="col-md-12 ">
                                    <button type="submit" class="btn btn-lg btn-success btn-block">
                                        Logar
                                    </button>

                                    <a class="btn btn-link" href="{{ url('/password/reset') }}">
                                        <h5 style="align-self: center">Esqueceu a sua senha?</h5>
                                    </a>
                                </div>
                            </div>
                        </fieldset>
                    </form>
            </div   >
                @endsection
                @include('widgets.panel', array('as'=>'login', 'header'=>true))
            </div>
        </div>
    </div>
@endsection



