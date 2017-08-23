<?php
/**
*   Content Template
*
*   @file                   template-content.php
*   @package                Black Gold
*   @author                 Lewis Briffa
*   @copyright              2016 L.A.B
*   @license                license.txt
*   @version                Release 1.1
*/
?>
<!-- Display Pin Icon for Sticky Posts -->
<?php if( is_sticky( get_the_ID() ) ) : ?>
    <i class="fa fa-thumb-tack pull-right" aria-hidden="true"></i>
<?php endif; ?>

<h1><?php the_title(); ?> </h1>
<!-- author -->
<div class="blackgold-post-meta">
    <!-- by -->
    <?php _e( 'by', 'black-gold' ); ?> 
        <p class="blackgold-author"><?php the_author_posts_link(); ?></p>
    
    <!-- date -->
    <p class="blackgold-date" >
        <!-- on -->
            <?php _e( 'on', 'black-gold' ); ?> 
            <?php the_time( get_option('date_format') ); ?>
        <!-- at --> 
            <?php _e( 'at', 'black-gold' ); ?> 
            <?php the_time( get_option('time_format') ); ?></p>
</div>

<!-- Taxonomies -->
<?php if( has_category() && has_tag() ) : ?>
    <div class="taxonomy-container">
        <!-- Categories -->
        <?php if( has_category() ) : ?>
        <div class="category-container">
            <span class="category-label"><?php _e( 'Category', 'black-gold' ); ?> &raquo;</span><?php the_category( '' ); ?>
        </div>
        <?php endif; ?>
        <!-- Tags -->
        <?php if( has_tag() ) : ?>
            <div class="tag-container">
                <span class="tags-label"><?php _e( 'Tags', 'black-gold' ); ?> &raquo;</span><?php echo get_the_tag_list( '<div class="blackgold-tags">', '', '</div>') ?>
            </div>
        <?php endif; ?>
    </div>
<?php endif; ?>
<!-- End of Taxonomies -->

<!-- Post Thumbnail -->
<?php if ( has_post_thumbnail() ) : ?>
    <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( '', 
            array( 'class' => 'blackgold-post-thumbnail' ) ); ?></a>
<?php endif; ?>

<?php the_excerpt(); ?>

<!-- Read More -->
<a href="<?php the_permalink(); ?>" 
    class="btn-link blackgold-read-more blackgold-btn-dark">
    <?php _e( 'Read More', 'black-gold' ); ?>
</a>
<div class="blackgold-clear-right"></div>