<?php
/**
 * Template part for displaying blog content in page-process.php.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package starter_theme
 */

?>

<div class="process-blog">
    <?php 
    
    $args = array(
        'post_type' => array( 'post', 'podcast', ), 
    );
    $query = new WP_Query($args);
    while($query -> have_posts()) : $query -> the_post();

    if ( 'post' == get_post_type() ) {
    ?>
        <a href="<?php the_permalink(); ?>">
        <div class="process-blog-item process-blog-post">
            <div class="process-blog-item-img">
                <?php the_post_thumbnail(); ?>
            </div>
            <div>
                <h2><span><?php the_title(); ?></span></h2>
                <?php the_excerpt(); ?>
            </div>
        </div>
        </a>
    <?php
    } else {
    ?>
        <a href="<?php the_permalink(); ?>">
        <div class="process-blog-item process-blog-podcast">
        <h2><?php the_title(); ?></h2>
        <?php the_excerpt(); ?>

        </div>
        </a>

    <?php } endwhile; 
    wp_reset_postdata(); ?>

</div>