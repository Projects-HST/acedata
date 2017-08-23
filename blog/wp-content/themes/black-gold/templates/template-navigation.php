<?php
/**
*   Navigation Template
*
*   @file                   template-navigation.php
*   @package                Black Gold
*   @author                 Lewis Briffa
*   @copyright              2016 L.A.B
*   @license                license.txt
*   @version                Release 1.1
*/
?>

<nav class="navbar navbar-default">
    <div class="container">
        <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
            <span class="sr-only"><?php _e( 'Toggle navigation', 'black-gold' ); ?></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="blackgold-logo navbar-brand" href="<?php echo esc_url(home_url()); ?>">
            <?php bloginfo( 'name' ); ?>
        </a>
        </div>
            <?php
                $args = array(
                    'theme_location' => 'main_menu',
                    'depth' => 2,
                    'container' => 'div',
                    'container_class' => 'collapse navbar-collapse',
                    'container_id' => 'bs-example-navbar-collapse-1',
                    'menu_class' => 'nav navbar-nav navbar-right',
                    'fallback_cb' => 'wp_bootstrap_navwalker::fallback',
                    'walker' => new wp_bootstrap_navwalker() 
                );
            ?>
            <?php wp_nav_menu( $args ); ?>
    </div>
</nav>