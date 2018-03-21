<?php
/**
 * Template Name: Product Template
 *
 * @package starter_theme
 */

get_header(); ?>

	<div id="main" class="site-main">
    
    <?php get_template_part( 'template-parts/content', 'hero' ); ?>
           
    <?php get_template_part( 'template-parts/content', 'about' ); ?>
           
    <div class="goal">
        <div class="goal-item goal-media">
            <?php
	            if( have_rows('goal') ):
                    while ( have_rows('goal') ) : the_row(); ?>
                        <div class="goal-media-cell" style="background-image: url('<?php the_sub_field('goal_image'); ?>');"></div>
                        <?php endwhile; ?>
                <?php endif; ?>
        </div>
        <div class="goal-item goal-text">
            <?php
	            if( have_rows('goal') ):
                    while ( have_rows('goal') ) : the_row(); ?>
                        <div class="goal-text-cell">
                            <h3><?php the_sub_field('goal_title'); ?></h3>
                            <p><?php the_sub_field('goal_desc'); ?></p>
                        </div>
                        <?php endwhile; ?>
                <?php endif; ?>
        </div>
        <div class="goal-btn"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 42 42"><path d="M36.068 20.176l-29-20A1 1 0 1 0 5.5.999v40a1 1 0 0 0 1.568.823l29-20a.999.999 0 0 0 0-1.646z" fill="#f2f2f2"/></svg></div>
    </div>
            
		<?php
		while ( have_posts() ) : the_post();
			get_template_part( 'template-parts/content', 'page' );
		endwhile; // End of the loop.
		?>
		
    <div class="tech">
        <div class="tech-head">
            <h2>Leveraging The Industries Leading Technology</h2>
        </div>
        <div class="tech-list">
            <?php if( have_rows('tech') ):
                while ( have_rows('tech') ) : the_row();
            ?>
            <div class="tech-list-item">
                <div class="tech-list-item-img" style="background-image: url('<?php the_sub_field('tech_img'); ?>');"></div>
                <h4><?php the_sub_field('tech_name'); ?></h4>
                <p><?php the_sub_field('tech_desc'); ?></p>
            </div>
            <?php endwhile;
                endif;
            ?>
        </div>
    </div>

	</div><!-- #main -->

<?php
get_footer();