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

<div class="<?= $blockName ?> container">
    <a class="<?= $blockName ?>__logo logo" href="<?= $keys['link'] ?>"><?= $keys['logo'] ?></a>                
    <nav class="<?= $blockName ?>__menu">
        <ul class="<?= $blockName ?>__menu-list list">
            <li class="<?= $blockName ?>__menu-item"><a href="<?= $item_1['link'] ?>" class="<?= $blockName ?>__menu-link link"><?= $item_1['name'] ?></a></li>
            <li class="<?= $blockName ?>__menu-item"><a href="<?= $item_2['link'] ?>" class="<?= $blockName ?>__menu-link link"><?= $item_2['name'] ?></a></li>
            <li class="<?= $blockName ?>__menu-item"><a href="<?= $item_3['link'] ?>" class="<?= $blockName ?>__menu-link link"><?= $item_3['name'] ?></a></li>
            <li class="<?= $blockName ?>__menu-item"><a href="<?= $item_4['link'] ?>" class="<?= $blockName ?>__menu-link link"><?= $item_4['name'] ?></a></li>
        </ul>
    </nav>                
</div>