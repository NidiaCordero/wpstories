<?php
query_posts( array(
    'post_type'        => 'post',
    'meta_key'         => '_thumbnail_id',
    'meta_value_num'   => 0,
    'meta_compare'     => '!=' 
) );

while ( have_posts() ) : the_post(); ?>
<h2><?php the_title(); ?></h2>
<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
<?php 
endwhile; 
?>