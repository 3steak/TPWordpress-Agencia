<article class="news">
    <a href="<?php the_permalink() ?>" title="<?= esc_attr(get_the_title()) ?>" class="news__image">
        <?php if (has_post_thumbnail()) : ?>
            <?php the_post_thumbnail() ?>

        <?php else : ?>
            <img width="250px" height="250px" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mPcXg8AAfMBOOg8T0oAAAAASUVORK5CYII=">
    </a>
<?php endif; ?>
<div class="news__body">
    <header class="news__header">
        <?php $categories = get_the_category();
        if (!empty($categories)) { ?>
            <a class="news__tag" href="<?php get_term_link($categories[0]) ?>"><?= $categories[0]->name ?></a>
        <?php
        }
        ?>
        <a class="news__title" href="<?php the_permalink() ?>"><?php the_title() ?></a>
        <div class="news__date"><?= sprintf(__('Published on %s', 'agencia'), get_the_date()) ?></div>
    </header>
    <div class="news__content">
        <?php the_excerpt() ?>
    </div>
    <a href="<?php the_permalink() ?>" class="news__action">
        Lire la suite
        <?= agencia_icon('arrow') ?>
    </a>
</div>
</article>