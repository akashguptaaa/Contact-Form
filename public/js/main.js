(function($) {

	"use strict";


  // Form
	var contactForm = function() {
		if ($('#contactForm').length > 0 ) {
			$( "#contactForm" ).validate( {
				rules: {
					FirstName: "required",
					LastName: "required",
					
					phone: "required",
					email: {
						required: true,
						email: true
					}
					
				},
				messages: {
					FirstName: "Please enter your  First Name",
					LastName: "Please enter your  Last Name",
					
					phone: "Please enter your Mobile Number",
					email: "Please enter a email address"
					
				},
				
			});
		}
	};
	contactForm();

})(jQuery);
