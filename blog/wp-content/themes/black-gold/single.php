<?php
/**
*   Single Template
*
*   @file                   single.php
*   @package                Black Gold
*   @author                 Lewis Briffa
*   @copyright              2016 L.A.B
*   @license                license.txt
*   @version                Release 1.2
*/
?>

<?php get_header(); ?>
<?php global $sidebar_location;?>

<!-- Left Sidebar -->
<?php if( $sidebar_location == 'left' ) : get_sidebar( 'left' ); endif; ?>

<!-- Main -->
<?php if ( ! is_active_sidebar( 'home_sidebar' ) ) : ?>
  <div class="col-md-12 full-width">
<?php else: ?>
  <div class="col-md-7">
<?php endif; ?>
   <main>
      <?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>
        <article class="blackgold-post">
            <h1><?php the_title(); ?> </h1>
            <!-- author -->
            <div class="blackgold-post-meta">
                <!-- by -->
                <?php _e ( 'by', 'black-gold' ); ?> <p class="blackgold-author"> <?php the_author_posts_link(); ?></p>
                <!-- date -->
                <p class="blackgold-date" >
                    <!-- on -->
                    <?php _e( 'on', 'black-gold' ); ?>
                    <!-- at -->
                    <?php the_time( get_option( 'date_format' ) ); ?> 
                    <?php _e( 'at', 'black-gold' ); ?> <?php the_time( get_option( 'time_format' ) ); ?></p>
            </div>

            <?php if ( has_post_thumbnail() ) : ?>
                <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( '', 
                        array( 'class' => 'blackgold-post-thumbnail' ) ); ?></a>
            <?php endif; ?>

            <?php the_content(); ?>

            <?php blackgold_wp_link_pages(); ?>

        </article>

      <?php endwhile; ?>
         <hr>
         <div class="blackgold-pagination">
            <?php the_post_navigation(); ?>
         </div>
      <?php endif; ?>
      <hr>
      <?php if( comments_open() || get_comments_number() ) : ?>
        <?php comments_template(); ?>
      <?php endif; ?>
   </main>
</div>
<!-- End of Main -->

<!-- Right Sidebar -->
<?php if( $sidebar_location == 'right' ) : get_sidebar( 'right' ); endif; ?>
</div>
</div>
<?php get_footer(); ?>