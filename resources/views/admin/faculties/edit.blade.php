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
              <h3 class="box-title">Editer la Faculté</h3>
            </div>
              

                <!-- /.card-header -->
                <!-- form start -->
                <form role="form" action="{{route('faculties.update',$faculties->id)}}" method="POST">
                    {{ csrf_field() }}
                    {{ method_field('PATCH') }}
                  <div class="box-body">
                     

                        <div class="col-md-6">
                      <label for="title"><img src="../../../../admin/images/countries/france.png" alt="English">FR - Nom</label>
                      <input type="text" class="form-control" name="frname" id="name" placeholder="Enter category title"
                      value="{{$faculties->frname}}" required>
                    </div>
                    <div class="col-md-6">
                      <label for="title"><img src="../../../../admin/images/countries/tr.png" alt="English">TR - başlığı</label>
                      <input type="text" class="form-control" name="trname" id="name" placeholder="Enter category title"
                      value="{{$faculties->trname}}" required>
                    </div>
                    <div class="col-md-6">
                      <label for="title"><img src="../../../../admin/images/countries/en.png" alt="English">EN - Name</label>
                      <input type="text" class="form-control" name="enname" id="name" placeholder="Enter category title"
                      value="{{$faculties->enname}}" required>
                    </div>


                      <div class="col-md-6">
                        <label for="title">Lien</label>
                        <input type="text" class="form-control" name="slug" id="slug" placeholder="Enter slug"
                        value="{{$faculties->slug}}" required>
                      </div>
 





 {{-- <button type="submit" class="btn btn-primary offset-md-4">Submit</button>
 <a  href="{{route('faculties.index')}}" class="btn btn-warning offset-md-4">Back</a> --}}


                  </div>
                  <!-- /.card-body -->


                  <div class="box-footer">
                    <input type="submit" class="btn btn-primary" value="Enregistrer">
                    <a href='{{ route('faculties.index') }}' class="btn btn-warning">Retourner</a>
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
