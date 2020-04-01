@extends('admin/app')

@section('headSection')

@endsection

@section('head')
@endsection

@section('mainBody')
   
  
      <div class="callout callout-info">
        <h4>Fotoğraf Ekle</h4>
      </div>

       <div class="box box-primary">
          <div class="box-header with-border">
            <h3 class="box-title">Fotoğraf(lar) EKle</h3>
          </div>

             <form class="form-horizontal" method="POST" action="{{ route('admin.gallery.ekle.save') }}" enctype="multipart/form-data" required="true">
                        {{ csrf_field() }}

                      <div class="col-lg-4">
                      <div class="box-body">
                      <label for="title"><img src="../../../../admin/images/countries/en.png" alt="English"> EN - Başlığı</label>
                      <input type="text" class="form-control" id="title" name="entitle" placeholder="Başlığı" required="true" >
                     </div>
                 </div>

                  <div class="col-lg-4">
                      <div class="box-body">
                      <label for="title"><img src="../../../../admin/images/countries/tr.png" alt="Turkish"> TR - Başlığı</label>
                      <input type="text" class="form-control" id="title" name="trtitle" placeholder="Başlığı" required="true" >
                     </div>
                 </div>
     
                 <div class="box-body">
                  <label for="title">Resim(ler) Şeç - (800, 600)</label>
                   <input type="file" name="images[]" id="image" accept="image/x-png,image/gif,image/jpeg,image/jpg,image/svg,image/png" multiple="multiple" required="true">
               </div>
                       
					<div class="box-footer">
		              <input type="submit" class="btn btn-primary" value="Kaydet">
		              <a href='{{ route('admin.gallery.yonet') }}' class="btn btn-warning">Geri Dön</a>
		            </div>
                </form>
        </div>

  
@endsection

@section('footer')

