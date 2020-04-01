@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row" style="padding: 15% 0">
        <div class="col-md-6 col-md-offset-3">
            <div class="panel panel-default">
                <div class="panel-heading">Admin Kullanıcı Ekle</div>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            

                            <div class="col-md-10 col-md-offset-1">
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required placeholder="Adınız Giriniz" autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                         

                            <div class="col-md-10 col-md-offset-1">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="E-Mail Adresi Giriniz" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                          
                            <div class="col-md-10 col-md-offset-1">
                                <input id="password" type="password" class="form-control" name="password" placeholder="Şifreniz" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                           
                            <div class="col-md-10 col-md-offset-1">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="Şifreyi Tekrar Giriniz" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-10 col-md-offset-1 ">
                                <button type="submit" class="btn btn-primary">
                                    Register
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
