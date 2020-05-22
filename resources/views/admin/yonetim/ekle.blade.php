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
            <h3 class="box-title">Editer Les Membres du bureau</h3>
          </div>
      
          <!-- /.box-header -->
       

          <!-- form start -->

          {{-- {{ route('post.update',$post->id) }} --}}
        <form role="form" action="{{ route('admin.yonetim.ekle.save') }}" method="post" enctype="multipart/form-data">

          
          {{ csrf_field() }}
       

            <div class="box-body">
            
              <div class="col-lg-12">
                <div class="form-group">
                  <label for="title">Nom Et Prenom</label>
                  <input type="text" class="form-control" id="name" name="name" placeholder="Adı Soyadı" required>
                </div>
              </div>


              <div class="col-lg-6">
                <div class="form-group">
                  <label><img src="../../../../admin/images/countries/france.png" alt="français"> FR - Fonction</label>
                   <input type="text" class="form-control" id="frtitle" name="frtitle" placeholder="Görev" required>
                </div>
            </div> 
              <div class="col-lg-6">
                    <div class="form-group">
                      <label><img src="../../../../admin/images/countries/en.png" alt="English"> EN - Role</label>
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
                  <label for="title">E-Mail </label>
                  <input type="email" class="form-control" id="email" name="email" placeholder="E-Mail Adresi" required>
                </div>
              </div>

           

            
              <div class="col-lg-6">
                <div class="form-group">
                  <label for="title">Lien Facebook</label>
                  <input type="text" class="form-control" id="facebook" name="facebook" placeholder="Facebook Sosyal Media Linki">
                </div>
              </div>
          

           
              <div class="col-lg-6">
                <div class="form-group">
                  <label for="title">Lien Twitter</label>
                  <input type="text" class="form-control" id="twitter" name="twitter" placeholder="Twitter Sosyal Media Linki">
                </div>
              </div>
           
           
              <div class="col-lg-6">
                <div class="form-group">
                  <label for="title">Lien Instagram </label>
                  <input type="text" class="form-control" id="instagram" name="instagram" placeholder="İnstagram Sosyal Media Linki">
                </div>
              </div>
           
            
             <div class="col-lg-6">
                <div class="form-group">
                  <label for="image">Choisir Une Photo</label>  
                  <input type="file" name="image" id="image" accept="image/x-png,image/gif,image/jpeg,image/jpg,image/svg,image/png" required>
                </div>
              </div>
            
           </div>

             <div class="box-footer">
              <input type="submit" class="btn btn-primary" value="Enregistrer">
              <a href='{{ route('admin.yonetim') }}' class="btn btn-warning">Retourner en arrière</a>
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