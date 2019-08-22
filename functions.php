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

	
/**
 * Fonction qui ajoute un menu au thème.
 *
 * @return void
 */
function register_main_menu()
{
  register_nav_menu('main-menu', 'Menu principal dans le header.');
}
add_action('after_setup_theme', 'register_main_menu');
 /**
 * Fonction qui ajoute des attributes au balise a des nav_menu
 *
 * @param [type] $att
 * @param [type] $item
 * @param [type] $args
 * @return void
 */
function ajout_menu_a_class($atts, $item, $args)
{
  $class = 'nav-link'; // or something based on $item
  $atts['class'] = $class;
  return $atts;
}
 // Ajout d'un écouteur d'événement de type filtre qui nous permet de changer les attributs des balises <a>
// les add_action et add_filter peuvent avoit jusqu'à 4 paramêtre. Le 3ème pour l'ordre d'execution et le 4 ème pour le nombre de parammètre qui seront passer à la fonction callback
add_filter('nav_menu_link_attributes', 'ajout_menu_a_class', 10, 3);

function add_additional_class_on_li($atts, $item, $args)
{
 if ($args->add_li_class) {
   $class = $args->add_li_class;
 }
 $atts['class'] = $class;
 return $atts;
}
add_filter('nav_menu_css_class', 'add_additional_class_on_li', 1, 3);

add_filter('nav_menu_css_class' , 'special_nav_class' , 10 , 2);

function special_nav_class ($classes, $item) {
    if (in_array('current-menu-item', $classes) ){
        $classes[] = 'active ';
    }
    return $classes;
}
/**
 * Ajout la fonctionnalité d'un ajout d'image pour les posts pour ce thème ci
 *
 * @return void
 */
function ajout_image_article()
{
  //Ajout de la fonctionnalité d'ajout d'image pour les posts pour ce thème ci
  add_theme_support('post-thumbnails');
  $test = 0;
}
 // Ajout d'un écouteur d'événement pour activer les images mise en avant pour les post (article)
add_action('init', 'ajout_image_article'); 


// _________
add_theme_support( 'html5', array( 'search-form' ) );
// ----


// function notux_widgets_two() {	
// 	// Mon widget sur mesure
// 		register_sidebar( array(
// 			'name'			=> __( 'recent-cato', 'theme_stories' ),
// 			'id'			=> 'zone-widgets-2',
// 			'description'	=> __( 'single page', 'theme_stories' ),
// 			'before_widget'	=> '<div id="%1$s" class="sidebar-box ftco-animate">',
// 			'after_widget'	=> '</div>',
// 			'before_title'	=> '<div class="sidebar-box ftco-animate">',
// 			'after_title'	=> '</div>',
// 		) );
// }
add_action( 'widgets_init', 'notux_widgets_two' );
function notux_widgets_three() {	
	// Mon widget sur mesure
		register_sidebar( array(
			'name'			=> __( 'recent-post', 'theme_stories' ),
			'id'			=> 'zone-widgets-3',
			'description'	=> __( 'single page', 'theme_stories' ),
			'before_widget'	=> '<div id="%1$s" class="sidebar-box ftco-animate">',
			'after_widget'	=> '</div>',
			'before_title'	=> '<div class="heading mb-4">',
			'after_title'	=> '</div>',
		) );
}
add_action( 'widgets_init', 'notux_widgets_three' );
function notux_widgets_four() {	
	// Mon widget sur mesure
		register_sidebar( array(
			'name'			=> __( 'recent-tags', 'theme_stories' ),
			'id'			=> 'zone-widgets-4',
			'description'	=> __( 'single page', 'theme_stories' ),
			'before_widget'	=> '<div id="%1$s" class="sidebar-box ftco-animate">',
			'after_widget'	=> '</div>',
			'before_title'	=> '<div class="heading mb-4">',
			'after_title'	=> '</div>',
		) );
}
add_action( 'widgets_init', 'notux_widgets_four' );


    

// ------
// commentaires
// -----------
function mytheme_comment($comment, $args, $depth) {
    ?>
    <li class="comment">
      <div class="vcard bio">
        <img src="<?php echo get_avatar_url($comment->user_id);?>" alt="Image placeholder">
      </div>
      <div class="comment-body">
        <h3><?php echo $comment->comment_author;?></h3>
        <div class="meta"><?php echo $comment->comment_date;?></div>
        <p><?php echo $comment->comment_content;?></p>
        <p><a href="#" class="reply">Reply</a></p>
      </div>
    </li>
    <?php
   }




?>






