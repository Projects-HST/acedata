<?php
/**
*   Page Template
*
*   @file                   template-page.php
*   @package                Black Gold
*   @author                 Lewis Briffa
*   @copyright              2016 L.A.B
*   @license                license.txt
*   @version                Release 1.0
*/
?>

<?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>
    <h1><?php the_title(); ?></h1>

    <?php the_content(); ?>
    
    <?php wp_link_pages(); ?>

<?php endwhile; ?>
    <?php get_template_part( 'templates/template', 'pagination' ); ?>
<?php endif; ?>
