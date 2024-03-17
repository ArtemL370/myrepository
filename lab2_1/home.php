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
        'author' => 'Mat Vogels',
        'date' => "{$publicationDayForm1}",
        'author_icon' => '/static/images/mat_vogels.jpg',
        'label' => false,
        
    ],
    [
        'id' => 2,
        'title' => 'From Top Down',
        'subtitle' => 'Once a year, go someplace you’ve never been before.',
        'img_link' => '/static/images/from_top_down.jpg',
        'author' => 'William Wong',
        'date' => "{$publicationDayForm1}",
        'link' => '#',
        'author_icon' => '/static/images/william_wong.jpg',
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
        'author' => 'William Wong',
        'date' => "{$publicationDayForm2}",
        'link' => '#',
        'author_icon' => '/static/images/william_wong.jpg',
        'label' => false,
        'block_element' => 'most-recent',
    ],       
    [
        'id' => 4,
        'title' => 'Sunny Side Up',
        'subtitle' => 'No place is ever as bad as they tell you it’s going to be.',
        'img_link' => '/static/images/sunny_side_up.jpg',
        'author' => 'Mat Vogels',
        'date' => "{$publicationDayForm2}",
        'link' => '#',
        'author_icon' => '/static/images/mat_vogels.jpg',
        'label' => false,
        'block_element' => 'most-recent',
    ],
    [
        'id' => 5,
        'title' => 'Water Falls',
        'subtitle' => 'We travel not to escape life, but for life not to escape us.',
        'img_link' => '/static/images/water_fall.jpg',
        'author' => 'Mat Vogels',
        'date' => "{$publicationDayForm2}",
        'link' => '#',
        'author_icon' => '/static/images/mat_vogels.jpg',
        'label' => false,
        'block_element' => 'most-recent',
    ],
    [
        'id' => 6,
        'title' => 'Through the Mist',
        'subtitle' => 'Travel makes you see what a tiny place you occupy in the world.',
        'img_link' => '/static/images/through_the_mist.jpg',
        'author' => 'William Wong',
        'date' => "{$publicationDayForm2}",
        'link' => '#',
        'author_icon' => '/static/images/william_wong.jpg',
        'label' => false,
        'block_element' => 'most-recent',
    ],
    [
        'id' => 7,
        'title' => 'Awaken Early',
        'subtitle' => 'Not all those who wander are lost.',
        'img_link' => 'static/images/awaken_early.jpg',
        'author' => 'Mat Vogels',
        'date' => "{$publicationDayForm2}",
        'link' => '#',
        'author_icon' => '/static/images/mat_vogels.jpg',
        'label' => false,
        'block_element' => 'most-recent',
    ],
    [
        'id' => 8,
        'title' => 'Try it Always',
        'subtitle' => 'The world is a book, and those who do not travel read only one page.',
        'img_link' => '/static/images/try_it_always.jpg',
        'author' => 'Mat Vogels',
        'date' => "{$publicationDayForm2}",
        'link' => '#',
        'author_icon' => '/static/images/mat_vogels.jpg',
        'label' => false,
        'block_element' => 'most-recent',
    ],          
]
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Home</title>
        <link rel='stylesheet' type='text/css' href='/static/styles/home.css'>
        <link href="https://fonts.googleapis.com/css2?family=Lora&amp;family=Oxygen&amp;display=swap" rel="stylesheet">
	</head>
	<body>
        <header class="header">
            <div class="header-content container">
                <a class="header-content__logo logo" href="#">Escape.</a>                
                <nav class="header-content__menu">
                    <ul class="header-content__menu-list list">
                        <li class="header-content__menu-item"><a href="#" class="header-content__menu-link link">HOME</a></li>
                        <li class="header-content__menu-item"><a href="#" class="header-content__menu-link link">CATEGORIES</a></li>
                        <li class="header-content__menu-item"><a href="#" class="header-content__menu-link link">ABOUT</a></li>
                        <li class="header-content__menu-item"><a href="#" class="header-content__menu-link link">CONTACT</a></li>
                    </ul>
                </nav>                
            </div>
            <div class="header__main-title">
                <div class="header-title">Let's do it together.</div>
                <div class="header-subtitle">We travel the world in search of stories. Come along for the ride.</div>
                <button class="header-button">View Latest Posts</button>
            </div>
        </header>
        <main>
            <div class="categories">              
                <nav class="categories__menu">
                    <ul class="categories__menu-list container">
                        <li class="categories__menu-item"><a href="#" class="categories__menu-link">Nature</a></li>
                        <li class="categories__menu-item"><a href="#" class="categories__menu-link">Photography</a></li>
                        <li class="categories__menu-item"><a href="#" class="categories__menu-link">Relaxation</a></li>
                        <li class="categories__menu-item"><a href="#" class="categories__menu-link">Vacation</a></li>
                        <li class="categories__menu-item"><a href="#" class="categories__menu-link">Travel</a></li>
                        <li class="categories__menu-item"><a href="#" class="categories__menu-link">Adventure</a></li>
                    </ul>
                </nav>
            </div>
            <div class="featured-post container">
                <div class="featured-post__body">
                    <div class="featured-post__header">
                        <h2 class="featured-post__title title">Featured Post</h2>                       
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
                        <h2 class="most-recent__title title">Most Recent</h2>                       
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
            <div class="footer-content container">
                <a class="footer-content__logo logo" href="#">Escape.</a>
                <nav class="footer-content__menu">
                    <ul class="footer-content__menu-list list">
                        <li class="footer-content__menu-item"><a href="#" class="footer-content__menu-link link">HOME</a></li>
                        <li class="footer-content__menu-item"><a href="#" class="footer-content__menu-link link">CATEGORIES</a></li>
                        <li class="footer-content__menu-item"><a href="#" class="footer-content__menu-link link">ABOUT</a></li>
                        <li class="footer-content__menu-item"><a href="#" class="footer-content__menu-link link">CONTACT</a></li>
                    </ul>
                </nav>                
            </div>
        </footer>
	</body>
</html>