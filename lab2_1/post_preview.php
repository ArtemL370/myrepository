<div class="<?= $post['block_element'] ?>__column">
    <a class="<?= $post['block_element'] ?>__item" href="/post.php?id=<?= $post['id'] ?>" title="<?= $post['title'] ?>">
        <img class="<?= $post['block_element'] ?>__image" src="<?= $post['img_link'] ?>" alt="">
         <?php if ($post['label']): ?><div class="featured-post__label"><h2 class="featured-post__label-item">ADVENTURE</h2></div><?php endif; ?>
        <div class="<?= $post['block_element'] ?>__content">
            <div class="<?= $post['block_element'] ?>__content-title"><?= $post['title'] ?></div>
            <div class="<?= $post['block_element'] ?>__content-subtitle"><?= $post['subtitle'] ?></div>                                    
        </div>
        <div class="<?= $post['block_element'] ?>__description">
            <div class="<?= $post['block_element'] ?>__description-autor">
                <div class="autor__icon"><img src="<?= $post['author_icon'] ?>" alt=""></div>
                <?= $post['author'] ?>
            </div>
            <div class="<?= $post['block_element'] ?>__description-date"><?= $post['date'] ?></div>
        </div>
    </a>
</div>