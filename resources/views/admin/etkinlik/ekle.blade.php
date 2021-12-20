@extends('admin/app')

@section('head')
<link rel="stylesheet" href="{{ asset('admin/css/prism.css') }}">
<link rel="stylesheet" href="{{ asset('admin/plugins/select2/select2.min.css') }}">

@endsection

@section('mainBody')

  <section class="content">
    <div class="row">
     
      <div class="col-md-12">
        <!-- general form elements -->
     
        
        <div class="box box-primary">
          <div class="box-header with-border">
            <h3 class="box-title">Ajouter une activité</h3>
          </div>
      
          <!-- /.box-header -->
       

          <!-- form start -->

          {{-- {{ route('post.update',$post->id) }} --}}
        <form role="form" action="{{ route('admin.etkinlik.ekle.save') }}" method="post" enctype="multipart/form-data">

          
          {{ csrf_field() }}
       

           
            <div class="box-body">
              
              <div class="col-lg-6 col-md-6">
                <div class="form-group">
                  <label for="title"> <img src="../../../../admin/images/countries/france.png" alt="français"> FR - Nom</label>
                  <input type="text" class="form-control" id="frtitle" name="frtitle" placeholder="etkinlik Başlığı" required>
                </div>  
              </div>

                <div class="col-lg-6 col-md-6">
                  <div class="form-group">
                    <label for="title"> <img src="../../../../admin/images/countries/en.png" alt="english"> EN - Name</label>
                    <input type="text" class="form-control" id="entitle" name="entitle" placeholder="etkinlik Başlığı" required>
                  </div>  
                </div>    

                 <div class="col-lg-6 col-md-6">
                  <div class="form-group">
                    <label for="title"><img src="../../../../admin/images/countries/tr.png" alt="Turkçe"> TR -  Adı</label>
                    <input type="text" class="form-control" id="trtitle" name="trtitle" placeholder="etkinlik Başlığı" required>
                  </div> 
                </div>
                <div class="col-lg-6 col-md-6">
                  <div class="form-group">
                  <label for="slug"> Lien</label>
                  <input type="text" class="form-control" name="slug" id="slug" placeholder="Enter slug" required>
                </div>
                </div>
                <div class="col-lg-6 col-md-6">
                  <div class="form-group">
                  <label for="slug"> Date Du Début</label>
                  <input type="text" class="form-control" name="sDay" id="sDay" placeholder="Jour. Ex: 21" required>
                  <input type="text" class="form-control" name="sMonth" id="sMonth" placeholder="Mois. Ex: Juin" required>
                  <input type="text" class="form-control" name="sYear" id="sYear" placeholder="Année. Ex: 1999" required>
                </div>
                </div>
                <div class="col-lg-6 col-md-6">
                  <div class="form-group">
                  <label for="slug"> Date De Fin</label>
                  <input type="text" class="form-control" name="eDay" id="eDay" placeholder="Jour. Ex: 21" required>
                  <input type="text" class="form-control" name="eMonth" id="eMonth" placeholder="Mois. Ex: Juin" required>
                  <input type="text" class="form-control" name="eYear" id="eYear" placeholder="Année. Ex: 1999" required>
                </div>
                </div>
                
            </div>
                          
           <div class="box-body"> 

                <div class="form-group">
                  <label for="image">Choisir image de présentation(800 X 600) (800 X 600)</label>  
                  <input type="file" name="image" id="image" accept="image/x-png,image/gif,image/jpeg,image/jpg,image/svg,image/png" required="true">
                </div>

                <div class="form-group" >
                  <label for="images">changer image(s)</label>  
           
                  <input type="file" name="images[]" id="images" class="custom-file-input"  accept="image/x-png,image/gif,image/jpeg,image/jpg,image/svg,image/png" multiple="multiple" required="true">
                </div>

            </div>

            
            <div class="box">
             <div class="box-header">
               <h3 class="box-title">Activité
                 <small>Contenu</small>
               </h3>
               <!-- tools box -->
               <div class="pull-right box-tools">
                 <button type="button" class="btn btn-default btn-sm" data-widget="collapse" data-toggle="tooltip" title="Collapse">
                   <i class="fa fa-minus"></i></button>
                 </div>
                 <!-- /. tools -->
               </div>
               <!-- /.box-header -->
              
                <!-- /.box-header -->
                <div class="box-body pad">
                  <label for="title"><img src="../../../../admin/images/countries/france.png" alt="English">FR-Résumé</label>
                  <textarea name="frsummary" style="width: 100%; height: 500px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;" id="editor4" required ></textarea>
                </div>
                <div class="box-body pad">
                  <label for="title"><img src="../../../../admin/images/countries/en.png" alt="English">EN-summary</label>
                  <textarea name="ensummary" style="width: 100%; height: 500px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;" id="editor5" required></textarea>
                </div>
                <div class="box-body pad">
                  <label for="title"><img src="../../../../admin/images/countries/tr.png" alt="English">TR-Özet</label>
                  <textarea name="trsummary" style="width: 100%; height: 500px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;" id="editor6" required></textarea>
                </div>
             </div>

             <div class="box-footer">
              <input type="submit" class="btn btn-primary" value="Enregistrer">
              <a href='{{ route('admin.etkinlik') }}' class="btn btn-warning">Retourner en arrière</a>
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
<script src="{{ asset('admin/plugins/select2/select2.full.min.js') }}"></script>
<script src="{{ asset('admin/ckeditor/ckeditor.js') }}"></script>

<script>
  $(function () {
    // Replace the <textarea id="editor1"> with a CKEditor
    // instance, using default configuration.
    CKEDITOR.replace('editor4');
    //bootstrap WYSIHTML5 - text editor
    $(".textarea").wysihtml5();
  });
</script>
<script>
  $(function () {
    // Replace the <textarea id="editor1"> with a CKEditor
    // instance, using default configuration.
    CKEDITOR.replace('editor5');
    //bootstrap WYSIHTML5 - text editor
    $(".textarea").wysihtml5();
  });
</script>
<script>
  $(function () {
    // Replace the <textarea id="editor1"> with a CKEditor
    // instance, using default configuration.
    CKEDITOR.replace('editor6');
    //bootstrap WYSIHTML5 - text editor
    $(".textarea").wysihtml5();
  });
</script>
<script>
  $(document).ready(function() {
    $(".select2").select2();
  });
</script>
@endsection