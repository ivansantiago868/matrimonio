<?php
/*
Plugin Name: Contact Form 7 Popup Message
Plugin URI: http://www.innovativeroots.com/plugins/contact-form-7-popup-message/
Version: 1.4
Description: Popup Message Addon is an addon for contact for 7. Using this addon you can replace your validation and success messages into beautiful popup message to attract visitors.
Author: Innovative Roots
Author URI: http://www.innovativeroots.com/
Company: Innovative Roots
Company URI: http://www.innovativeroots.com/
* License: GPL2
*/

define( 'WP_CF7PMA_PATH_PLUGIN', dirname(__FILE__) . '/' );
final class CF7_Popup_Message {

    function __construct() {

        // Admin
        add_action( 'current_screen',       array( $this, 'enqueu_in_admin' ) );
        add_action( 'wpcf7_after_save',     array( $this, 'save_popup_settings' ) );
        add_action( 'wpcf7_add_meta_boxes', array( $this, 'add_popup_settings' ) );

        // Front
        add_action( 'wp_head', array( $this, 'ajaxurl' ) );
        add_action( 'wp_footer', array( $this, 'load_pma' ), 5 );
        
        // AJAX
        add_action( 'wp_ajax_checkPMAenable',           array( $this, 'check_ajax' ) );
        add_action( 'wp_ajax_nopriv_checkPMAenable',    array( $this, 'check_ajax' ) );
		
		// update for cf7 4.2
		add_filter( 'wpcf7_editor_panels',  array( $this, 'cf7pp_editor_panels') );
		
    }
    
    function check_ajax() {
    	        
        if( !isset( $_POST['data'] ) || empty( $_POST['data'] ) ) {
            echo json_encode( array( 'pma' => 0 ) );
            die;
        }
        
    	$formid        =  $_POST['data'];
    	$pma_enable    = get_option( 'cf7_pma_'.$formid);
    	$pma_theme     = get_option( 'cf7_pma_theme_'.$formid);
    	
        $pma = ($pma_enable == 1) ? 1 : 0;
    	$arr = array(
            'pma'   => $pma,
            'theme' => $pma_theme
        );
    	echo json_encode($arr);
    	die;
    }

    /** ======= Admin ======= */
    function enqueu_in_admin( $screen ) {		
        if( 'toplevel_page_wpcf7' == $screen->id ) {
            wp_enqueue_style( 'pma-admin-css', plugins_url('css/css.css', __FILE__) );
        }
    }

    function save_popup_settings( $args ) {

        update_option( 'cf7_pma_'       . $args->id(), $_POST['wpcf7pma_active'] );
        update_option( 'cf7_pma_theme_' . $args->id(), $_POST['wpcf7pma_theme']  );
    }
	
	
	function cf7pp_editor_panels ( $panels ) {

		$panels['popup-message-addons-panel'] = array(
			'title' => __( 'Popup Message Addons', 'contact-form-7' ),
			'callback' => array( $this, 'render_metabox') );		
		return $panels;
	}
	
	
	
    function add_popup_settings() {
        add_meta_box( 'wpcf7pma_form_options', 'Popup Message Addons', array( $this, 'render_metabox' ), null, 'mail' );
	}

    function render_metabox( $args ) {		
    	$cf7_pma       = get_option( 'cf7_pma_'        . $args->id() );
    	$cf7_pma_theme = get_option( 'cf7_pma_theme_'  . $args->id() );

        include_once 'popup-themes.php';
    }

    /** ======= Front ======= */
    function ajaxurl() {
    	$html = '<script type="text/javascript">'."\r\n";
    	$html .= "var pma_template_Url = '".site_url()."';";
    	$html .= "var pma_plugin_Url = '".plugins_url()."';";
    	$html .= '</script>';
    	echo $html;
    }

    function load_pma() {
    
        global $cf7id,$text,$text_data;    	
		
		$text_widgets = get_option( 'widget_text' );		
		foreach ( $text_widgets as $widget ) {
		//	$text_data .= $widget['text'];
		$text="";
		if(is_array($widget))
			{
				extract($widget);
				$text_data .= $text;
			}
		}		
		
        if ( ! has_shortcode( get_the_content(), 'contact-form-7' ) && ! has_shortcode( $text_data, 'contact-form-7') ) return;
    
        wp_enqueue_style ( 'sweetalert',       plugins_url( 'sweetalert/sweetalert.css', __FILE__));
        wp_enqueue_script( 'sweetalertjs',     plugins_url( 'sweetalert/sweetalert.min.js', __FILE__));
        wp_enqueue_script( 'sweetalertscript', plugins_url( 'js/script.js', __FILE__));
    	
    
        $data_cf7 = array();
        preg_match("/\[contact-form-7 (.+?)\]/", get_the_content().$text_data, $data_cf7);
        $data_cf7 = array_pop($data_cf7);
        $data_cf7= explode(" ", $data_cf7);
    
        $params = array();
        foreach( $data_cf7 as $d ){
        
            if ( strpos( $d,'id=' ) !== false ) {
                @list( $opt, $val ) = explode( "=", $d );
                $params[$opt] = trim($val, '"');
                if( is_numeric( $params['id'] ) ) {
                    $pma_theme = get_option( 'cf7_pma_theme_' . $params['id'] );
                    wp_enqueue_style('sweetalerttheme',plugins_url('sweetalert/themes/'.$pma_theme.'/'.$pma_theme.'.css', __FILE__));
                }
            }
        }
    }
}
new CF7_Popup_Message();
?>