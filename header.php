<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Stories - Free Bootstrap 4 Template by Colorlib</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
   <?php
   wp_head();

?>
  </head>
  <body>
	  <nav class="navbar navbar-expand-lg navbar-dark bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
	      <a class="navbar-brand" href="index.php">Stories<span>.</span></a>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> <?php echo get_bloginfo('name'); ?>
	      </button>

	      <div class="collapse navbar-collapse" id="ftco-nav">
	       
            <?php
        wp_nav_menu([
            // 'menu' => 'main-menu',
          'menu_class' => 'navbar-nav ml-auto',
          'theme_location' => 'main-menu',
          'add_li_class' => 'nav-item',
          'current-menu-item' => 'active',

          'container' => ''
        ]);
        ?>
	      </div>
	    </div>
	  </nav>
    <!-- END nav -->