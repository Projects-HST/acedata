<?php
/**
 *   Header Template
 *
 *   @file                   header.php
 *   @package                Black Gold
 *   @author                 Lewis Briffa
 *   @copyright              2016 L.A.B
 *   @license                license.txt
 *   @version                Release 1.1
 */
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
    <?php
        global $sidebar_location;
        $sidebar_location = strtolower(get_theme_mod('home_sidebar_position', 0));
        if ($sidebar_location == 0) {
            $sidebar_location = 'left';
        } else {
            $sidebar_location = 'right';
        }
    ?>

    <?php wp_head(); ?>

</head>
<body <?php body_class(); ?>>
    <!-- Logo & Navigation -->
    <?php get_template_part('templates/template', 'navigation'); ?>

    <!-- Header -->
    <header>
    <div class="row">
     <div class="container">
        <div class="col-lg-8">
            <div class="table-cell-display">

                    <?php if ( get_theme_mod( 'header_box_visible', true ) ) : ?>
                    <div class="blackgold-heading-box">                
                        <div class="container">
                            <h1><?php echo esc_html( get_theme_mod( 'header_title', __( 'Sam Powell', 'black-gold' ) ) ); ?></h1>
                            <p class="blackgold-sub-heading"><?php bloginfo('description'); ?></p>
                        </div>
                    </div>
                    <?php endif; ?>
            
                </div>
             </div>
          </div>
        </div>
    </div>
        
    </header>
    <!-- End of Header -->

    <div class="row">
        <div class="container">