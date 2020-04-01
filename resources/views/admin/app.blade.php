
<!DOCTYPE html>
<html lang="en">

<head>

@include('admin/layouts/head')

</head>

<body class="hold-transition skin-blue sidebar-mini">
   
<div class="wrapper" >
  

  @include('admin/layouts/header')
	@include('admin/layouts/sidebar')
	
 
 
 	
 	<div class="content-wrapper">
	     <section class="content">

         

            <div class="box-body">
               
              @if(session('error'))
                    <div class="alert alert-danger alert-dismissible">
                      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                      <h4><i class="icon fa fa-ban"></i> Beklenmeyen bir hata oluştu!</h4>
                      {{ session('error') }}
                    </div>
              @elseif(session('success'))
                  <div class="alert alert-success alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <h4><i class="icon fa fa-check"></i> Başarı!</h4>
                    {{ session('success') }}
                  </div>
              @elseif(session('warning'))
                <div class="alert alert-warning alert-dismissible">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                  <h4><i class="icon fa fa-warning"></i> Uyari!</h4>
                   {{ session('warning') }}
                </div>
              @elseif(session('info'))
                 <div class="alert alert-info alert-dismissible">
                      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                      <h4><i class="icon fa fa-info"></i> Alert!</h4>
                      {{ session('info') }}
                    </div>
              @endif 
           
            </div>




		    @section('mainBody')

		    @show
	     </section>
  </div>
    
  @include('admin/layouts/footer') 
  
</div>

	
</body>

</html>

