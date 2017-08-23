<?php
/**
*   Search Form Template
*
*   @file                   searchform.php
*   @package                Black Gold
*   @author                 Lewis Briffa
*   @copyright              2016 L.A.B
*   @license                license.txt
*   @version                Release 1.1
*/
?>

<form role="search" method="get" action="<?php echo esc_url( home_url('/') ); ?>" id="searchform" class="search-form">
    <input type="text" name="s" value="<?php the_search_query(); ?>" />
    <button type="submit"><i class="fa fa-search"></i></button>
</form>