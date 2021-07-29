





@extends('layouts.front_design')
@section('contact_title','Thank You')



@section('content')
<div class="container">
	<div class="row">
	    <div class="center">
	    	<div class="col-sm-12">
	    		<h5 class="thank">‘Thank you {{ $data['title']  }} {{ $data['FirstName'] }} {{ $data['LastName']}} ’</h5><br>	
	    	</div>

		    <div class="col-sm-12">
		    	<h2><p>You have submitted the following details:</p></h2>
		    	<div class="details">
						<h5>Date of Birth:- {{ $data['date_of_birth']  }}</h5>
						<h5>Telephone:-{{ $data['phone']  }}</h5>
					    <h5>File Uploaded:-{{ $data['file']  }}</h5>
					     <h5>Message:-{{ $data['message']  }}</h5>
					     <a href="{{route('contact.form') }}" type="submit" id="btncontact" value="Back To Contact" class="btn btn-primary">Back To Contact</a>
		    	 </div>
			</div>
		</div>
	</div>
</div>
@endsection