<?php

/* Plugin Name: Zoho Lead Form for Hamamove
* Description: Use Below Shotcode for Zoho Lead form [hamamove_zoho_lead]
* Version: 1.0
* Author: Elitbuzz
* Author URI: http://elitbuzz.com
*/


 

add_action( 'wp_enqueue_scripts', 'add_my_script' );
function add_my_script() {
	
	
wp_enqueue_style( "slider",  plugins_url('/css/zoholead.css', __FILE__) ,false,"1.1","all");


    wp_enqueue_script(
        'slicknav',
         'https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js', 
         array('jquery') 
    );
    wp_enqueue_script(
        'classie',
         plugins_url('/js/zoho_lead_script.js', __FILE__)  , 
         array('jquery') 
    );
	 wp_enqueue_script( 
	 'elit-ajax-handle', 
	 plugin_dir_url( __dir__ ) . 'elitajax.js', 
	 array( 'jquery' ) );
	 
	  wp_localize_script( 
	  'elit-ajax-handle', 
	  'the_ajax_script',
	  array( 'ajaxurl' => admin_url( 'admin-ajax.php' ) ) );
}

 include_once dirname( __FILE__ ) . '/form.php';
 include_once dirname( __FILE__ ) . '/post.php';
  include_once dirname( __FILE__ ) . '/get_captcha.php';