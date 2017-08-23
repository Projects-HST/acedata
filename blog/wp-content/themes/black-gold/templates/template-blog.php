<?php
/**
*   Blog Template
*
*   @file                   template-blog.php
*   @package                Black Gold
*   @author                 Lewis Briffa
*   @copyright              2016 L.A.B
*   @license                license.txt
*   @version                Release 1.0
*/
?>

<?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>

    <!-- Article -->
    <article <?php post_class( 'blackgold-post' ); ?>>
        
        <?php get_template_part( 'templates/template', 'content' ); ?>

    </article>
    <!-- End of Article -->

<?php endwhile; ?>

<?php get_template_part( 'templates/template', 'pagination' ); ?>

<?php else : ?>
    <h1><?php _e( 'No Current Posts', 'black-gold' ); ?></h1>
    <p><?php _e( 'There are currently no posts', 'black-gold' ); ?></p>
<?php endif; ?>