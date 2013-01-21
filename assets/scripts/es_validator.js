// JavaScript Document
/*
======================================================================================

  Author		Storap
  Site:			http://www.storap.com	
  Twitter:		https://twitter.com/#!/storap
  Facebook:		http://www.facebook.com/storap
  Github:		https://github.com/storap
  Email:		sales@storap.com
  Skype:		storap
  Location:		World
  
   
  Dependencies:
  //ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js
  jquery.validate/1.10.0/jquery.validate.js
  
  Validator Language
    
  'Spanish'	
	
====================================================================================== */
$(document).ready(function(){
        
   jQuery.extend(jQuery.validator.messages, {
	  
	  required: 'Requerido',
	  email: 'Correo invalido',
	  equalTo: 'Ingresa los mismos valores.'
	  
	});
    
});
