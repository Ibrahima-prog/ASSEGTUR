@extends('admin.app')
@section('head')
<link rel="stylesheet" href="{{asset('admin/plugins/select2/select2.min.css')}}">
@endsection
@section('mainBody')
  <!-- Content Wrapper. Contains page content -->
  

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-12">

            <div class="box box-primary">
                <div class="box-header with-border">
                  <h3 class="box-title">Bölümler</h3>
                </div>
            

                <!-- /.card-header -->
                <!-- form start -->
                <form role="form" action="{{route('departments.store')}}" method="POST" enctype="multipart/form-data">
                    {{ csrf_field() }}
                  <div class="box-body">
                      <div class="col-md-6">
                        <div class="form-group">
                      <label for="title"><img src="../../../../admin/images/countries/france.png" alt="English">FR - Bölüm başlığı</label>
                      <input type="text" class="form-control" name="frname" id="name" placeholder="Enter category title" required>
                    </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                      <label for="title"><img src="../../../../admin/images/countries/tr.png" alt="English">TR - Bölüm başlığı</label>
                      <input type="text" class="form-control" name="trname" id="name" placeholder="Enter category title" required>
                    </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                      <label for="title"><img src="../../../../admin/images/countries/en.png" alt="English">EN - Bölüm başlığı</label>
                      <input type="text" class="form-control" name="enname" id="name" placeholder="Enter category title" required>
                    </div>
                      </div>

                      <div class="col-md-6">
                      <div class="form-group">
                        <label for="title">URL</label>
                        <input type="text" class="form-control" name="slug" id="slug" placeholder="Enter slug" required>
                      </div>
                      </div>
                      <div class="col-md-6">
                      
                        <label>Fakülte</label>
                        <select class="select2 select2-hidden-accessible" data-placeholder="Select a faculty" style="width: 100%;" data-select2-id="7" tabindex="-1" aria-hidden="true"
                        name="faculty" required>
                            @foreach ($faculties as $faculty)
                            <option value="{{$faculty->id}}">{{$faculty->trname}}</option>
                       @endforeach
                        </select>
                      
                      </div>
                  </div>
  
  




 


                  </div>
                  <!-- /.card-body -->


                  <div class="box-footer">
                    <input type="submit" class="btn btn-primary" value="Kaydet">
                    <a href='{{ route('departments.index') }}' class="btn btn-warning">Geri Dön</a>
                  </div>

                </form>
              
              </div>
              <!-- /.card -->


        </div>
        <!-- /.col-->
      </div>
      <!-- ./row -->
    </section>
    <!-- /.content -->
    @endsection
  <!-- /.content-wrapper -->


  @section('footer')

  <script src="{{ asset('admin/plugins/select2/select2.full.min.js') }}"></script>
<script src="{{ asset('admin/ckeditor/ckeditor.js') }}"></script>


<script>
  $(document).ready(function() {
    $(".select2").select2();
    
  });
</script>

@endsection
