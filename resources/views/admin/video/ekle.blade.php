@extends('admin/app')

@section('headSection')

@endsection

@section('head')
@endsection

@section('mainBody')
   
  
      <div class="callout callout-info">
        <h4>Video Yükle</h4>
      </div>

       <div class="box box-primary">
          <div class="box-header with-border">
            <h3 class="box-title">Video EKle</h3>
          </div>

             <form class="form-horizontal" method="POST" action="{{ route('admin.video.ekle.save') }}" enctype="multipart/form-data" >
                        {{ csrf_field() }}

                  <div class="col-lg-4">
	                    <div class="box-body">
		                  <label for="title"><img src="../../../../admin/images/countries/en.png" alt="English"> EN - Başlığı</label>
		                  <input type="text" class="form-control" id="title" name="entitle" placeholder="Video Başlığı" required="true" >
		                 </div>
		             </div>

                  <div class="col-lg-4">
                      <div class="box-body">
                      <label for="title"><img src="../../../../admin/images/countries/tr.png" alt="Turkish"> TR - Başlığı</label>
                      <input type="text" class="form-control" id="title" name="trtitle" placeholder="Video Başlığı" required="true" >
                     </div>
                 </div>


                  <div class="col-lg-4">
                      <div class="box-body">
                      <label for="title">Video Linki Kodu</label>
                      <input type="text" class="form-control" id="video" name="video" placeholder="Youtube Entegrasyon URL'li kodu" required="true">
                     </div>
                 </div>

				    	<div class="box-footer">
		              <input type="submit" class="btn btn-primary" value="Kaydet">
		              <a href='{{ route('admin.video.yonet') }}' class="btn btn-warning">Geri Dön</a>
		            </div>
            </form>
        </div>

  
@endsection

@section('footer')

