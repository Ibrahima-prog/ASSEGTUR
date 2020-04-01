@extends('admin/app')

@section('headSection')

@endsection

@section('head')
@endsection

@section('mainBody')
   
  
      <div class="callout callout-info">
        <h4>Yeni Bir Yemek Listesi Ekle</h4>
      </div>

       <div class="box box-primary">
          <div class="box-header with-border">
            <h3 class="box-title">Listeyi EKle</h3>
          </div>

             <form class="form-horizontal" method="POST" action="{{ route('admin.yemeklistesi.ekle.save') }}" enctype="multipart/form-data" required="true">
                        {{ csrf_field() }}

                    <div class="col-lg-6">
	                    <div class="box-body">
                        <div class="form-group">
                          <label>Ayı Seç</label>
                          <select name="month" class="form-control" required>
                            <option value="Ocak" selected>Ocak</option>
                            <option value="Şubat">Şubat</option>
                            <option value="Mart">Mart</option>
                            <option value="Nisan">Nisan</option>
                            <option value="Mayıs">Mayıs</option>
                            <option value="Haziran">Haziran</option>
                            <option value="Temmuz">Temmuz</option>
                            <option value="Ağustos">Ağustos</option>
                            <option value="Eylül">Eylül</option>
                            <option value="Ekim">Ekim</option>
                            <option value="Kasım">Kasım</option>
                            <option value="Aralık">Aralık</option>
                          </select>
                        </div>
		                  </div>
		                </div>  

 
                    <div class="col-lg-6">
                      <div class="box-body">
                        <div class="form-group">
                          <label>Hafta Şeç</label>
                          <select name="week" class="form-control" required>
                            <option value="1">Birinci Hafta</option>
                            <option value="2">İkinci Hafta</option>
                            <option value="3">Üçüncü Hafat</option>
                            <option value="4">Dördüncü Hafta</option>
                          </select>
                        </div>
                      </div>
                    </div>

                  <div class="box-body">
                    <label for="title">Resim Şeç</label>
                      <input type="file" name="image" id="image" accept="image/x-png,image/gif,image/jpeg,image/jpg,image/svg,image/png" required="true">
                  </div> 

					<div class="box-footer">
		              <input type="submit" class="btn btn-primary" value="Kaydet">
		              <a href='{{ route('admin.yemeklistesi.yonet') }}' class="btn btn-warning">Geri Dön</a>
		            </div>
                </form>
        </div>

  
@endsection

@section('footer')

