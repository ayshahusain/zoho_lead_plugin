$(document).ready(function() {
 
  $('#first_form').submit(function(e) {
    
    var lname = $('#lname').val();
    var mob = $('#mob').val();
    var email = $('#email').val(); 
    
    var lname_va = true; 
    var mob_va = true;
    var email_va = true;
 
   
 
     if (lname.length < 1) {
    /*  $('#lname').after('<span class="error">This field is required</span>');*/
		 $('#lname').addClass('errormy');
     e.preventDefault();
    }else{
		$('#lname').removeClass('errormy');
	}
    
    if(!$('#mob').val().match('[0-9]{10}'))   {
      /*$('#mob').after('<span class="error">Please put 10 digit mobile number</span>');*/
$('#mob').addClass('errormy');
       e.preventDefault();
    }else{
		$('#mob').removeClass('errormy');
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
	  }
    } 
    
    
    
     
  });
  
  
  
  $('#appointment_form').submit(function(e) {
    
    var lname = $('#lname').val();
    var mob = $('#mob').val();
    var email = $('#email').val(); 
	 var specialty = $('#specialty').val();
    
    var lname_va = true; 
    var mob_va = true;
    var email_va = true;
 
    
 
     if (lname.length < 1) {
    /*  $('#lname').after('<span class="error">This field is required</span>');*/
		 $('#lname').addClass('errormy');
     e.preventDefault();
    }else{
		 $('#lname').removeClass('errormy');
	}
	
	 if (specialty.length < 1) {
    /*  $('#lname').after('<span class="error">This field is required</span>');*/
		 $('#specialty').addClass('errormy');
     e.preventDefault();
    }else{
		 $('#specialty').removeClass('errormy');
	}
    
    if(!$('#mob').val().match('[0-9]{10}'))   {
      /*$('#mob').after('<span class="error">Please put 10 digit mobile number</span>');*/
$('#mob').addClass('errormy');
       e.preventDefault();
    }else{
		$('#mob').removeClass('errormy');
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
      }
	  $('#email').removeClass('errormy');
	  
    } 
    
    
    
     
  });
 
});