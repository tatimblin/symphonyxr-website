<?php
    $experience_page = get_page_by_title( 'Experience' );
    $process_page = get_page_by_title( 'Process' );
    $product_page = get_page_by_title( 'Product' );
?> 

<div class="destination">
    <?php if ( !is_page_template( 'page-experience.php') ) { ?>
        <div class="destination-item" style="background-image: url('<?php echo get_field('hero_image', $experience_page); ?>');">
            <a href="<?php echo get_permalink($experience_page); ?>">
                <div class="destination-item-copy">
                    <div class="destination-item-copy-inner">
                        <p><?php echo get_field('hero_title_meta', $experience_page); ?></p>
                        <h2><?php echo get_the_title( $experience_page ); ?></h2>
                    </div>
                </div>
            </a>
        </div>
    <?php } if ( !is_page_template( 'page-process.php') ) { ?>
        <div class="destination-item" style="background-image: url('<?php echo get_field('hero_image', $process_page); ?>');">
            <a href="<?php echo get_permalink($process_page); ?>">
                <div class="destination-item-copy">
                    <div class="destination-item-copy-inner">
                        <p><?php echo get_field('hero_title_meta', $process_page); ?></p>
                        <h2><?php echo get_the_title( $process_page ); ?></h2>
                    </div>
                </div>
            </a>
        </div>
    <?php } if ( !is_page_template( 'page-product.php') ) { ?>
        <div class="destination-item" style="background-image: url('<?php echo get_field('hero_image', $product_page); ?>');">
            <a href="<?php echo get_permalink($product_page); ?>">
                <div class="destination-item-copy">
                    <div class="destination-item-copy-inner">
                        <p><?php echo get_field('hero_title_meta', $product_page); ?></p>
                        <h2><?php echo get_the_title( $product_page ); ?></h2>
                    </div>
                </div>
            </a>
        </div>
    <?php } ?>
</div>