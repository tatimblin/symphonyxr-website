<?php
/**
 * Template part for displaying a blog post.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package starter_theme
 */

?>

<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

    <div class="single single-<?php get_post_type(); ?>">
        <div class="single-header">
            <div class="single-header-hero" style="background-image: url('<?php echo the_post_thumbnail_url('large'); ?>');"></div>
        </div>
        <div class="single-title">
            <?php the_title( '<h1 class="single-title-content">', '</h1>' ); ?>
        </div>
        
        <?php // podcast audio
            if ( is_singular( 'podcast' ) ) {
        ?>
            <div id="waveform"></div>
            <div id="audio-file"><?php the_field('podcast'); ?></div>
        <?php 
            }
        ?>
        
        <div class="single-body">
            <?php the_content(); ?>
        </div>
        
        <?php 
            get_template_part( 'template-parts/content', 'single-char' ); 
            get_template_part( 'template-parts/footer', 'gallery' ); 
        ?>
        
        <div class="single-foot">
        <?php
        global $post;
        $orig_post = $post;
        $tags = wp_get_post_tags($post->ID);

        if ($tags):
            $tag_ids = array();
            foreach($tags as $individual_tag) $tag_ids[] = $individual_tag->term_id;
            $args=array(
                'tag__in' => $tag_ids,
                'post__not_in' => array($post->ID),
                'posts_per_page'=>1, // Number of related posts to display.
                'ignore_sticky_posts'=>1,
                'orderby'=>'rand'
            );

            $my_query = new WP_Query( $args );
            
            if( $my_query->have_posts() ) : 
            while( $my_query->have_posts() ) : $my_query->the_post();
            ?>
                <a href="<?php the_permalink() ?>">
                <h4>UP NEXT</h4>
                <h2><?php the_title(); ?></h2>
                <svg id="single-foot-downarrow" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 59.414 59.414"><path d="M58 14.146L29.707 42.439 1.414 14.146 0 15.561l29.707 29.707 29.707-29.707z"/></svg>
                </a>
            <?php 
            endwhile;
            endif;
        else: 
            
        endif;
        $post = $orig_post;
        wp_reset_query();
        ?>
        </div>
        
    </div>
	
</div><!-- #post-## -->