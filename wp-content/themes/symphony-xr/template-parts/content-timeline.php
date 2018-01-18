<div class="timeline">
    <div class="timeline-heading">
        <div class="timeline-heading-title">
            <h2>Project Timeline</h2>
        </div>
        <div class="timeline-heading-cta">
            <a class="button" href="https://symphonyxr.wordpress.com/" target="_blank">Weekly Journals</a>
        </div>
    </div>
    <?php if ( have_rows('timeline_entry', 11) ) : ?>
    <div class="timeline-bar">
        <?php while ( have_rows('timeline_entry', 11)) : the_row(); ?>
        <div class="timeline-bar-item <?php if( get_sub_field('completed', 11) ): ?>tl-complete<?php endif; ?>">
            <p>
                <span><?php the_sub_field('month', 11); ?></span>
                <?php the_sub_field('event', 11); ?>
            </p>
        </div>
        <?php endwhile; ?>
    </div>
    <?php endif; ?>
</div>