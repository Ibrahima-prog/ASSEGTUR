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
            <h3 class="box-title">DURUYU DÜZENLE</h3>
          </div>
      
          <!-- /.box-header -->
       

          <!-- form start -->

          {{-- {{ route('post.update',$post->id) }} --}}
        <form role="form" action="{{ route('admin.duyuru.duzenle.save', $id ) }}" method="post" enctype="multipart/form-data" name="edit">

          
          {{ csrf_field() }}
       
           
            <div class="box-body">        
                
                <div class="col-md-6">
                  <div class="form-group">
                      <label for="title"><img src="../../../../admin/images/countries/en.png" alt="English"> EN - Duyuru Başlığı</label>
                      <input type="text" class="form-control" id="title" name="entitle" placeholder="Duyuru Başlığı" value="{{ $update->entitle }}"required>
                    </div>  
                </div>

                <div class="col-md-6">
                   <div class="form-group">
                      <label for="title"><img src="../../../../admin/images/countries/tr.png" alt="Turkish"> TR - Duyuru Başlığı</label>
                      <input type="text" class="form-control" id="title" name="trtitle" placeholder="Duyuru Başlığı" value="{{ $update->trtitle }}" required>
                    </div>  
                </div>

            </div>



            <div class="box-body">
              <div class="col-md-2">
                <img src="@if($update->image != "") ../../../announcementFotograflari/{{ $update->image }} @endif" style="width: 200px">
              </div>

              <div class="col-md-4">
                  <div class="form-group">
                    <label for="image">Imaji Değiştir - (800,600)</label>  
                    <input type="file" name="image" id="image" accept="image/x-png,image/gif,image/jpeg,image/jpg,image/svg,image/png" value="{{ $update->image }}">
                  </div>
              </div>
              </div>

          <div class="box">
             <div class="box-header">
               <h3 class="box-title">Duyuru
                 <small>Metni</small>
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
                  <label for="title"><img src="../../../../admin/images/countries/en.png" alt="English"> EN - Duyuru Başlığı</label>
                 <textarea name="enbody" style="width: 100%; height: 500px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;" id="editor1" required> {{ $update->enbody }}</textarea>
               </div>
                <div class="box-body pad">
                  <label for="title"><img src="../../../../admin/images/countries/tr.png" alt="Turkish"> TR - Duyuru Metni</label>
                 <textarea name="trbody" style="width: 100%; height: 500px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;" id="editor2" required> {{ $update->trbody }}</textarea>
               </div>
             </div>


             <div class="box-footer">
              <input type="submit" class="btn btn-primary" value="Kaydet">
              <a href='{{ route('admin.duyuru') }}' class="btn btn-warning">Geri Dön</a>
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
  $(document).ready(function() {
    $(".select2").select2();
  });
</script>


@endsection