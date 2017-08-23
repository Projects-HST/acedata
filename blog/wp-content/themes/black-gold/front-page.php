<?php
/**
*   Front Page Template
*
*   @file                   front-page.php
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
        <!-- Blog Page -->
        <?php if( is_front_page() && is_home() ) : ?>
            <?php get_template_part( 'templates/template', 'blog' ); ?>
        <!-- Static Page -->
        <?php else : ?>
            <?php get_template_part( 'templates/template', 'page' ); ?>
        <?php endif; ?>
   </main>
</div>
<!-- End of Main -->

<!-- Right Sidebar -->
<?php if( $sidebar_location == 'right' ) : get_sidebar( 'right' ); endif; ?>
</div>
</div>
<?php get_footer(); ?>