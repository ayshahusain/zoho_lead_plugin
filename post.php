<?php


// enqueue and localise scripts
/* wp_enqueue_script( 'elitzoho-ajax-handle', plugin_dir_url( __dir__ ) . 'elitzohoajax.js', array( 'jquery' ) );
 wp_localize_script( 'elitzoho-ajax-handle', 'the_ajax_script', array( 'ajaxurl' => admin_url( 'admin-ajax.php' ) ) );*/

 // THE AJAX ADD ACTIONS
 

// THE AJAX ADD ACTIONS
add_action( 'wp_ajax_the_ajax_hook_captcha', 'elitzohobuzz_action_function_captcha' );
add_action( 'wp_ajax_nopriv_the_ajax_hook_captcha', 'elitzohobuzz_action_function_captcha' ); //
 

 // THE FUNCTION
 function elitzohobuzz_action_function_captcha(){
 if($_COOKIE['captcha'] != ltrim($_GET['mob'], '0')){
	echo 1; 
	 
 }else{echo 2;}
 
 exit();
 }