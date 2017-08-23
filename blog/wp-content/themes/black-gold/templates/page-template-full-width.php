<?php
/**
*   Full Width Page Template
*
*   Template Name: Full Width Page
*
*   @file                   page-template-full-width.php
*   @package                Black Gold
*   @author                 Lewis Briffa
*   @copyright              2016 L.A.B
*   @license                license.txt
*   @version                Release 1.0
*/
?>
<?php get_header(); ?>
<!-- Main -->
<div class="col-md-12">
   <main>
      <?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>
        <h1><?php the_title(); ?></h1>
        <?php the_content(); ?>
      <?php endwhile; endif; ?>
   </main>
</div>
<!-- End of Main -->
<div class="blackgold-clear-right"></div>
</div>
</div>
<?php get_footer(); ?>
</body>
</html>