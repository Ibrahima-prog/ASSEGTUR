@extends('admin/app')

@section('headSection')

@endsection

@section('head')
@endsection

@section('mainBody')
    

      <div class="callout callout-info">
        <h4>Topluluk Yönetimi Üyeleri</h4>
      </div>

  
	      <div class="row">
	        
	      	@foreach($yonetim as $person)
		        <div class="col-md-3 ">

		           <div class="box box-primary">
		            <div class="box-body box-profile">
		              <img class="profile-user-img img-responsive img-circle" src="../../../toplulukFotograflari/{{ $person->image }}" alt="User profile picture" style="width: 100px">

		              <ul class="list-group list-group-unbordered">
		                <li class="list-group-item">
		                  <b>Adı Soyadı: </b> <a>{{ $person->name }}</a>
		                </li>
		                <li class="list-group-item">
		                  <b>Görevi: </b> <a>{{ $person->trtitle }}</a>
		                </li>

		              </ul>

		              <a href="{{ route('admin.topluluk.duzenle', $person->id) }}" class="btn btn-primary btn-block "><b>Düzenle</b></a>
		               
		               <form id="delete-form-{{ $person->id }}" method="get" action="{{ route('admin.topluluk.delete', $person->id) }}" style="padding-top: 10px;">
                                {{ csrf_field() }}
                                {{ method_field('DELETE') }}
                              </form>
                              <a href="" class="btn btn-danger btn-block" onclick="
                              if(confirm('Bu topluluk üye silmek istediğinizden emin misiniz?'))
                                  {
                                    event.preventDefault();
                                    document.getElementById('delete-form-{{ $person->id }}').submit();
                                  }
                                  else{
                                    event.preventDefault();
                                  }" ><span class="glyphicon glyphicon-trash"></span><b> Sil</b></a>

		             
		            </div>
		            <!-- /.box-body -->
		          </div>
		        </div>
		     @endforeach
	        
	    </div>

	
 
  
@endsection

@section('footer')

