<!-- sidebar -->
<aside class="sidebar" role="complementary">

    <div class="sidebar-widget">
        <?php if(function_exists('dynamic_sidebar')) {
 ob_start();
 dynamic_sidebar('zone-widgets-3');
 $sidebar = ob_get_contents();
 ob_end_clean();

$args = array( 'posts_per_page' => '3' );
$recent_posts = new WP_Query($args);
while( $recent_posts->have_posts() ) :  
    $recent_posts->the_post() ?>
        <li>
            <a href="<?php echo get_permalink() ?>"><?php the_title() ?></a>
            <?php if ( has_post_thumbnail() ) : ?>
            <?php the_post_thumbnail('thumbnail') ?>
            <?php endif ?>
        </li>
        <?php endwhile; ?>
        <?php wp_reset_postdata();
  
    } 

  ?>
    </div>


</aside>
<!-- /sidebar -->