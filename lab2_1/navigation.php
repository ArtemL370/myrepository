<?php

$item_1 = [
    'link' => '#',
    'name' => 'Nature',
];

$item_2 = [
    'link' => '#',
    'name' => 'Photography',
];

$item_3 = [
    'link' => '#',
    'name' => 'Relaxation',
];

$item_4 = [
    'link' => '#',
    'name' => 'Vacationy',
];

$item_5 = [
    'link' => '#',
    'name' => 'Travel',
];

$item_6 = [
    'link' => '#',
    'name' => 'Adventure',
];

?>

<div class="categories">              
    <nav class="categories__menu">
        <ul class="categories__menu-list container">
            <li class="categories__menu-item"><a href="<?= $item_1['link'] ?>" class="categories__menu-link"><?= $item_1['name'] ?></a></li>
            <li class="categories__menu-item"><a href="<?= $item_1['link'] ?>" class="categories__menu-link"><?= $item_2['name'] ?></a></li>
            <li class="categories__menu-item"><a href="<?= $item_1['link'] ?>" class="categories__menu-link"><?= $item_3['name'] ?></a></li>
            <li class="categories__menu-item"><a href="<?= $item_1['link'] ?>" class="categories__menu-link"><?= $item_4['name'] ?></a></li>
            <li class="categories__menu-item"><a href="<?= $item_1['link'] ?>" class="categories__menu-link"><?= $item_5['name'] ?></a></li>
            <li class="categories__menu-item"><a href="<?= $item_1['link'] ?>" class="categories__menu-link"><?= $item_6['name'] ?></a></li>
        </ul>
    </nav>
</div>