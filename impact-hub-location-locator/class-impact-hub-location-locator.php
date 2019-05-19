<?php
if(!class_exists('ImpactHubLocationLocator')) {
    
    class ImpactHubLocationLocator {

        /**
         * A reference to an instance of this class.
         */
        private static $instance;

        /**
         * Returns an instance of this class. 
         */
        public static function get_instance() {

            if ( null == self::$instance ) {
                self::$instance = new ImpactHubLocationLocator();
            } 

            return self::$instance;

        } 

        /**
         * Initializes the plugin by setting filters and administration functions.
         */
        private function __construct() {

            add_action('init', array($this, 'init'));      
            
        } 

        function init() {
            
            add_action('wp_enqueue_scripts', array($this, 'load_assets'));
            
            /* - Shortcodes - */            
            add_shortcode( 'IHLL', array($this, 'shortcode_ihll_iframe') );
            
        }    

        public function load_assets() {            
            
            
            wp_enqueue_style( 'ihll-styles', plugin_dir_url( __FILE__ ) . 'css/styles.css', array(), filemtime(plugin_dir_path( __FILE__ ) . '/css/styles.css') );             
        }
        
        public function shortcode_ihll_iframe( $atts ) {
            ob_start();
            $attributes = shortcode_atts( array(
                'hub' => null,
                'openinnewtab' => "false",
                'color' => null 
            ), $atts );

            $brandColor = urlencode($attributes["color"]);
       
            $iframeUrl = "https://api.hub.panter.cloud/iframes/hubs?openInNewTab={$attributes["openinnewtab"]}&hub={$attributes["hub"]}&brandColor=$brandColor";
            include('inc/iframe.php');
            $content = ob_get_contents();
            ob_end_clean();
            return $content;
        }

    }
    
}