<!doctype html>
<html lang="en">
  <head>
  	 <title>@yield('contact_title')</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">

	<link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,700' rel='stylesheet' type='text/css'>

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="{{ asset('css/style.css') }}">

   <!--  Datapicker css -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.css">

	</head>
	<body>

	 
	@yield('content')

  <script src="{{asset('js/jquery.min.js') }}"></script>
  <script src="{{asset('js/popper.js') }}"></script>
  <script src="{{asset('js/bootstrap.min.js')}}"></script>
  <script src="{{asset('js/jquery.validate.min.js')}}"></script>
  <script src="{{asset('js/main.js')}}"></script>
  <!-- Datepicker  js  -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.js"></script>

	  
<script>
	 $(function(){
            $("#date_of_birth").datepicker({ 
              minDate: 0,
              dateFormat: 'yy-mm-dd'
            });
        });



</script>
	</body>
</html>

