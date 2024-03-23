<?php
$publicationDayForm1 = date("F d, Y", 1443198557);
$publicationDayForm2 = date("n/j/Y", 1443198557);

$featuredPost = [
    [  
        'id' => 1,
        'block_element' => 'featured-post',
        'title' => 'The Road Ahead',
        'subtitle' => 'The road ahead might be paved - it might not be.',
        'img_link' => '/static/images/the_road_ahead.jpg',
        'img_alt' => 'Northern lights',
        'author' => 'Mat Vogels',
        'date' => "{$publicationDayForm1}",
        'author_icon' => '/static/images/mat_vogels.jpg',
        'autor_icon_alt' => 'Mat Vogels',
        'label' => false,
        
    ],
    [
        'id' => 2,
        'title' => 'From Top Down',
        'subtitle' => 'Once a year, go someplace you’ve never been before.',
        'img_link' => '/static/images/from_top_down.jpg',
        'img_alt' => 'Chinese lantern',
        'author' => 'William Wong',
        'date' => "{$publicationDayForm1}",
        'link' => '#',
        'author_icon' => '/static/images/william_wong.jpg',
        'autor_icon_alt' => 'William Wong',
        'label' => true,
        'block_element' => 'featured-post',
    ],
];

$mostRecentPost = [
    [
        'id' => 3,
        'title' => 'Still Standing Tall',
        'subtitle' => 'Life begins at the end of your comfort zone.',
        'img_link' => '/static/images/still_standing_tall.jpg',
        'img_alt' => 'Balloons in the sky',
        'author' => 'William Wong',
        'date' => "{$publicationDayForm2}",
        'link' => '#',
        'author_icon' => '/static/images/william_wong.jpg',
        'autor_icon_alt' => 'William Wong',
        'label' => false,
        'block_element' => 'most-recent',
    ],       
    [
        'id' => 4,
        'title' => 'Sunny Side Up',
        'subtitle' => 'No place is ever as bad as they tell you it’s going to be.',
        'img_link' => '/static/images/sunny_side_up.jpg',
        'img_alt' => 'The Golden Gate Bridge',
        'author' => 'Mat Vogels',
        'date' => "{$publicationDayForm2}",
        'link' => '#',
        'author_icon' => '/static/images/mat_vogels.jpg',
        'autor_icon_alt' => 'Mat Vogels',
        'label' => false,
        'block_element' => 'most-recent',
    ],
    [
        'id' => 5,
        'title' => 'Water Falls',
        'subtitle' => 'We travel not to escape life, but for life not to escape us.',
        'img_link' => '/static/images/water_fall.jpg',
        'img_alt' => 'Sunset on the lake',
        'author' => 'Mat Vogels',
        'date' => "{$publicationDayForm2}",
        'link' => '#',
        'author_icon' => '/static/images/mat_vogels.jpg',
        'autor_icon_alt' => 'Mat Vogels',
        'label' => false,
        'block_element' => 'most-recent',
    ],
    [
        'id' => 6,
        'title' => 'Through the Mist',
        'subtitle' => 'Travel makes you see what a tiny place you occupy in the world.',
        'img_link' => '/static/images/through_the_mist.jpg',
        'img_alt' => 'Waves',
        'author' => 'William Wong',
        'date' => "{$publicationDayForm2}",
        'link' => '#',
        'author_icon' => '/static/images/william_wong.jpg',
        'autor_icon_alt' => 'William Wong',
        'label' => false,
        'block_element' => 'most-recent',
    ],
    [
        'id' => 7,
        'title' => 'Awaken Early',
        'subtitle' => 'Not all those who wander are lost.',
        'img_link' => 'static/images/awaken_early.jpg',
        'img_alt' => 'Funicular',
        'author' => 'Mat Vogels',
        'date' => "{$publicationDayForm2}",
        'link' => '#',
        'author_icon' => '/static/images/mat_vogels.jpg',
        'autor_icon_alt' => 'Mat Vogels',
        'label' => false,
        'block_element' => 'most-recent',
    ],
    [
        'id' => 8,
        'title' => 'Try it Always',
        'subtitle' => 'The world is a book, and those who do not travel read only one page.',
        'img_link' => '/static/images/try_it_always.jpg',
        'img_alt' => 'Waterfall',
        'author' => 'Mat Vogels',
        'date' => "{$publicationDayForm2}",
        'link' => '#',
        'author_icon' => '/static/images/mat_vogels.jpg',
        'autor_icon_alt' => 'Mat Vogels',
        'label' => false,
        'block_element' => 'most-recent',
    ],          
];

$header = [
    [
        'block_element' => 'header-content',
    ],
];    

$footer = [
    [
        'block_element' => 'footer-content',
    ],
];

$page = [    
    'title' => "Let’s do it together.",
    'subtitle' => 'We travel the world in search of stories. Come along for the ride.',
    'button' => 'View Latest Posts',
    'page_title' => 'Home',
    'block1_name' => 'Featured Post',
    'block2_name' => 'Most Recent',
    'styles' => '/static/styles/home.css',
    'fonts' => 'https://fonts.googleapis.com/css2?family=Lora&amp;family=Oxygen&amp;display=swap',
];    


?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title><?= $page['page_title'] ?></title>
        <link rel='stylesheet' type='text/css' href='<?= $page['styles'] ?>'>
        <link href="<?= $page['fonts'] ?>" rel="stylesheet">
	</head>
	<body>
        <header class="header">
            <?php
            foreach ($header as $post) {
                include 'header_footer.php';
            }            
            ?> 
            <div class="header__main-title">
                <div class="header-title"><?= $page['title'] ?></div>
                <div class="header-subtitle"><?= $page['subtitle'] ?></div>
                <button class="header-button"><?= $page['button'] ?></button>
            </div>
        </header>
        <main>
            <?php include 'navigation.php';
            ?>
            <div class="featured-post container">
                <div class="featured-post__body">
                    <div class="featured-post__header">
                        <h2 class="featured-post__title title"><?= $page['block1_name'] ?></h2>                       
                    </div>
                    <div class="featured-post__row">
                    <?php
                    foreach ($featuredPost as $post) {
                        include 'post_preview.php';
                    }
                    ?>    
                    </div>
                </div>
            </div>
            <div class="most-recent container">
                <div class="most-recent__body">
                    <div class="most-recent__header">
                        <h2 class="most-recent__title title"><?= $page['block2_name'] ?></h2>                       
                    </div>
                    <div class="most-recent__row">
                    <?php
                    foreach ($mostRecentPost as $post) {
                        include 'post_preview.php';
                    }
                    ?>    
                    </div>
                </div>
            </div>
        </main>
        <footer class="footer">
            <?php
            foreach ($footer as $post) {
                include 'header_footer.php';
            }            
            ?>
        </footer>
	</body>
</html>