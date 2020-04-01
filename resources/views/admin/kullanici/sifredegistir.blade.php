@extends('admin/app')

@section('headSection')
<link rel="stylesheet" href="{{ asset('admin/plugins/select2/select2.min.css') }}">
@endsection

@section('head')
@endsection

@section('mainBody')
    <div class="callout callout-info">
        <h4>Şifreyi Değiştir</h4>
      </div>
  <section class="content">
    <div class="row">
     
      <div class="col-md-6 col-md-offset-3">
        <!-- general form elements -->
     
    
        
        <div class="box box-primary">
          <div class="box-header with-border">
            <h3 class="box-title">Eski ve yeni şifreyi oluştur</h3>
          </div>

             <form class="form-horizontal" method="POST" action="{{ route('admin.kullanici.changepassword') }}"  >
                        {{ csrf_field() }}

                <div class="form-group">  
                    <div class="col-md-10 col-md-offset-1">
                        <label for="title">Eski şifreyi Giriniz</label>
                        <input type="password" class="form-control" name="curPassword" placeholder="Eski şifreyi Giriniz" required>
                    </div>
                </div>

                <div class="form-group">         
                    <div class="col-md-10 col-md-offset-1">
                        <label for="title">Yeni şifreyi Tekrar Giriniz</label>
                        <input  type="password" class="form-control" name="newPassword" placeholder="Yeni şifreyi Tekrar Giriniz" required>
                    </div>
                </div>

                <div class="form-group " >
                    <div class="col-md-10 col-md-offset-1 margin-bottom ">
                        <button type="submit" class="btn btn-primary btn-block ">
                            <i class="fa fa-floppy-o"></i>  Şifreyi Değiştir
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
             <a href='{{ route('admin.anasayfa') }}' class="btn btn-info">Geri Dön</a>
          </div>
          </div>
      </div>

  </section>
  

  
@endsection

@section('footer')

@endsection