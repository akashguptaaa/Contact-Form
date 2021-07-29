@extends('layouts.front_design')
@section('contact_title','Contact')

@section('content')
<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-12">
					<div class="wrapper">
						<div class="row no-gutters">
							<div class="col-lg-6">
								<div class="contact-wrap w-100 p-md-5 p-4">
										<h3>Contact</h3>
										
										  
			            <form method="POST" action="{{ route('contact.form')}}" id="contactForm" name="contactForm" class="contactForm">
							@csrf
							<div class="row">
								<div class="col-md-3">
									<div class="form-group">
										 <select name="title" id="title" class="form-control" required>
                                          <option value="" class="form-control">Select*</option>
				                	      <option value="Mr."> Mr.</option>
										  <option value="Mrs."> Mrs.</option>
										  <option value="Ms."> Ms.</option>
		
				                         </select>
									</div>
								</div>
								<div class="col-md-4">
									<div class="form-group">
										<input type="text" class="form-control" name="FirstName" id="FirstName"  value="{{ old('FirstName') }}" placeholder="First Name*">
									</div>
								</div>
								<div class="col-md-4">
									<div class="form-group">
										<input type="text" class="form-control" name="LastName" id="LastName" value="{{ old('LastName') }}" placeholder="Last Name*">
									</div>
								</div>
						    </div>		

						    <div class="row">
								<div class="col-md-12"> 
									<div class="form-group">
										 <input class="form-control" data-provide="datepicker" name="date_of_birth" id="date_of_birth" data-date-format="yyyy-mm-dd" placeholder="Date of birth" >
									</div>
								</div>

							</div>
							 <div class="row">
								<div class="col-md-12">
								
									
                                  {!! $errors->first('phone', '<p style="color: red;" class="help-block">:message</p>') !!}
									<div class="form-group">
										<input type="phone" class="form-control" name="phone" value="{{ old('phone') }}" id="phone" placeholder="Mobile Number*">
									</div>
									 
								</div>


							</div>

							<div class="row">
								<div class="col-md-12">
									 {!! $errors->first('file', '<p style="color: red;" class="help-block">:message</p>') !!}
									<div class="form-group">
										<input type="file" class="form-control" name="file" id="image">
							            
									</div>
								</div>
								
							</div>


							<div class="row">
								<div class="col-md-12">
									
                                      {!! $errors->first('email', '<p style="color: red;" class="help-block">:message</p>') !!}
									<div class="form-group">
										<input type="email" class="form-control" name="email" value="{{ old('email') }}"  id="email" placeholder="Email*">
									</div>
								</div>
								
							</div>

							<div class="row">
								<div class="col-md-12">
									<div class="form-group">
										<textarea name="message" class="form-control" id="message" value="{{ old('message') }}"  cols="30" maxlength="300" rows="4" placeholder="Create a message here"></textarea>
									</div>
								</div>
								
							</div>

							
						<div class="form-group">
							<input type="submit" id="btncontact" value="Send Message" class="btn btn-primary">
							
						</div>
			  </form>
																
								</div>
							</div>
							<div class="col-lg-6 d-flex align-items-stretch">
								<div class="info-wrap w-100 p-5 img"  style="background-image: url( {{  asset('images/img.jpg') }});">
						       </div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>


	
@endsection