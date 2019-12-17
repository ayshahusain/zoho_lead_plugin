$(document).ready(function() {
	get_zoho_captcha();
	
  $('#captchbut').click(function() {
	  get_zoho_captcha();
  });
  
function get_zoho_captcha(){
	 
	$("#zohoload").hide();
	 
	var data = {
		'action': 'the_ajax_hook_get_captcha' ,
        'mob':25		// We pass php values differently!
	};
	
	 jQuery.get(the_ajax_script.ajaxurl, data
    ,
    function(response_from_the_action_function){
		 jQuery("#captcha").html(response_from_the_action_function); 
		 $("#zohoload").show();
		 $("#hideload").hide();
    }
    );

}


  $('#formsubmit').click(function(e) {
     $("#zohoload").hide();
	  $("#hideload").show();
    var lname = $('#lname').val();
	var fname = $('#fname').val();
    var mob = $('#mob').val();
	 var zoho_captcha = $('#zoho_captcha').val();
    var email = $('#email').val(); 
    
    var lname_va = 0; 
	 var fname_va = 0; 
    var mob_va = 0;
    var email_va = 0;
 
   
 
     if (fname.length < 1) {
    /*  $('#lname').after('<span class="error">This field is required</span>');*/
		 $('#fname').addClass('errormy');
     e.preventDefault();
    }else{
		$('#fname').removeClass('errormy');
		fname_va = 1;
	}
	
	 if (lname.length < 1) {
    /*  $('#lname').after('<span class="error">This field is required</span>');*/
		 $('#lname').addClass('errormy');
     e.preventDefault();
    }else{
		$('#lname').removeClass('errormy');
		   lname_va = 1; 
	}
    
    if(!$('#mob').val().match('[0-9]{10}'))   {
      /*$('#mob').after('<span class="error">Please put 10 digit mobile number</span>');*/
$('#mob').addClass('errormy');
       e.preventDefault();
    }else{
		$('#mob').removeClass('errormy');
		  mob_va = 1;
	}
	
    if (email.length < 1) {
        e.preventDefault();
      /*$('#email').after('<span class="error">This field is required</span>');*/
		$('#email').addClass('errormy');
    } else {
        
      var regEx =/^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
      var validEmail = regEx.test(email);
      if (!validEmail) {
          e.preventDefault();
   /*     $('#email').after('<span class="error">Enter a valid email</span>');*/
		  $('#email').addClass('errormy');
      }else{
		 $('#email').removeClass('errormy'); 
		    email_va = 1;
	  }
    } 
    
    if(zoho_captcha == ''){ e.preventDefault();} 
	
	 submit_captcha(email_va,mob_va,lname_va,fname_va);
	 
   
     
  });
  
   
 function submit_captcha(email_va,mob_va,lname_va,fname_va){
	var zoho_captcha = jQuery('#zoho_captcha').val();
	
	var data = {
		'action': 'the_ajax_hook_captcha',
        'mob':zoho_captcha		// We pass php values differently!
	};
	
	 jQuery.get(the_ajax_script.ajaxurl, data
    ,
    function(response_from_the_action_function){
		if(response_from_the_action_function == 1){
			
			jQuery("#response_area").html('Captcha Is no match');
			jQuery("#zoho_captcha").addClass('errormy');
			 $("#zohoload").show();
		 $("#hideload").hide();
			e.preventDefault();
		}else if(response_from_the_action_function == 2){
			 
			jQuery("#zoho_captcha").removeClass('errormy');
			jQuery("#response_area").html('');
			
	 
			if(email_va == 1 && lname_va == 1 && fname_va == 1 && mob_va == 1 ){
			
			$("#first_form").submit() ;
			}else{
			  $("#zohoload").show();
		      $("#hideload").hide();
			  e.preventDefault();
			}			
			  
		}
		 
        
    }
    );
	
	
 
}




});