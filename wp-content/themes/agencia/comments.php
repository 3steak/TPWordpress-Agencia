<?php
$count = get_comments_number(); ?>

<div class="comments">
    <div class="comments__title">
        <?php if ($count > 0) : ?>
            <?= sprintf(_n('%d Commentaire', '% Commentaires', $count), $count) ?>
        <?php else : ?>
            <?= __('Leave a reply', 'agencia'); ?>
        <?php endif; ?>
    </div>

    <?php wp_list_comments(['style' => 'div']) ?>
</div>