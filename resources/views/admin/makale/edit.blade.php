@extends('admin/app')



@section('head')

<link rel="stylesheet" href="{{ asset('admin/css/prism.css') }}">
<link rel="stylesheet" href="{{asset('admin/plugins/select2/select2.min.css')}}">

@endsection

@section('mainBody')

  <section class="content">
    <div class="row">
     
      <div class="col-md-12">
        <!-- general form elements -->
     
    
        
        <div class="box box-primary">
          <div class="box-header with-border">
            <h3 class="box-title">MAKALE DÜZENLE</h3>
          </div>
      
          <!-- /.box-header -->
       

          <!-- form start -->

          {{-- {{ route('post.update',$post->id) }} --}}
        <form role="form" action="{{ route('admin.makale.duzenle.save', $id ) }}" method="post" enctype="multipart/form-data" name="edit">

          
          {{ csrf_field() }}
      

            <div class="box-body">   
              <div class="box-body">     
                <div class="col-md-6">
                  <div class="form-group">
                      <label for="yazar"> Yazar</label>
                      <input type="text" class="form-control" id="author" name="author" placeholder="Author" value="{{ $update->author }}" required>
                    </div>    
                </div>   
              <div class="col-md-6">
                <div class="form-group">
                    <label for="title"><img src="../../../../admin/images/countries/france.png" alt="français"> FR - Makale Başlığı</label>
                    <input type="text" class="form-control" id="title" name="frtitle" placeholder="Makale Başlığı" value="{{ $update->frtitle }}"  required>
                  </div>  
              </div>
                <div class="col-md-6">
                  <div class="form-group">
                      <label for="title"><img src="../../../../admin/images/countries/en.png" alt="English"> EN - Makale Başlığı</label>
                      <input type="text" class="form-control" id="title" name="entitle" placeholder="Makale Başlığı" value="{{ $update->entitle }}"  required>
                    </div>  
                </div>

                <div class="col-md-6">
                   <div class="form-group">
                      <label for="title"><img src="../../../../admin/images/countries/tr.png" alt="Turkish"> TR - Makale Başlığı</label>
                      <input type="text" class="form-control" id="title" name="trtitle" placeholder="Makale Başlığı" value="{{ $update->trtitle }}"  required>
                    </div>  
                </div>

              </div>
              <div class="col-md-6">
                <div class="box-body">
                  <label>Select Department</label>
                  <select class="select2 select2-hidden-accessible"  data-placeholder="Select a department" style="width: 100%;" data-select2-id="7" tabindex="-1" aria-hidden="true"
                  name="departments" required>
                      @foreach ($departments as $department)
                      <option value="{{$department->id}}"
                        @foreach ($update->departments as $article)
                        @if  ($article->id == $department->id)  
                        selected
                        @endif
                     @endforeach >{{$department->trname}}</option>
                 @endforeach
                  </select>
                </div>
                </div>
            

         
            <div class="box-body">
            <div class="form-group">
                  <label for="image">{{ $update->file }}</label>  <br>
                  <label for="image">Ek Dosya Değiştir (pdf)</label>  
                  <input type="file" name="file" accept="application/pdf,application/vnd.ms-excel" id="file">
                </div>
              </div>

            
             
              {{-- <div class="col-md-4">
                  <div class="form-group">
                    <label for="image">Imaji Değiştir - (800,600)</label>  
                    <input type="file" name="image" id="image"  accept="image/x-png,image/gif,image/jpeg,image/jpg,image/svg,image/png">
                  </div>
              </div>
              </div> --}}
            
            <div class="box">
             <div class="box-header">
               <h3 class="box-title">Makale
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
                <label for="title"><img src="../../../../admin/images/countries/france.png" alt="français"> FR - Makale Başlığı</label>
               <textarea name="frbody" style="width: 100%; height: 500px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;" id="editor3" required> {{ $update->frbody }}</textarea>
             </div>
                <div class="box-body pad">
                  <label for="title"><img src="../../../../admin/images/countries/en.png" alt="English"> EN - Makale Başlığı</label>
                 <textarea name="enbody" style="width: 100%; height: 500px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;" id="editor1" required> {{ $update->enbody }}</textarea>
               </div>
                <div class="box-body pad">
                  <label for="title"><img src="../../../../admin/images/countries/tr.png" alt="Turkish"> TR - Makale Metni</label>
                 <textarea name="trbody" style="width: 100%; height: 500px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;" id="editor2" required> {{ $update->trbody }}</textarea>
               </div>
             </div>

             <div class="box-footer">
              <input type="submit" class="btn btn-primary" value="Kaydet">
              <a href='{{ route('admin.makale') }}' class="btn btn-warning">Geri Dön</a>
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