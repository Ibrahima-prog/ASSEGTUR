@extends('admin/app')

@section('headSection')

@endsection

@section('head')
@endsection

@section('mainBody')
   
  
      <div class="callout callout-info">
        <h4>Yemek Listeleri</h4>
      </div>

       <div class="row">
        <div class="col-md-12">
          <div class="box box-primary">
            <div class="box-header">
              <i class="fa fa-database"></i>

              <h3 class="box-title">Operasyonlar</h3>
            </div>
            <div class="box-body pad table-responsive">
              <table class="table table-bordered text-center">
                <tr>
                  <td>
                   <a href="{{ route('admin.yemeklistesi.ekle') }}" title=""><button type="button" class="btn btn-block btn-primary">Yeni Yemek Liste Yükle</button></a>
                  </td>
                   <td>
                      <a href="{{ route('admin.yemeklistesi.deleteall') }}" title=""><button type="button" class="btn btn-block btn-danger">Bütün Yemek Listeleri sil</button></a>
                  </td>
                </tr>
              </table>
            </div>
            <!-- /.box -->
          </div>
        </div>
        <!-- /.col -->
      </div>
  		
  <!-- /.user-block -->
      <div class="post">
          <div class="row margin-bottom">
            <!-- /.col -->
            <div class="col-sm-12">
              <div class="row">

                 @foreach($foodlists as $foodlist)
                <div class="col-sm-3">
                  <img class="img-responsive" src="../../yemeklistesiFotograflari/{{ $foodlist->image }}" alt="Renkli Düşler Kreş {{ $foodlist->month }} yemek listesi">
                   <div class="box-body pad table-responsive">
		              <table class="table table-bordered text-center">
		                <tr>
		                   <td>
		                   	<a href="{{ route('admin.yemeklistesi.delete', $foodlist->id) }}" title="Renkli Düşler Kreş {{ $foodlist->month }} yemek listesi"><button type="button" class="btn btn-block btn-danger">Fotoyu Sil</button></a>
		                  </td>
		                </tr>
		              </table>
		            </div>
                  <br>
                </div>

              @endforeach
         
              </div>
              <!-- /.row -->
            </div>
            <!-- /.col -->
          </div>
          <!-- /.row -->
       </div>

  
@endsection

@section('footer')

