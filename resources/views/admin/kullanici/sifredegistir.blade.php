@extends('admin/app')

@section('headSection')
<link rel="stylesheet" href="{{ asset('admin/plugins/select2/select2.min.css') }}">
@endsection

@section('head')
@endsection

@section('mainBody')
    <div class="callout callout-info">
        <h4>Changement de mot de passe</h4>
      </div>
  <section class="content">
    <div class="row">
     
      <div class="col-md-6 col-md-offset-3">
        <!-- general form elements -->
     
    
        
        <div class="box box-primary">
          <div class="box-header with-border">
            <h3 class="box-title">Changement de mot de passe</h3>
          </div>

             <form class="form-horizontal" method="POST" action="{{ route('admin.kullanici.changepassword') }}"  >
                        {{ csrf_field() }}

                <div class="form-group">  
                    <div class="col-md-10 col-md-offset-1">
                        <label for="title">Entrez l'ancien mot de passe</label>
                        <input type="password" class="form-control" name="curPassword" placeholder="Eski şifreyi Giriniz" required>
                    </div>
                </div>

                <div class="form-group">         
                    <div class="col-md-10 col-md-offset-1">
                        <label for="title">Entrez le nouveau mot de passe</label>
                        <input  type="password" class="form-control" name="newPassword" placeholder="Yeni şifreyi Tekrar Giriniz" required>
                    </div>
                </div>

                <div class="form-group " >
                    <div class="col-md-10 col-md-offset-1 margin-bottom ">
                        <button type="submit" class="btn btn-primary btn-block ">
                            <i class="fa fa-floppy-o"></i>  Changer de mot de passe
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
             <a href='{{ route('admin.anasayfa') }}' class="btn btn-info">Retourner en arrière</a>
          </div>
          </div>
      </div>

  </section>
  

  
@endsection

@section('footer')

@endsection