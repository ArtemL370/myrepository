<div class="<?= $blockName ?>__column">
    <a class="<?= $blockName ?>__item" href="/post?id=<?= $post['id'] ?>" title="<?= $post['title'] ?>">
        <img class="<?= $blockName ?>__image" src="<?= $post['img_src'] ?>" alt="<?= $post['img_alt'] ?>">
         <?php if ($post['label']): ?><div class="featured-post__label"><h2 class="featured-post__label-item">ADVENTURE</h2></div><?php endif; ?>
        <div class="<?= $blockName ?>__content">
            <div class="<?= $blockName ?>__content-title"><?= $post['title'] ?></div>
            <div class="<?= $blockName ?>__content-subtitle"><?= $post['subtitle'] ?></div>                                    
        </div>
        <div class="<?= $blockName ?>__description">
            <div class="<?= $blockName ?>__description-autor">
                <div class="autor__icon"><img src="<?= $post['author_img'] ?>" alt="<?= $post['author_img_alt'] ?>"></div>
                <?= $post['author'] ?>
            </div>
            <div class="<?= $blockName ?>__description-date"><?= $publishDay ?></div>
        </div>
    </a>
</div>