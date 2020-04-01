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
            <h3 class="box-title">Hakkımızda Metin</h3>
          </div>
      
          <!-- /.box-header -->
       

          <!-- form start -->

          {{-- {{ route('post.update',$post->id) }} --}}
        <form action="{{ route('admin.kurumsal.hakkimizda.save') }}" method="post">

          
          {{ csrf_field() }}
       

           
          
            <div class="box-body">

              <div class="col-lg-6">
                <div class="form-group">
                  <label for="title"><img src="../../../../admin/images/countries/france.png" alt="français"> FR - Metin Başlığı</label>
                  <input type="text" class="form-control" id="frtitle" name="frtitle" placeholder="Post Title" value="@if ($post) {{ $post->frtitle }} @endif">
                </div>
              </div>
              <div class="col-lg-6">
                <div class="form-group">
                  <label for="title"><img src="../../../../admin/images/countries/en.png" alt="English"> EN - Metin Başlığı</label>
                  <input type="text" class="form-control" id="entitle" name="entitle" placeholder="Metin Başlığı" value="@if ($post) {{ $post->entitle }} @endif">
                </div>
              </div>
               <div class="col-lg-6">
                <div class="form-group">
                  <label for="title"><img src="../../../../admin/images/countries/tr.png" alt="Turkish"> TR - Metin Başlığı</label>
                  <input type="text" class="form-control" id="trtitle" name="trtitle" placeholder="Metin Başlığı" value="@if ($post) {{ $post->trtitle }} @endif">
                </div>
              </div>


            </div>
            <!-- /.box-body -->
            
            <div class="box">
             <div class="box-header">
               <h3 class="box-title">METİN
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
                <label for="title"><img src="../../../../admin/images/countries/france.png" alt="français"> FR - Metin</label>
                 <textarea name="frtext" style="width: 100%; height: 500px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;" id="editor0">@if ($post) {{ $post->frtext }} @endif </textarea>
               </div>
               
             <div class="box-body pad">
                <label for="title"><img src="../../../../admin/images/countries/en.png" alt="English"> EN - Metin</label>
                 <textarea name="entext" style="width: 100%; height: 500px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;" id="editor1">@if ($post) {{ $post->entext }} @endif </textarea>
               </div>
                 <div class="box-body pad">
                  <label for="title"><img src="../../../../admin/images/countries/tr.png" alt="Turkish"> TR - Metin</label>
                 <textarea name="trtext" style="width: 100%; height: 500px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;" id="editor2">@if ($post) {{ $post->trtext }} @endif </textarea>
               </div>
             </div>

             <div class="box-footer">
              <input type="submit" class="btn btn-primary" value="Kaydet">
              <a href='{{ route('admin.kurumsal') }}' class="btn btn-warning">Geri Dön</a>
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
    CKEDITOR.replace('editor0');
    //bootstrap WYSIHTML5 - text editor
    $(".textarea").wysihtml5();
  });
</script>
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
  $(document).ready(function() {
    $(".select2").select2();
  });
</script>
@endsection