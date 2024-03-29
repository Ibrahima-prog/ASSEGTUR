@extends('admin/app')

@section('headSection')
<link rel="stylesheet" href="{{ asset('admin/plugins/select2/select2.min.css') }}">
@endsection

@section('head')
<link rel="stylesheet" href="{{ asset('admin/css/prism.css') }}">
@endsection

@section('mainBody')

  <section class="content">
    <div class="row">
     
      <div class="col-md-12">
        <!-- general form elements -->
     
    
        
        <div class="box box-primary">
          <div class="box-header with-border">
            <h3 class="box-title">Editer la nouvelle</h3>
          </div>
      
          <!-- /.box-header -->
       

          <!-- form start -->

          {{-- {{ route('post.update',$post->id) }} --}}
        <form role="form" action="{{ route('admin.haber.duzenle.save', $id ) }}" method="post" enctype="multipart/form-data" name="edit">

          
          {{ csrf_field() }}
       


            <div class="box-body">        
              <div class="col-md-6">
                <div class="form-group">
                    <label for="title"><img src="../../../../admin/images/countries/france.png" alt="français"> FR - Titre</label>
                    <input type="text" class="form-control" id="title" name="frtitle" placeholder="Haber Başlığı" value="{{ $update->frtitle }}" required>
                  </div>  
              </div>
                <div class="col-md-6">
                  <div class="form-group">
                      <label for="title"><img src="../../../../admin/images/countries/en.png" alt="English"> EN - Title</label>
                      <input type="text" class="form-control" id="entitle" name="entitle" placeholder="Haber Başlığı" value="{{ $update->entitle }}" required>
                    </div>  
                </div>

                <div class="col-md-6">
                   <div class="form-group">
                      <label for="title"><img src="../../../../admin/images/countries/tr.png" alt="Turkish"> TR - Başlık</label>
                      <input type="text" class="form-control" id="trtitle" name="trtitle" placeholder="Haber Başlığı" value="{{ $update->trtitle }}" required>
                    </div>  
                </div>

            </div>

            <div class="box-body">        
                
                

                <div class="col-md-6">
                   <div class="form-group">
                      <label for="title"> Lien</label>
                      <input type="text" class="form-control" id="slug" name="slug" placeholder="Haber Url" value="{{ $update->slug }}" required>
                    </div>  
                </div>
                <div class="col-lg-6 col-md-6">
                  <div class="form-group">
                  <label for="slug"> Date Du Début</label>
                  <input type="text" class="form-control" name="sDay" id="sDay" placeholder="Jour. Ex: 21" value="{{ $update->sDay }}"  required>
                  <input type="text" class="form-control" name="sMonth" id="sMonth" placeholder="Mois. Ex: Juin" value="{{ $update->sMonth }}"  required>
                  <input type="text" class="form-control" name="sYear" id="sYear" placeholder="Année. Ex: 1999" value="{{ $update->sYear }}"  required>
                </div>
                </div>
            </div>

            <!-- /.box-body -->

            <div class="box-body">
              <div class="col-md-2">
                <img src="@if($update->image != "") ../../../haberFotograflari/{{ $update->image }} @endif" style="width: 200px">
              </div>

              <div class="col-md-4">
                  <div class="form-group">
                    <label for="image">Changer l'image</label>  
                    <input type="file" name="image" id="image" accept="image/x-png,image/gif,image/jpeg,image/jpg,image/svg,image/png" >
                  </div>
              </div>
              </div>

            
            <div class="box">
             <div class="box-header">
               <h3 class="box-title">Nouvelle
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
               <div class="box-body pad">
                <label for="title"><img src="../../../../admin/images/countries/france.png" alt="français"> FR - Contenu</label>
               <textarea name="frbody" style="width: 100%; height: 500px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;" id="editor1" required>{{ $update->frbody }} </textarea>
             </div>
                 <div class="box-body pad">
                  <label for="title"><img src="../../../../admin/images/countries/en.png" alt="English"> EN - Content</label>
                 <textarea name="enbody" style="width: 100%; height: 500px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;" id="editor2" required> {{ $update->enbody }}</textarea>
               </div>
                <div class="box-body pad">
                  <label for="title"><img src="../../../../admin/images/countries/tr.png" alt="Turkish"> TR -  Metni</label>
                 <textarea name="trbody" style="width: 100%; height: 500px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;" id="editor3" required> {{ $update->trbody }}</textarea>
               </div>

             </div>

             <div class="box-footer">
              <input type="submit" class="btn btn-primary" value="Enregister">
              <a href='{{ route('admin.haber') }}' class="btn btn-warning">Retourner en arrière</a>
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
      CKEDITOR.replace('editor1');
      //bootstrap WYSIHTML5 - text editor
      $(".textarea").wysihtml5();
    });
</script>
<script>
    $(function () {
      // Replace the <textarea id="editor1"> with a CKEditor
      // instance, using default configuration.
      CKEDITOR.replace('editor2');
      //bootstrap WYSIHTML5 - text editor
      $(".textarea").wysihtml5();
    });
</script>
<script>
  $(function () {
    // Replace the <textarea id="editor1"> with a CKEditor
    // instance, using default configuration.
    CKEDITOR.replace('editor3');
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