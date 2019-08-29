<?php
// Get Author Data
$author             = get_the_author();
$author_description = get_the_author_meta( 'description' );
$author_url         = esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) );
$author_avatar      = get_avatar( get_the_author_meta( 'user_email' ), apply_filters( 'wpex_author_bio_avatar_size', 75 ) );

// Only display if author has a description
if ( $author_description ) : ?>

<?php if ( $author_avatar ) { ?>
<div class="bio mr-5">
    <a href="<?php echo esc_url( $author_url ); ?>" rel="author" class="img-fluid mb-4">
        <?php echo $author_avatar; ?>
    </a>
</div><!-- .author-avatar -->
<?php } ?>
<div class="desc">
    <h3 class="heading"><span>
            <?php printf( esc_html( $author ) ); ?></span></h3>
    <p><?php echo wp_kses_post( $author_description ); ?></p>
    <p>
</div><!-- .author-description -->



<?php endif; ?>