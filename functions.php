<?php 
function add_css_js()
 {
   //Style
   wp_enqueue_style('Poppins', "https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,900", false);
   wp_enqueue_style('Playfair', "https://fonts.googleapis.com/css?family=Playfair+Display:400,400i,700,700i,900,900i", false);

   wp_enqueue_style('Open-iconic', get_template_directory_uri() . "/css/open-iconic-bootstrap.min.css");
   wp_enqueue_style('animate', get_template_directory_uri() . "/css/animate.css");

  
   wp_enqueue_style('owl-carousel', get_template_directory_uri()."/css/owl.carousel.min.css");
   wp_enqueue_style('owl-theme', get_template_directory_uri()."/css/owl.theme.default.min.css");
   wp_enqueue_style('magnific-popup', get_template_directory_uri()."/css/magnific-popup.css");
   wp_enqueue_style('aos', get_template_directory_uri()."/css/aos.css");
   wp_enqueue_style('ionicons', get_template_directory_uri()."/css/ionicons.min.css");
   wp_enqueue_style('flaticon', get_template_directory_uri()."/css/flaticon.css");
   wp_enqueue_style('iconmoon', get_template_directory_uri()."/css/icomoon.css");

   wp_enqueue_style('myStyle', get_template_directory_uri() . '/css/style.css');
   // //Script
   wp_enqueue_script('jquery', get_template_directory_uri() . '/js/jquery.min.js', null, true);
   wp_enqueue_script('jquery-migrate', get_template_directory_uri() . '/js/jquery-migrate-3.0.1.min.js', null, true);
   wp_enqueue_script('popper', get_template_directory_uri() . '/js/popper.min.js',['jquery'] ,null, true);
   wp_enqueue_script('bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js',['jquery'], null, true);
   wp_enqueue_script('jquery-easing', get_template_directory_uri() . '/js/jquery.easing.1.3.js',['jquery'], null, true);
   wp_enqueue_script('waypoints', get_template_directory_uri() . '/js/jquery.waypoints.min.js',['jquery'], null, true);
   wp_enqueue_script('stellar', get_template_directory_uri() . '/js/jquery.stellar.min.js',['jquery'], null, true);
   wp_enqueue_script('owl-carrousel', get_template_directory_uri() . '/js/owl.carousel.min.js',['jquery'], null, true);
   wp_enqueue_script('stellar', get_template_directory_uri() . '/js/jquery.magnific-popup.min.js',['jquery'], null, true);

   wp_enqueue_script('aos', get_template_directory_uri() . '/js/aos.js',['jquery'], null, true);
   wp_enqueue_script('animateNumber', get_template_directory_uri() . '/js/jquery.animateNumber.min.js',['jquery'], null, true);
   wp_enqueue_script('scrollax', get_template_directory_uri() . '/js/scrollax.min.js',['jquery'], null, true);
   wp_enqueue_script('maps', get_template_directory_uri() . 'https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false', null, true);
   wp_enqueue_script('google-map', get_template_directory_uri() . '/js/google-map.js',['jquery'], null, true);
   wp_enqueue_script('my_scripts', get_template_directory_uri() . '/js/main.js',['jquery'], null, true);
 };
 add_action('wp_enqueue_scripts', 'add_css_js' );






?>