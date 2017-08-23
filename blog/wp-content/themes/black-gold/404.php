<?php
/**
*   404 Error Template
*
*   @file                   404.php
*   @package                Black Gold
*   @author                 Lewis Briffa
*   @copyright              2016 L.A.B
*   @license                license.txt
*   @version                Release 1.1
*/
?>

<?php get_header(); ?>
<!-- Main -->
<?php if ( ! is_active_sidebar( 'home_sidebar' ) ) : ?>
   <div class="col-md-12 full-width">
<?php else: ?>
   <div class="col-md-7">
<?php endif; ?>
   <main>
      <h1><?php _e( '404. Page Not Found', 'black-gold' ); ?></h1>
      <p><?php _e( 'The requested page could not be found.', 'black-gold' ); ?></p>
      <hr>
      <!-- Search ? -->
      <h3><?php _e( 'Would you like to search for it?', 'black-gold' ); ?></h3>
      <?php get_search_form(); ?>
      <hr>
      <!-- Page Index -->
      <h3><?php _e( 'Pages Index', 'black-gold' ); ?></h3>
      <?php wp_list_pages( array( 'title_li' => '' ) ); ?>
   </main>
</div>
<!-- End of Main -->
<?php get_sidebar(); ?>
</div>
</div>
<?php get_footer(); ?>