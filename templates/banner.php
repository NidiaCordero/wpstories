<section class="home-slider owl-carousel">
<?php
query_posts( array(
    'post_type'        => 'post',
    'meta_key'         => '_thumbnail_id',
    'meta_value_num'   => 0,
    'meta_compare'     => '!=' 
) );

while ( have_posts() ) : the_post(); ?>
      <div class="slider-item">
        <div class="container">
          <div class="row d-flex slider-text justify-content-center align-items-center" data-scrollax-parent="true">
         



						<div class="img"><?php the_post_thumbnail('full'); ?></div>

            <div class="text d-flex align-items-center ftco-animate">
            	<div class="text-2 pb-lg-5 mb-lg-4 px-4 px-md-5">
		          	<h3 class="subheading mb-3">Featured Posts</h3>
		            <h1 class="mb-5"><?php the_title(); ?></h1>
                <p class="mb-md-5"> <?php the_excerpt(); ?></p>
                
		            <p><a href="<?php the_permalink(); ?>" ></a></p>
              </div>
            </div>

          </div>
        </div>
      </div>
      <?php 
endwhile; 
?>
     
    </section>