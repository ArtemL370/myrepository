                        <div class="featuredpost__column">
                            <a class="featuredpost__item" href="<?= $post['link'] ?>">
                                <img class="featuredpost__image" src="<?= $post['img_link'] ?>" alt="">
                                <?php if ($post['label']): ?><div class="featuredpost__label"><h2 class="featuredpost__label-item">ADVENTURE</h2></div><?php endif; ?>
                                <div class="featuredpost__content">
                                    <div class="featuredpost__content-title"><?= $post['title'] ?></div>
                                    <div class="featuredpost__content-subtitle"><?= $post['subtitle'] ?></div>
                                    <div class="featuredpost__content-description">
                                        <div class="description__autor">
                                            <div class="autor__icon"><img src="<?= $post['author_icon'] ?>" alt=""></div>
                                            <?= $post['author'] ?>
                                        </div>
                                        <div class="description__date"><?= $post['date'] ?></div>
                                    </div>                                    
                                </div>
                            </a>
                        </div>