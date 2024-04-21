<?php

$featuredPost = [
    [  
        'id' => 1,
        'title' => 'The Road Ahead',
        'subtitle' => 'The road ahead might be paved - it might not be.',
        'img_src' => '/static/images/the_road_ahead.jpg',
        'img_alt' => 'Northern lights',
        'author' => 'Mat Vogels',
        'timestamp' => 1443198557,
        'author_img' => '/static/images/mat_vogels.jpg',
        'author_img_alt' => 'Mat Vogels',
        'label' => false,
    ],
    [
        'id' => 2,
        'title' => 'From Top Down',
        'subtitle' => 'Once a year, go someplace you’ve never been before.',
        'img_src' => '/static/images/from_top_down.jpg',
        'img_alt' => 'Chinese lantern',
        'author' => 'William Wong',
        'timestamp' => 1443198557,
        'author_img' => '/static/images/william_wong.jpg',
        'author_img_alt' => 'William Wong',
        'label' => true,
    ],
];

$mostRecentPost = [
    [
        'id' => 3,
        'title' => 'Still Standing Tall',
        'subtitle' => 'Life begins at the end of your comfort zone.',
        'img_src' => '/static/images/still_standing_tall.jpg',
        'img_alt' => 'Balloons in the sky',
        'author' => 'William Wong',
        'timestamp' => 1443198557,
        'author_img' => '/static/images/william_wong.jpg',
        'author_img_alt' => 'William Wong',
        'label' => false,
    ],       
    [
        'id' => 4,
        'title' => 'Sunny Side Up',
        'subtitle' => 'No place is ever as bad as they tell you it’s going to be.',
        'img_src' => '/static/images/sunny_side_up.jpg',
        'img_alt' => 'The Golden Gate Bridge',
        'author' => 'Mat Vogels',
        'timestamp' => 1443198557,
        'author_img' => '/static/images/mat_vogels.jpg',
        'author_img_alt' => 'Mat Vogels',
        'label' => false,
    ],
    [
        'id' => 5,
        'title' => 'Water Falls',
        'subtitle' => 'We travel not to escape life, but for life not to escape us.',
        'img_src' => '/static/images/water_fall.jpg',
        'img_alt' => 'Sunset on the lake',
        'author' => 'Mat Vogels',
        'timestamp' => 1443198557,
        'author_img' => '/static/images/mat_vogels.jpg',
        'author_img_alt' => 'Mat Vogels',
        'label' => false,
    ],
    [
        'id' => 6,
        'title' => 'Through the Mist',
        'subtitle' => 'Travel makes you see what a tiny place you occupy in the world.',
        'img_src' => '/static/images/through_the_mist.jpg',
        'img_alt' => 'Waves',
        'author' => 'William Wong',
        'timestamp' => 1443198557,
        'author_img' => '/static/images/william_wong.jpg',
        'author_img_alt' => 'William Wong',
        'label' => false,
    ],
    [
        'id' => 7,
        'title' => 'Awaken Early',
        'subtitle' => 'Not all those who wander are lost.',
        'img_src' => 'static/images/awaken_early.jpg',
        'img_alt' => 'Funicular',
        'author' => 'Mat Vogels',
        'timestamp' => 1443198557,
        'author_img' => '/static/images/mat_vogels.jpg',
        'author_img_alt' => 'Mat Vogels',
        'label' => false,
    ],
    [
        'id' => 8,
        'title' => 'Try it Always',
        'subtitle' => 'The world is a book, and those who do not travel read only one page.',
        'img_src' => '/static/images/try_it_always.jpg',
        'img_alt' => 'Waterfall',
        'author' => 'Mat Vogels',
        'timestamp' => 1443198557,
        'author_img' => '/static/images/mat_vogels.jpg',
        'author_img_alt' => 'Mat Vogels',
        'label' => false,
    ],          
];

$page = [
    'title' => 'Let’s do it together.',
    'subtitle' => 'We travel the world in search of stories. Come along for the ride.',
    'button_text' => 'View Latest Posts',
    'page_title' => 'Home',
    'section_name_1' => 'Featured Post',
    'section_name_2' => 'Most Recent',
    'styles' => '/styles/home.css',
];
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title><?= $page['page_title'] ?></title>
        <link rel='stylesheet' type='text/css' href='<?= $page['styles'] ?>'>
        <link href="https://fonts.googleapis.com/css2?family=Lora&amp;family=Oxygen&amp;display=swap" rel="stylesheet">
	</head>
	<body>
        <header class="header">
            <?php
            include 'header.php';
            ?> 
            <div class="header__main-title">
                <div class="header-title"><?= $page['title'] ?></div>
                <div class="header-subtitle"><?= $page['subtitle'] ?></div>
                <button class="header-button"><?= $page['button_text'] ?></button>
            </div>
        </header>
        <main>
            <?php 
            include 'navigation.php';
            ?>
            <div class="featured-post container">
                <div class="featured-post__body">
                    <div class="featured-post__header">
                        <h2 class="featured-post__title title"><?= $page['section_name_1'] ?></h2>                       
                    </div>
                    <div class="featured-post__row">
                    <?php
                    foreach ($featuredPost as $post) {
                        include 'featured_post_preview.php';
                    }
                    ?>    
                    </div>
                </div>
            </div>
            <div class="most-recent container">
                <div class="most-recent__body">
                    <div class="most-recent__header">
                        <h2 class="most-recent__title title"><?= $page['section_name_2'] ?></h2>                       
                    </div>
                    <div class="most-recent__row">
                    <?php
                    foreach ($mostRecentPost as $post) {
                        include 'resent_post_preview.php';
                    }
                    ?>    
                    </div>
                </div>
            </div>
        </main>
        <footer class="footer">
            <?php
            include 'footer.php';          
            ?>
        </footer>
	</body>
</html>