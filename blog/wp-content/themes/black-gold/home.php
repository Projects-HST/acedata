<?php
/**
*   Home Template
*
*   @file                   home.php
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
      <?php get_template_part( 'templates/template', 'blog' ); ?>
   </main>
</div>

<!-- Right Sidebar -->
<?php if( $sidebar_location == 'right' ) : get_sidebar( 'right' ); endif; ?>
</div>
</div>
<!-- Footer -->
<?php get_footer(); ?>