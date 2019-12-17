<?php

function my_zoho_lead(){
	  
 $message = "   <META HTTP-EQUIV ='content-type' CONTENT='text/html;charset=UTF-8'>
   <form id='first_form'action='https://crm.zoho.com/crm/WebToLeadForm' name=WebToLeads4037631000000306017 method='POST'   accept-charset='UTF-8'>
	  
  <input type='text' style='display:none;' name='xnQsjsdp' value='3b85a411a85e7c932ecf1aedc73f7274ca18d3fc58c0f8894bcc5c48a5bc8564'>
  <input type='hidden' name='zc_gad' id='zc_gad' value=''>
  <input type='text' style='display:none;' name='xmIwtLD' value='53adc4584e53c35d29aa7302b81709575b5770b808a444427fc324a20746ac31'>
  <input type='text' style='display:none;' name='actionType' value='TGVhZHM='>
  <input type='text' style='display:none;' name='returnURL' value='https://www.hamamove.com/thank-you'>
  <style> 		
#crmWebToEntityForm tr , #crmWebToEntityForm td {  			padding:6px; 			border-spacing:0px; 			border-width:0px; 			} 	
</style>
  <table width='100%' border='0' cellspacing='0' cellpadding='0' id='zohoz'>
  <tr>
    <td valign='bottom' style='word-break: break-word;text-align:left;color: #4b4b4b;
    font-size: 15px !important;
    font-family: inherit !important;font-weight: 600;'>First Name<span style='color:red;'>*</span></td>
    <td valign='bottom' style='word-break: break-word;text-align:left;color: #4b4b4b;
    font-size: 15px !important;
    font-family: inherit !important;font-weight: 600;'>Last Name<span style='color:red;'>*</span></td>
  </tr>
  <tr>
    <td><input type='text' style='width:100%;box-sizing:border-box;' maxlength='40' id='fname' name='First Name'></td>
    <td><input type='text' style='width:100%;box-sizing:border-box;' maxlength='80'  id='lname' name='Last Name'></td>
  </tr>
  <tr>
    <td valign='bottom' style='word-break: break-word;text-align:left;color: #4b4b4b;
    font-size: 15px !important;
    font-family: inherit !important;font-weight: 600;' >Email<span style='color:red;'>*</span></td>
    <td valign='bottom' style='word-break: break-word;text-align:left;color: #4b4b4b;
    font-size: 15px !important;
    font-family: inherit !important;font-weight: 600;'>Phone<span style='color:red;'>*</span></td>
    
  </tr>
  
    <tr>
   <td style='width:40%;'><input type='text' style='width:100%;box-sizing:border-box;' maxlength='100' name='Email' id='email'></td>
 <td style='width:40%;'><input type='text' style='width:100%;box-sizing:border-box;' maxlength='30' name='Phone'  id='mob'></td>
    
  </tr>
    <tr>
     <td valign='bottom' style='word-break: break-word;text-align:left;color: #4b4b4b;
    font-size: 15px !important;
    font-family: inherit !important;font-weight: 600;'>Message </td>
      <td style='width:40%;'>&nbsp;</td>
    </tr>
    <tr>
      <td colspan='2' style='word-break: break-word;text-align:left;font-size:12px;font-family:Arial;width:30%;'> 
      
       <textarea name='LEADCF8' maxlength='2000' style='width:100%;' spellcheck='false'>&nbsp;</textarea></td>
    </tr>
   
    
    
      <tr>
    <td ><div id='captcha' style='background-color:black;color:white;font-size:30px; padding:7px; width:110px; height:50px;float:left'></div>
		<img src='".plugin_dir_url( __FILE__ ) . 'refresh.jpg'."'
 alt='' style='float:left;height: 29px;margin-left:15px'  id='captchbut' /> </td>
    <td >  </td>
    
  </tr>
   <tr>
    <td ><input name='zoho_captcha' type='text' id='zoho_captcha'>
		
		<span id='response_area' style='margin:0; color:red'></span><div style='clear:both'></div>  </td>
    <td ></td>
    
  </tr>
  
  
    <tr>
    <td colspan='2' style='text-align:left; padding-top:15px;font-size:12px;'> 	
	<button type='button' id='hideload' style='margin-right: 5px;cursor: pointer; width:100px !importent;font-size:12px;color:black'   class='cta'><img src='".plugin_dir_url( __FILE__ ) . "loading.gif' style='width:100px;margin-top: -10px; '>
	</button>
	<div id='zohoload' style='display:none'   >
	<button type='button' style='margin-right: 5px;cursor: pointer; width:100px !importent;font-size:12px;color:black' id='formsubmit' class='cta'> SUBMIT </button>
	 
	<input type='reset' name='reset' style='width:100px !importent;cursor: pointer;font-size:12px;color:black' value='RESET'> 
	</div></td>
    </tr>
  
  
</table>
</form>
"; 
 	  
 
 
return  $message;

 }
add_shortcode("hamamove_zoho_lead", "my_zoho_lead");
 ?>