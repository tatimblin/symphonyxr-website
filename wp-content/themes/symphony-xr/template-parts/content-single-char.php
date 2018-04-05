<?php
/**
 * Template part for displaying those present in a podcast.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package starter_theme
 */

?>

<div class="single-body">
    <h2>Featuring</h2>
    
    <div class="feat">
    
    <?php if( have_rows('author') ): 
    
        while ( have_rows('author') ) : the_row();
        
            if( get_row_layout() == 'teammate' ):
    
                $posts = get_sub_field('host');
    
                if( $posts ):
                    
                    foreach( $posts as $post):
    
                        setup_postdata($post);
                        ?>
                        
                        <div class="feat-item">
                            <a href="/team">
                                <div class="feat-item-img" style="background-image: url('<?php echo get_the_post_thumbnail_url(); ?>');"></div>
                                <p><?php the_title(); ?></p>
                            </a>
                        </div>
                        
                        <?php
                    endforeach;
    
                    wp_reset_postdata();
    
                endif;
    
            elseif( get_row_layout() == 'guest' ):
            ?>
                <div class="feat-item">
                    <a href="<?php the_sub_field('link'); ?>" target="_blank">
                        <div class="feat-item-img" style="background-image: url('<?php the_sub_field('profile_picture'); ?>');"></div>
                        <p><?php the_sub_field('guest_name'); ?></p>
                    </a>
                </div>
            <?php
            endif;
        
        endwhile;
    
    else :
    
    endif; ?>
    
    </div>
    
</div>