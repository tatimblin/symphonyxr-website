<?php if ( !empty(get_field('cta_callout')) ) : ?>
<div class="cta">
    <div class="cta-callout">
        <h2><?php the_field('cta_callout'); ?></h2>
    </div>
    <div class="cta-action">
        <a href="<?php the_field('cta_link'); ?>" class="button" target="_blank"><?php the_field('cta_action'); ?></a>
    </div>
</div>
<?php endif; ?>