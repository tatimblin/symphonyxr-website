<div class="destination">
    <?php if ( !is_page_template( 'page-experience.php') ) { ?>
        <div class="destination-item" style="background-image: url('<?php echo get_field('hero_image', 7); ?>');">
            <a href="<?php echo get_permalink(7); ?>">
                <div class="destination-item-copy">
                    <div class="destination-item-copy-inner">
                        <p><?php echo get_field('hero_title_meta', 7); ?></p>
                        <h2><?php echo get_the_title( 7 ); ?></h2>
                    </div>
                </div>
            </a>
        </div>
    <?php } if ( !is_page_template( 'page-process.php') ) { ?>
        <div class="destination-item" style="background-image: url('<?php echo get_field('hero_image', 11); ?>');">
            <a href="<?php echo get_permalink(11); ?>">
                <div class="destination-item-copy">
                    <div class="destination-item-copy-inner">
                        <p><?php echo get_field('hero_title_meta', 11); ?></p>
                        <h2><?php echo get_the_title( 11 ); ?></h2>
                    </div>
                </div>
            </a>
        </div>
    <?php } if ( !is_page_template( 'page-product.php') ) { ?>
        <div class="destination-item" style="background-image: url('<?php echo get_field('hero_image', 9); ?>');">
            <a href="<?php echo get_permalink(9); ?>">
                <div class="destination-item-copy">
                    <div class="destination-item-copy-inner">
                        <p><?php echo get_field('hero_title_meta', 9); ?></p>
                        <h2><?php echo get_the_title( 9 ); ?></h2>
                    </div>
                </div>
            </a>
        </div>
    <?php } ?>
</div>