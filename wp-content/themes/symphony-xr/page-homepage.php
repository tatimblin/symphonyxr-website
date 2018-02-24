<?php
/**
 * Template Name: Homepage Template
 *
 * @package starter_theme
 */

get_header(); ?>

	<div id="main" class="site-main">
    
    <?php get_template_part( 'template-parts/content', 'hero' ); ?>
            
	<?php get_template_part( 'template-parts/content', 'about' ); ?>
	
	<?php get_template_part( 'template-parts/content', 'timeline' ); ?>
	
	<div class="home-post">
        <?php
            $post_objects = get_field('feat_post');

            if( $post_objects ):
        ?>
	    <div class="home-post-img">
            <?php $count = 0; ?>
	        <?php foreach( $post_objects as $post):
                setup_postdata($post); ?>
                
	            <?php
                    if ($count == 0) {
                        ?>
                            <img src="<?php echo get_the_post_thumbnail_url(); ?>" class="wp-post-image-in">
                        <?php
                    } else {
                        echo the_post_thumbnail('large'); 
                    }
                    $count++;
                ?>
	            
            <?php endforeach; ?>
	    </div>
	    <?php wp_reset_postdata(); ?>
        <?php endif; ?>
        
	    <div class="home-post-content">
	        <div class="home-post-content-title">
	            <h1>Inside The Team</h1>
	            <h6 class="post-head">Latest Podcast</h6>
	            <?php
                    $new_loop = new WP_Query( array(
                    'post_type' => 'podcast',
                        'posts_per_page' => 1 // put number of posts that you'd like to display
                    ) );
                ?>
                <?php if ( $new_loop->have_posts() ) : ?>
                    <div class="home-post-item">
                        <?php while ( $new_loop->have_posts() ) : $new_loop->the_post(); ?>
                            <h6><?php the_title(); ?></h6>
                            <div class="home-post-item-meta">
                                <p><?php echo get_the_date(); ?></p>
                            </div>
                        <?php endwhile;?>
                    </div>
                <?php else: ?>
                <?php endif; ?>
                <?php wp_reset_query(); ?>
	        </div>
	        <div class="home-post-content-prev">
	            <h6 class="post-head">Featured Posts</h6>
	            <?php
	            $post_objects = get_field('feat_post');

                if( $post_objects ):
                    foreach( $post_objects as $post): // variable must be called $post (IMPORTANT) ?>
                        <?php setup_postdata($post); ?>
                        <div class="home-post-item">
                            <a href="<?php the_permalink(); ?>">
                            <h6><?php the_title(); ?></h6>
                            </a>
                            <div class="home-post-item-meta">
                                <div><p>
                                    <?php the_author(); ?>
                                </p></div>
                                <div><p>
                                    <?php echo get_the_date(); ?>
                                </p></div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                    
                    <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
                <?php endif; ?>
	        </div>
	    </div>
	</div>

	</div><!-- #main -->

<?php
get_footer();
