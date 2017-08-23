<?php
/**
*   Pagination Template
*
*   @file                   template-pagination.php
*   @package                Black Gold
*   @author                 Lewis Briffa
*   @copyright              2016 L.A.B
*   @license                license.txt
*   @version                Release 1.0
*/
?>

<div class="blackgold-clear-right"></div>
<?php
    the_posts_pagination( array(
        'mid_size' => 2,
        'prev_text' => __( 'Back', 'black-gold' ),
        'next_text' => __( 'Next', 'black-gold' )
    ) );
?>
