<?php
/**
*   Search Template
*
*   @file                   search.php
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
      <?php if ( have_posts() ) : ?>
        <h1 class="blackgold-page-title"><?php _e( 'Search results for', 'black-gold' ); ?> 
          <?php if( '' == get_search_query() ) : ?>
            <?php _e( ' all Posts', 'black-gold' ); ?>
          <?php else : ?>
            <?php the_search_query(); ?>
          <?php endif; ?>
        </h1>
        
        <?php get_template_part( 'templates/template', 'blog' ); ?>

      <?php else : ?>
        <h1 class="blackgold-page-title">
          <?php _e( 'No Search results found for ', 'black-gold' ); ?> 
          <?php the_search_query(); ?>
        </h1>
        <p><?php _e( 'There are currently no posts with that search term. ', 'black-gold' ); ?></p>
      <?php endif; ?>
   </main>
</div>
<!-- End of Main -->

<!-- Right Sidebar -->
<?php if( $sidebar_location == 'right' ) : get_sidebar( 'right' ); endif; ?>
</div>
</div>
</div>
<?php get_footer(); ?>