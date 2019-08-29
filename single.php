<?php
/*
Template Name: page single
Template Post Type: post
*/
 ?>
<?php 
get_header(); 
?>


<section class="hero-wrap hero-wrap-2"
    style="background-image: url('<?php echo wp_get_attachment_url( get_post_thumbnail_id( $post->ID ) ); ?>');">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text align-items-end justify-content-center">
            <div class="col-md-9 ftco-animate pb-5 text-center">
                <h1 class="mb-3 bread"><?php the_title(); ?></h1>
                <p class="breadcrumbs"><span class="mr-2"><a href="index.php">Home <i
                                class="ion-ios-arrow-forward"></i></a></span> <span><?php the_title(); ?><i
                            class="ion-ios-arrow-forward"></i></span></p>
            </div>
        </div>
    </div>
</section>

<section class="ftco-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 order-lg-last ftco-animate">
                <!-- afficher l'article -->
                <?php while (have_posts()) : the_post(); ?>
               
                <h2 class="mb-3" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></h2>
                <div class="post-content">
                    <?php the_content(); ?>
                </div>
                <?php endwhile; ?>
                <div class="tag-widget post-tag-container mb-5 mt-5">
                   <!-- tags  -->
                    <?php
                    if(get_the_tag_list()) {
                      echo get_the_tag_list('<div class="tagcloud">','','</div>');
                    }
                    ?>
                </div>
                
                <div class="about-author d-flex p-4 bg-light">
                <?php get_template_part('single-author') ?>

                    <!-- <div class="bio mr-5">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/person_1.jpg"
                            alt="Image placeholder" class="img-fluid mb-4">
                    </div>
                    <div class="desc">
                        <h3>George Washington</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus itaque, autem
                            necessitatibus voluptate quod mollitia delectus aut, sunt placeat nam vero culpa sapiente
                            consectetur similique, inventore eos fugit cupiditate numquam!</p>
                    </div> -->
                </div>


                <div class="pt-5 mt-5">

                    <h3 class="mb-5">6 Comments</h3>
                    <?php comments_template(); ?>





                    <!-- END comment-list -->

                    <div class="comment-form-wrap pt-5">
                        <h3 class="mb-5">Leave a comment</h3>
                        <form action="#" class="p-5 bg-light">
                            <div class="form-group">
                                <label for="name">Name *</label>
                                <input type="text" class="form-control" id="name">
                            </div>
                            <div class="form-group">
                                <label for="email">Email *</label>
                                <input type="email" class="form-control" id="email">
                            </div>
                            <div class="form-group">
                                <label for="website">Website</label>
                                <input type="url" class="form-control" id="website">
                            </div>

                            <div class="form-group">
                                <label for="message">Message</label>
                                <textarea name="" id="message" cols="30" rows="10" class="form-control"></textarea>
                            </div>
                            <div class="form-group">
                                <input type="submit" value="Post Comment" class="btn py-3 px-4 btn-primary">
                            </div>

                        </form>
                    </div>
                </div>

            </div>
            <!-- .col-md-8 -->
            <div class="col-lg-4 sidebar pr-lg-5 ftco-animate">
                <div class="sidebar-box">
                    <form role="search" method="get" id="search-form" class="search-form"
                        action="<?php echo esc_url( home_url( '/' ) ); ?>">
                        <div class="form-group">
                            <span class="icon icon-search"></span>
                            <input type="search" class="form-control"
                                placeholder="<?php echo esc_attr( 'Type a keyword and hit enter', 'presentation' ); ?>"
                                name="s" id="search-input" value="<?php echo esc_attr( get_search_query() ); ?>" />

                        </div>
                    </form>
                </div>
<!-- recents cato-->
                <div class="sidebar-box ftco-animate">
                    <?php
                get_sidebar('categories');
                
                ?>
                </div>
<!-- recents post-->
                <div class="sidebar-box ftco-animate">
                    <?php
                 dynamic_sidebar( 'zone-widgets-3' ); 
                
                ?>
                </div>
                <!-- recents tags-->
                <div class="sidebar-box ftco-animate">
                    <?php
                 dynamic_sidebar( 'zone-widgets-4' ); 
                 
              
                ?>
                
                </div>
            </div>



     
</section>
<!-- .section -->

<section class="ftco-subscribe ftco-section bg-light">
    <div class="overlay">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-md-8 text-wrap text-center heading-section ftco-animate">
                    <h2 class="mb-4"><span>Subcribe to our Newsletter</span></h2>
                    <p>A small river named Duden flows by their place and supplies it with the necessary
                        regelialia. It is a paradisematic country, in which roasted parts of sentences fly
                        into your mouth.</p>
                    <div class="row d-flex justify-content-center mt-4 mb-4">
                        <div class="col-md-8">
                            <form action="#" class="subscribe-form">
                                <div class="form-group d-flex">
                                    <input type="text" class="form-control" placeholder="Enter email address">
                                    <input type="submit" value="Subscribe" class="submit px-3">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<?php 
get_footer(); 
?>