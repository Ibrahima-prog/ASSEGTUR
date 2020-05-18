@extends('admin/app')

@section('headSection')

@endsection

@section('head')
@endsection

@section('mainBody')
      <div class="callout callout-info">
        <h4>Les Admins</h4>
      </div>
    <section class="content">

	      <div class="row">
	      	@foreach($users as $user)
	        <div class="col-md-3 ">
	           <div class="box box-primary">
	            <div class="box-body box-profile">
	              <img class="profile-user-img img-responsive img-circle" src="{{ asset('admin/images/user.png') }}" alt="User profile picture">

	              <h3 class="profile-username text-center">{{ $user->name }}</h3>

	              <p class="text-muted text-center">Tous droits réservés</p>

	              <ul class="list-group list-group-unbordered">
	                <li class="list-group-item">
	                  <b>Email</b> <a>{{ $user->email }}</a>
	                </li>
	                <li class="list-group-item">
	                  <b>Date de création:</b> <a>{{ $user->created_at }}</a>
	                </li>
	              </ul>
       
                    <form id="delete-form-{{ $user->id }}" method="get" action="{{ route('admin.kullanici.delete', $user->id) }}" style="padding-top: 10px;">
                    {{ csrf_field() }}
                    {{ method_field('DELETE') }}
                  </form>
                  <a href="" class="btn btn-danger btn-block" onclick="
                  if(confirm('Bu kullanıcı silmek istediğinizden emin misiniz?'))
                      {
                        event.preventDefault();
                        document.getElementById('delete-form-{{ $user->id }}').submit();
                      }
                      else{
                        event.preventDefault();
                      }" >
                      <span class="glyphicon glyphicon-trash"></span><b> Supprimer</b></a>
	            </div>
	            <!-- /.box-body -->
	          </div>
	        </div>
	        @endforeach

	    </div>

	    <div class="row">
	        <div class="col-md-3">
        	    <div class="box-footer">
		         <a href='{{ route('admin.kullanici') }}' class="btn btn-info"> Retourner</a>
		      </div>
	        </div>
	    </div>

 

	</section>
 
  
@endsection

@section('footer')

