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
   wp_enqueue_script('popper', get_template_directory_uri() . '/js/popper.min.js',['jquery'] ,null, true);
   wp_enqueue_script('bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js',['jquery'], null, true);
   wp_enqueue_script('jquery-easing', get_template_directory_uri() . '/js/jquery.easing.min.js',['jquery'], null, true);
   wp_enqueue_script('swiper', get_template_directory_uri() . '/js/swiper.min.js',['jquery'], null, true);
   wp_enqueue_script('magnific-popup', get_template_directory_uri() . '/js/jquery.magnific-popup.js',['jquery'], null, true);
   wp_enqueue_script('morphtext', get_template_directory_uri() . '/js/morphext.min.js',['jquery'], null, true);
   wp_enqueue_script('validator', get_template_directory_uri() . '/js/validator.min.js',['jquery'], null, true);
   wp_enqueue_script('my_scripts', get_template_directory_uri() . '/js/scripts.js',['jquery'], null, true);
 };
 add_action('wp_enqueue_scripts', 'add_css_js' );






?>