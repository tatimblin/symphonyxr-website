<?php
/**
 * Template Name: Team Template
 *
 * @package starter_theme
 */

get_header(); ?>

	<div id="main" class="site-main">
    
    <?php get_template_part( 'template-parts/content', 'hero' ); ?>
           
    <div class="team-org">
        <div class="team-org-main">
            <div class="team-org-main-copy">
                <h3>Chelsea Komschlies, Composer</h3>
                <p>Chelsea Komschlies draws heavily on deep, abstract visual and conceptual associations in her compositional process. She focuses on finding unexpected textures and techniques to sonically evoke the original complex idea, resulting in a musical sound world that is both adventurous and immediately affective.</p>
                <div class="button">See Work</div>
            </div>
            <div class="team-org-main-bg"></div>
        </div>
        <div class="team-org-group">
            <?php
            if( have_rows('organization') ):
                while ( have_rows('organization') ) : the_row(); ?>
                <div class="team-org-group-item" style="background-image:url(<?php the_sub_field('org_image'); ?>);">
                    <h3><?php the_sub_field('org_title'); ?></h3>
                    <p><?php the_sub_field('org_desc'); ?></p>
                    <a href="<?php the_sub_field('org_url'); ?>"><?php the_sub_field('org_pretty_url'); ?></a>
                </div>
                <?php endwhile; ?>
            <?php endif; ?>
        </div>
    </div>
            
		<?php
		while ( have_posts() ) : the_post();
			get_template_part( 'template-parts/content', 'page' );
		endwhile; // End of the loop.
		?>
		
    <?php

    // Define the WP query
    $args = array(
        'post_type' => 'teammate',//Swap in your CPT
        'posts_per_page' => -1,
    );

    $query = new WP_Query( $args );

    if ($query->have_posts()) {
    
    ?>
		
    <div class="team">
        
        <?php // Start the Loop
        while ( $query->have_posts() ) : $query->the_post(); ?>
        
        <div class="team-mem">
            <div class="team-mem-avi" style="background-image: url('<?php echo wp_get_attachment_url( get_post_thumbnail_id($post->ID)); ?>');">
                <div class="team-mem-avi-soc">
                    <?php
                    if( have_rows('social') ):
                        while ( have_rows('social') ) : the_row(); ?>
                            <a href="<?php
                                if( get_sub_field('type') == 'email' ):
                                    ?>mailto:<?php the_sub_field('email');
                                else:
                                    the_sub_field('link');
                                endif;
                            ?>" target="_blank"><div class="icon-social icon-<?php the_sub_field('type'); ?>"></div></a>
                        <?php endwhile; ?>
                    <?php endif; ?>
                </div>
            </div>
            <div class="team-mem-copy">
                <h5><?php the_title(); ?></h5>
                <h6><?php the_field('major'); ?></h6>
                <p><?php the_field('contribution'); ?></p>
            </div>
        </div>
        
        <?php endwhile; ?>
    </div>
    
    <?php
    }

    // Reset the WP Query
    wp_reset_postdata();

    ?>

	</div><!-- #main -->

<?php
get_footer();
