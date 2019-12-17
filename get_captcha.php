 
<?php

// enqueue and localise scripts
 /*wp_enqueue_script( 'elit-ajax-handle', plugin_dir_url( __dir__ ) . 'elitajax.js', array( 'jquery' ) );
 wp_localize_script( 'elit-ajax-handle', 'the_ajax_script', array( 'ajaxurl' => admin_url( 'admin-ajax.php' ) ) );*/

 // THE AJAX ADD ACTIONS
 

// THE AJAX ADD ACTIONS
add_action( 'wp_ajax_the_ajax_hook_get_captcha', 'elitbuzz_action_function_get_captcha' );
add_action( 'wp_ajax_nopriv_the_ajax_hook_get_captcha', 'elitbuzz_action_function_get_captcha' ); //
 

 // THE FUNCTION
 function elitbuzz_action_function_get_captcha(){
$captcha = null;	 
$permitted_chars = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
// Output: 54esmdr0qf
$captcha = substr(str_shuffle($permitted_chars), 0, 5);
	 
$tz = 'Asia/Dubai'; // your required location time zone.
$timestamp = time();
$dt = new DateTime("now", new DateTimeZone($tz)); //first argument "must" be a string
$dt->setTimestamp($timestamp); //adjust the object to correct timestamp
 
setcookie ("captcha", $captcha, time()+ (60 * 20), '/', NULL, 0 );
echo  ltrim($captcha, '0');
exit();
 }