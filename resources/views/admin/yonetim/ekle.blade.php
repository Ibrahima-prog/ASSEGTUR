@extends('admin/app')

@section('headSection')
<link rel="stylesheet" href="{{ asset('admin/plugins/select2/select2.min.css') }}">
@endsection

@section('head')
@endsection

@section('mainBody')

  <section class="content">
    <div class="row">
     
      <div class="col-md-8 col-md-offset-2">
        <!-- general form elements -->
     
        
        <div class="box box-primary">
          <div class="box-header with-border">
            <h3 class="box-title">Yönetim Kurulu Üye EKle</h3>
          </div>
      
          <!-- /.box-header -->
       

          <!-- form start -->

          {{-- {{ route('post.update',$post->id) }} --}}
        <form role="form" action="{{ route('admin.yonetim.ekle.save') }}" method="post" enctype="multipart/form-data">

          
          {{ csrf_field() }}
       

            <div class="box-body">
            
              <div class="col-lg-12">
                <div class="form-group">
                  <label for="title">Adı Soyadı</label>
                  <input type="text" class="form-control" id="name" name="name" placeholder="Adı Soyadı" required>
                </div>
              </div>


              <div class="col-lg-6">
                <div class="form-group">
                  <label><img src="../../../../admin/images/countries/france.png" alt="français"> FR - Görev</label>
                   <input type="text" class="form-control" id="frtitle" name="frtitle" placeholder="Görev" required>
                </div>
            </div> 
              <div class="col-lg-6">
                    <div class="form-group">
                      <label><img src="../../../../admin/images/countries/en.png" alt="English"> EN - Görev</label>
                       <input type="text" class="form-control" id="entitle" name="entitle" placeholder="Görev" required>
                    </div>
                </div> 

                <div class="col-lg-6">
                    <div class="form-group">
                      <label><img src="../../../../admin/images/countries/tr.png" alt="Turkish"> TR - Görev</label>
                       <input type="text" class="form-control" id="trtitle" name="trtitle" placeholder="Görev" required>
                    </div>
                </div> 



            <!-- /.box-body -->
             
              <div class="col-lg-6">
                <div class="form-group">
                  <label for="title">E-Mail Adresi</label>
                  <input type="email" class="form-control" id="email" name="email" placeholder="E-Mail Adresi" required>
                </div>
              </div>

           

            
              <div class="col-lg-6">
                <div class="form-group">
                  <label for="title">Facebook Linki</label>
                  <input type="text" class="form-control" id="facebook" name="facebook" placeholder="Facebook Sosyal Media Linki">
                </div>
              </div>
          

           
              <div class="col-lg-6">
                <div class="form-group">
                  <label for="title">Twitter Linki</label>
                  <input type="text" class="form-control" id="twitter" name="twitter" placeholder="Twitter Sosyal Media Linki">
                </div>
              </div>
           
           
              <div class="col-lg-6">
                <div class="form-group">
                  <label for="title">İnstagram Linki</label>
                  <input type="text" class="form-control" id="instagram" name="instagram" placeholder="İnstagram Sosyal Media Linki">
                </div>
              </div>
           
            
             <div class="col-lg-6">
                <div class="form-group">
                  <label for="image">Imaji Şeç - (262,262)</label>  
                  <input type="file" name="image" id="image" accept="image/x-png,image/gif,image/jpeg,image/jpg,image/svg,image/png" required>
                </div>
              </div>
            
           </div>

             <div class="box-footer">
              <input type="submit" class="btn btn-primary" value="Kaydet">
              <a href='{{ route('admin.yonetim') }}' class="btn btn-warning">Geri Dön</a>
            </div>
          </form>
        </div>
        <!-- /.box -->      
      </div>
    
      <!-- /.col-->
    </div>
    <!-- ./row -->
  </section>
  

  
@endsection

@section('footer')

@endsection