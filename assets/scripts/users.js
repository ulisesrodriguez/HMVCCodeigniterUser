// JavaScript Document
/*
======================================================================================

  Author		Ulises Rodriguez
  Site:			http://www.ulisesrodriguez.com	
  Twitter:		https://twitter.com/#!/isc_ulises
  Facebook:		http://www.facebook.com/ISC.Ulises
  Github:		https://github.com/ulisesrodriguez
  Email:		ing.ulisesrodriguez@gmail.com
  Skype:		systemonlinesoftware
  Location:		World
   

====================================================================================== */


var url = 'http://localhost/ulisesrodriguez/codecs/Codeigniter/Medical/';

// Textarea count
// options
var options_ = {
	'maxCharacterSize': 200,
	'originalStyle': 'originalTextareaInfo',
	'warningStyle' : 'warningTextareaInfo',
	'warningNumber': 40,
	'displayFormat' : '#left Characters Left / #max'
};


// Setting
$('#comments').textareaCount(options_, function(data){
	 
	 var result = 'Characters Input: ' + data.input + '<br />';
		 result += 'Characters Limitation: ' + data.max + '<br />';
	 
	 $('#comments-text').html(result);
});




// Validator
$( document ).ready(function() {
	
	$("#form").validate({
		
		rules: {
		
			  password: 'required',
		
			  password_: { required: true, equalTo: '#password' }
		
		},
		
		 submitHandler: function(form) {
		   
		   // Setting MD5 Javascript;
		   $( '#password' ).val( calcMD5( $( '#password' ).val() ) );
		   $( '#password_' ).val( calcMD5( $( '#password_' ).val() ) );
		   
		   // Send form
		   form.submit();
		 
		 }
		
		
	});
	
});


$( document ).ready(function() {
	
	$("#form_").validate({
		
		rules: {
					 		
			  password_: { equalTo: '#password' }
		
		},
		
		 submitHandler: function(form) {
		   
		   if( $( '#password' ).val().length > 0 ){
		  
		   // Setting MD5 Javascript;
		  	$( '#password' ).val( calcMD5( $( '#password' ).val() ) );
		   	$( '#password_' ).val( calcMD5( $( '#password_' ).val() ) );
		   
		   }
		   // Send form
		   form.submit();
		 
		 }
		
		
	});
	
});


/**
 * Valid User
 **/

function validUser( login ){
		    
 	$( "#msg-login" ).html( '<img src="'+url+'user/assets/images/loading.gif"/> Please wait.' );
	
	$( "#msg-login" ).addClass( 'alert alert-info' );
				
	$.ajax({
	
		url:  url+'user/chekuser',
		type: "POST",
		data: "user="+login,
		cache: false,
		dataType: "json",
		success: function(data){
			
			
			// Clean message class
			$( "#msg-login" ).removeClass( 'alert alert-info' );
			
			$( "#msg-login" ).removeClass( 'alert alert-success' );
			
			$( "#msg-login" ).removeClass( 'alert alert-error' );
			
			
			// Setting new response message
			if( data.type == true ){
			
				$( "#msg-login" ).html( data.message );
				
				$( "#msg-login" ).addClass( 'alert alert-success' );				
				
			}
			
			if( data.type == false ){
			
				$( "#msg-login" ).html( data.message );
				
				$( "#msg-login" ).addClass( 'alert alert-error' );				
				
			}
			
		
		}						
	
	});

}

/**
 * Valid Mail
 */

function validEmail( email ){
	
	   
    $( "#msg-email" ).html( '<img src="'+url+'user/assets/images/loading.gif"/> Please wait.' );
	
	$( "#msg-email" ).addClass( 'alert alert-info' );
	
			
	$.ajax({
	
		url:  url+'user/chekmail',
		type: "POST",
		data: "email="+email,
		dataType: "json",
		cache: false,
		success: function(data){
			
			// Clean message class
			$( "#msg-email" ).removeClass( 'alert alert-info' );
			
			$( "#msg-email" ).removeClass( 'alert alert-success' );
			
			$( "#msg-email" ).removeClass( 'alert alert-error' );
			
			
			// Setting new response message
			if( data.type == true ){
			
				$( "#msg-email" ).html( data.message );
				
				$( "#msg-email" ).addClass( 'alert alert-success' );				
				
			}
			
			if( data.type == false ){
			
				$( "#msg-email" ).html( data.message );
				
				$( "#msg-email" ).addClass( 'alert alert-error' );				
				
			}
			
			
			
		}
								
	
	});
	
}