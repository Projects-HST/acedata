<?php
/**
*   Footer Template
*
*   @file                   footer.php
*   @package                Black Gold
*   @author                 Lewis Briffa
*   @copyright              2016 L.A.B
*   @license                license.txt
*   @version                Release 1.1
*/
?>

<footer>
   <div class="row">
      <div class="container">
        <?php if ( is_active_sidebar( 'footer_sidebar' ) ) : ?>
            <?php dynamic_sidebar( 'footer_sidebar' ); ?>
        <?php endif; ?>
      </div>
   </div>
</footer>
<?php wp_footer(); ?>
</body>
</html>
