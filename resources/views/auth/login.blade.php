@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row" style="padding: 15% 0">
        <div class="col-md-6 col-md-offset-3"> 
            
            <div class="panel panel-default">
                
                <div class="panel-heading">
                    <div class=""> <img src="../../logo/Layer_1_2100_1000.png" alt="Afrokonya Association" height="150"></div>

                 Panneau D'administration</div>


                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                         
                            <div class="col-md-10 col-md-offset-1">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus placeholder="E-Mail Adresi" >

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
                            <div class="col-md-6 col-md-offset-1">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Beni hatırla
                                    </label>
                                </div>
                            </div>
                        </div>



                       

                        <div class="form-group">
                            <div class="col-md-10 col-md-offset-1">
                                <button type="submit" class="btn btn-primary">
                                    Giriş Yap
                                </button>                                
                            </div>
           
                        </div>

                     
                           <div class="form-group" >
                             <div class="col-md-4 col-md-offset-3" >
                               <a class="btn btn-link" href="{{ route('password.request') }}" style="text-align: left; background-color: transparent; text-align: left;">
                                    Şifreni hatırlamıyor musunuz?
                                </a>

                                
                            </div>
                            
                        </div>


                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
