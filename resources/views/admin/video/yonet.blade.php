@extends('admin/app')

@section('headSection')

@endsection

@section('head')
@endsection

@section('mainBody')
   
  
      <div class="callout callout-info">
        <h4>Video Galerisi</h4>
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
                   <a href="{{ route('admin.video.ekle') }}" title=""><button type="button" class="btn btn-block btn-primary">Yeni Video Yükle</button></a>
                  </td>
                   <td>
                   	 <a href="{{ route('admin.video.deleteall') }}" title=""><button type="button" class="btn btn-block btn-danger">Bütün Videoları sil</button></a>

                    
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

                  	@foreach($videos as $video)

                    <div class="col-sm-4">
	            	    <div class="timeline-body">
		                  <div class="embed-responsive embed-responsive-16by9">
		                    <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/{{ $video->video }}" frameborder="0" allowfullscreen></iframe>
		                  </div>
		                </div>

	                  <div class="box-body pad table-responsive">
			              <table class="table table-bordered text-center">
			                <tr>
			                   <td>
			                   	<a href="{{ route('admin.video.delete', $video->id) }}" title="Videoyu Sil"><button type="button" class="btn btn-block btn-danger">Videoyu Sil</button></a>
			                  </td>
			                </tr>
			              </table>
			            </div>
                      <br>
                    </div>

                     @endforeach


                  <!-- /.row -->
                </div>
                <!-- /.col -->
              </div>
              <!-- /.row -->
       </div>

  </div>
@endsection

@section('footer')

