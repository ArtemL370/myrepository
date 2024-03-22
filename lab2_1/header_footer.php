<?php
$keys = [
    'logo' => 'Escape.',
    'link' => '/home',
];
$item_1 = [
    'link' => '/home',
    'name' => 'HOME',
];

$item_2 = [
    'link' => '#',
    'name' => 'CATEGORIES',
];

$item_3 = [
    'link' => '#',
    'name' => 'ABOUT',
];

$item_4 = [
    'link' => '#',
    'name' => 'CONTACT',
];
?>

<div class="<?= $post['block_element'] ?> container">
    <a class="<?= $post['block_element'] ?>__logo logo" href="<?= $keys['link'] ?>"><?= $keys['logo'] ?></a>                
    <nav class="<?= $post['block_element'] ?>__menu">
        <ul class="<?= $post['block_element'] ?>__menu-list list">
            <li class="<?= $post['block_element'] ?>__menu-item"><a href="<?= $item_1['link'] ?>" class="<?= $post['block_element'] ?>__menu-link link"><?= $item_1['name'] ?></a></li>
            <li class="<?= $post['block_element'] ?>__menu-item"><a href="<?= $item_2['link'] ?>" class="<?= $post['block_element'] ?>__menu-link link"><?= $item_2['name'] ?></a></li>
            <li class="<?= $post['block_element'] ?>__menu-item"><a href="<?= $item_3['link'] ?>" class="<?= $post['block_element'] ?>__menu-link link"><?= $item_3['name'] ?></a></li>
            <li class="<?= $post['block_element'] ?>__menu-item"><a href="<?= $item_4['link'] ?>" class="<?= $post['block_element'] ?>__menu-link link"><?= $item_4['name'] ?></a></li>
        </ul>
    </nav>                
</div>