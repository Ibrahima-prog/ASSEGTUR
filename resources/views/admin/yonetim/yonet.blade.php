@extends('admin/app')

@section('headSection')

@endsection

@section('head')
@endsection

@section('mainBody')
    

      <div class="callout callout-info">
        <h4>Informations Sur Les Membres Du Bureau</h4>
      </div>

  
	      <div class="row">
	        
	      	@foreach($yonetim as $person)
		        <div class="col-md-3 ">

		           <div class="box box-primary">
		            <div class="box-body box-profile">
		              <img class="profile-user-img img-responsive img-circle" src="../../../yonetimFotograflari/{{ $person->image }}" alt="User profile picture" style="width: 100px">

		              <ul class="list-group list-group-unbordered">
		                <li class="list-group-item">
		                  <b>Nom Et Prenom</b> <a>{{ $person->name }}</a>
		                </li>
		                <li class="list-group-item">
		                  <b>Fonction:</b> <a>{{ $person->trtitle }}</a>
		                </li>

		              </ul>

		              <a href="{{ route('admin.yonetim.duzenle', $person->id) }}" class="btn btn-primary btn-block "><b>Editer</b></a>
		               
		               <form id="delete-form-{{ $person->id }}" method="get" action="{{ route('admin.yonetim.delete', $person->id) }}" style="padding-top: 10px;">
                                {{ csrf_field() }}
                                {{ method_field('DELETE') }}
                              </form>
                              <a href="" class="btn btn-danger btn-block" onclick="
                              if(confirm('Bu yonetim üye silmek istediğinizden emin misiniz?'))
                                  {
                                    event.preventDefault();
                                    document.getElementById('delete-form-{{ $person->id }}').submit();
                                  }
                                  else{
                                    event.preventDefault();
                                  }" ><span class="glyphicon glyphicon-trash"></span><b> Supprimer</b></a>

		             
		            </div>
		            <!-- /.box-body -->
		          </div>
		        </div>
		     @endforeach
	        
	    </div>

	
 
  
@endsection

@section('footer')

