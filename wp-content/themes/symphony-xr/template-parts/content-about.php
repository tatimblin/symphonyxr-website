<div class="about">
    <div class="about-heading">
        <h2><?php echo get_field('about_heading', 9); ?></h2>
    </div>
    <div class="about-inner">
       <div class="about-tag">
            <?php if( have_rows('about_tags', 9)): ?>
            <ul>
                <?php while ( have_rows('about_tags', 9)) : the_row(); ?>
                    <li>
                        <?php the_sub_field('tag', 9); ?>
                    </li>
                <?php endwhile; ?>
            </ul>
            <?php endif; ?>
        </div>
        <div class="about-body">
            <?php echo get_field('about_body', 9); ?>
        </div>
    </div>
</div>