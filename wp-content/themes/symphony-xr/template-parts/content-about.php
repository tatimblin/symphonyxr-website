<?php $product_page = get_page_by_title( 'Product' ); ?>

<div class="about">
    <div class="about-heading">
        <h2><?php echo get_field('about_heading', $product_page); ?></h2>
    </div>
    <div class="about-inner">
       <div class="about-tag">
            <?php if( have_rows('about_tags', $product_page)): ?>
            <ul>
                <?php while ( have_rows('about_tags', $product_page)) : the_row(); ?>
                    <li>
                        <?php the_sub_field('tag', $product_page); ?>
                    </li>
                <?php endwhile; ?>
            </ul>
            <?php endif; ?>
        </div>
        <div class="about-body">
            <?php echo get_field('about_body', $product_page); ?>
        </div>
    </div>
</div>