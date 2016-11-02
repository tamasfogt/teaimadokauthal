@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="mypanel">
                <div class="heading">Login</div>
                <div class="body">

                    <div class=" col-md-10 col-sm-12 col-xs-12">
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/login') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-mail cím</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Jelszó</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember"> Maradj bejelentkezve
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Bejelentkezés
                                </button>

                                <a class="forgotpw col-xs-12" href="{{ url('/password/reset') }}">
                                    Elfelejtetted a jelszavad?
                                </a>
                               
                            </div>
                        </div>

                    </form>
                    </div>
                    <div class=" col-md-12 col-sm-12 col-xs-12 socialmedia">
                    <a href="redirect" class="socbutton facebook"><i class="fa fa-facebook"></i> Bejelentkezés Facebookal</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
