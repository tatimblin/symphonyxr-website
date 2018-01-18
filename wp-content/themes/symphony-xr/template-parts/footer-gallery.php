<?php if ( have_rows('gallery') ) : ?>
    <div class="gallery">
        <?php while ( have_rows('gallery')) : the_row(); ?>
            <div class="gallery-cell" style="background-image: url('<?php the_sub_field('image'); ?>');"></div>
        <?php endwhile; ?>
    </div>
<?php endif; ?>