@extends('admin/app')

@section('headSection')
<link rel="stylesheet" href="{{ asset('admin/plugins/select2/select2.min.css') }}">
@endsection

@section('head')
@endsection

@section('mainBody')
   <div class="callout callout-info">
        <h4>Ajouter un admin</h4>
      </div>

  <section class="content">
    <div class="row">
     
      <div class="col-md-6 col-md-offset-3">
        <!-- general form elements -->
     
    
        
        <div class="box box-primary">
          <div class="box-header with-border">
            <h3 class="box-title">Ajouter un admin</h3>
          </div>

             <form class="form-horizontal" method="POST" action="{{ route('register') }}" enctype="multipart/form-data" >
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            

                            <div class="col-md-10 col-md-offset-1">
                              <label for="title">Nom et prenom</label>
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required placeholder="Adı Soyadı" autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                         

                            <div class="col-md-10 col-md-offset-1">
                                <label for="title">E-Mail </label>
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
                               <label for="title">Mot de passe</label>
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
                               <label for="title">Réercrire le mot de passe</label>
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="Şifreyi Tekrar Giriniz" required>
                            </div>
                        </div>

                        <div class="form-group " >
                            <div class="col-md-10 col-md-offset-1 margin-bottom ">
                                <button type="submit" class="btn btn-primary btn-block  btn-lg">
                                   <i class="fa fa-plus-square"></i>  Ajouter
                                </button>
                            </div>
                        </div>
                    </form>
        </div>
        <!-- /.box -->      
      </div>
    
      <!-- /.col-->
    </div>
    <!-- ./row -->

            <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <div class="box-footer">
                 <a href='{{ route('admin.kullanici') }}' class="btn btn-info">Retourner en arrière</a>
              </div>
            </div>
        </div>

  </section>
  

  
@endsection

@section('footer')

@endsection