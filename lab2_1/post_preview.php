                        <div class="featured-post__column">
                            <a class="featured-post__item" href="/post.php?id=<?= $post['id'] ?>" title="<?= $post['title'] ?>">
                                <img class="featured-post__image" src="<?= $post['img_link'] ?>" alt="">
                                <?php if ($post['label']): ?><div class="featured-post__label"><h2 class="featured-post__label-item">ADVENTURE</h2></div><?php endif; ?>
                                <div class="featured-post__content">
                                    <div class="featured-post__content-title"><?= $post['title'] ?></div>
                                    <div class="featured-post__content-subtitle"><?= $post['subtitle'] ?></div>
                                    <div class="featured-post__content-description">
                                        <div class="description__autor">
                                            <div class="autor__icon"><img src="<?= $post['author_icon'] ?>" alt=""></div>
                                            <?= $post['author'] ?>
                                        </div>
                                        <div class="description__date"><?= $post['date'] ?></div>
                                    </div>                                    
                                </div>
                            </a>
                            <a title='<?= $post['title'] ?>' href='/post?id=<?= $post['id'] ?>'><?= $post['subtitle'] ?></a>
                        </div>