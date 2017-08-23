<?php
/**
*   Sidebar Template
*
*   @file                   sidebar.php
*   @package                Black Gold
*   @author                 Lewis Briffa
*   @copyright              2016 L.A.B
*   @license                license.txt
*   @version                Release 1.0
*/
?>

<div class="blackgold-clear-right"></div>

<div class="col-md-4">
	<?php if ( is_active_sidebar( 'home_sidebar' ) ) : ?>
   <aside>
      <?php dynamic_sidebar( 'home_sidebar' ); ?>
   </aside>
   <?php endif; ?>
</div>
