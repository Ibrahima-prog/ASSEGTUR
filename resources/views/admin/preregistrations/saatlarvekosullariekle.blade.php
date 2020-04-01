@extends('admin/app')

@section('head')

@endsection

@section('mainBody')

  <section class="content">
    <div class="row">
     
      <div class="col-md-12">
        <!-- general form elements -->
     
        
        <div class="box box-primary">
          <div class="box-header with-border">
            <h3 class="box-title">Sartlar ve Koşulları Ekle</h3>
          </div>
      
          <!-- /.box-header -->
       

          <!-- form start -->

          {{-- {{ route('post.update',$post->id) }} --}}
        <form role="form" action="{{ route('admin.onkayi.saatlarvekosullari.ekle') }}" method="post">


          
          {{ csrf_field() }}

              <div class="box-body">
                 <div class="col-md-6">
                     <div class="form-group">
                        <label><img src="../../../../admin/images/countries/en.png" alt="English"> EN - Metni</label>
                        <textarea class="form-control" rows="5" name="encondition" placeholder="Metni ..." required></textarea>
                      </div>
                 </div>
                  <div class="col-md-6">
                     <div class="form-group">
                        <label><img src="../../../../admin/images/countries/tr.png" alt="English"> TR - Metni</label>
                        <textarea class="form-control" rows="5" name="trcondition" placeholder="Metni ..." required></textarea>
                      </div>
                 </div>
              </div>

             <div class="box-footer">
              <input type="submit" class="btn btn-primary" value="Kaydet">
              <a href='{{ route('admin.onkayi.saatlarvekosullari') }}' class="btn btn-warning">Geri Dön</a>
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