@extends('admin/app')

@section('head')

@endsection

@section('mainBody')

      <div class="callout callout-info">
        <h4>Sikça Sorulan Sorulan Soruları</h4>

      </div>

  <section class="content">
    <div class="row">
     
      <div class="col-md-6 col-md-offset-3">
        <!-- general form elements -->
     
        
        <div class="box box-primary">
          <div class="box-header with-border">
            <h3 class="box-title">Soru Ekle</h3>
          </div>
      
          <!-- /.box-header -->
       

          <!-- form start -->

          {{-- {{ route('post.update',$post->id) }} --}}
        <form role="form" action="{{ route('admin.kurumsal.sikcasorulansorular.ekle') }}" method="post">


          
          {{ csrf_field() }}

             <div class="box-body">
                <div class="form-group">
                  <label>Soru Kategorisi</label>
                  <select name="category" class="form-control" required>
                    <option value="Genel">Genel Sorular</option>
                    <option value="Birliğin">Birliğin işleyişi</option>
                    <option value="Üyelik">Üyelik</option>
                    <option value="Diğer">Diğer</option>
                  </select>
                </div>
              </div>
                 
               <div class="box-body">
                 <div class="col-lg-6">
                     <div class="form-group">
                        <label><img src="../../../../admin/images/countries/en.png" alt="English"> EN - Soru</label>
                        <textarea class="form-control" rows="3" name="enquestion" placeholder="Soru ..." required></textarea>
                      </div>
                   </div>
                    <div class="col-lg-6">
                     <div class="form-group">
                        <label><img src="../../../../admin/images/countries/tr.png" alt="Turkish"> TR - Soru</label>
                        <textarea class="form-control" rows="3" name="trquestion" placeholder="Soru ..." required></textarea>
                      </div>
                   </div>
               </div>


           

                <div class="box-body">
                  <div class="col-lg-6">
                     <div class="form-group">
                      <label><img src="../../../../admin/images/countries/en.png" alt="English"> EN - Cevap</label>
                      <textarea class="form-control" rows="5" name="enanswer" placeholder="Cevap ..." required></textarea>
                    </div>
                  </div>
                  <div class="col-lg-6">
                     <div class="form-group">
                      <label><img src="../../../../admin/images/countries/tr.png" alt="Turkish"> TR - Cevap</label>
                      <textarea class="form-control" rows="5" name="transwer" placeholder="Cevap ..." required></textarea>
                    </div>
                  </div>
                </div>


             <div class="box-footer">
              <input type="submit" class="btn btn-primary" value="Kaydet">
              <a href='{{ route('admin.kurumsal.sikcasorulansorular') }}' class="btn btn-warning">Geri Dön</a>
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