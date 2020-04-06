
<!DOCTYPE html>
<html lang="tr">

<head>

@include('user/layouts/head')

</head>

<body class="corporate">
	
 {{-- 	<div id="page-load">
		<img src="../user/assets/images/loading.gif" class="status" alt="loading">
	</div> 
 --}}
	<div id="wrapper">	 	
			 	 
		@include('user/layouts/navbar') 

		
		 @section('mainBody')

		 @show

 
 	</div>

	 <footer>

    @include('user/layouts/footer')    
</footer>
 	@section('footer')

</body>

</html>
