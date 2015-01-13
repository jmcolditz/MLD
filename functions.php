<?php 


add_filter('show_admin_bar', '__return_false');


add_action('wp_footer', 'add_googleanalytics');
function add_googleanalytics() 
{ ?>

     <script>
            (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
            function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
            e=o.createElement(i);r=o.getElementsByTagName(i)[0];
            e.src='//www.google-analytics.com/analytics.js';
            r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
            ga('create','UA-XXXXX-X');ga('send','pageview');
        </script>
        
<?php } 


function wpse_enqueue_scripts() {
    wp_enqueue_script( 'modernizr', get_template_directory_uri() . '/boiler/js/vendor/modernizr-2.6.2-respond-1.1.0.min.js', array(), '2.6.2' );
  
    wp_register_script('jquery', 'http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js', array(), '1.11.1');
    wp_enqueue_script('jquery');
    { ?>

        <script>
           window.jQuery || document.write('<script src="/boiler/js/vendor/jquery-1.11.1.min.js"><\/script>')
        </script>
        
    <?php } 

    wp_enqueue_script( 'jquery-bootstrap', get_template_directory_uri() . '/boiler/js/vendor/bootstrap.min.js', array( 'jquery' ), false, true );
    wp_enqueue_script( 'plugins', get_template_directory_uri() . '/boiler/js/plugins.js' );
    wp_enqueue_script( 'main', get_template_directory_uri() . '/boiler/js/main.js' );
    
    // wp_register_script( 'custom-script', get_template_directory_uri() . '/boiler/js/vendor/bootstrap.js', array( 'jquery' ) );
    // wp_enqueue_script( 'custom-script' );

}
add_action( 'wp_enqueue_scripts', 'wpse_enqueue_scripts' );    



// add_action('wp_footer', 'add_jquery');
// function add_jquery() 

?>