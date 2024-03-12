<?php
$posts = [
    [
        'title' => 'The Road Ahead',
        'subtitle' => 'The road ahead might be paved - it might not be.',
        'img_modifier' => 'static/images/the_road_ahead.jpg',
        'author' => 'Mat Vogels',
        'date' => 'September 25, 2015',
        'link' => '../lab1_2/post.php',
        'author_icon' => 'static/images/william_wong.jpg',
        'label' => false,
    ],
    [
        'title' => 'From Top Down',
        'subtitle' => 'Once a year, go someplace you’ve never been before.',
        'img_modifier' => 'static/images/from_top_down.jpg',
        'author' => 'William Wong',
        'date' => 'September 25, 2015',
        'link' => '#',
        'author_icon' => 'static/images/william_wong.jpg',
        'label' => true,
    ],
]
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Home</title>
        <link rel='stylesheet' type='text/css' href='static/styles/styles.css'>
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
            <div class="header-title">Let's do it together.</div>
            <div class="header-subtitle">We travel the world in search of stories. Come along for the ride.</div>
            <button class="header-button">View Latest Posts</button>
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
            <div class="featuredpost container">
                <div class="featuredpost__body">
                    <div class="featuredpost__header">
                        <h2 class="featuredpost__title title">Featured Post</h2>                       
                    </div>
                    <div class="featuredpost__row">
                    <?php
                    foreach ($posts as $post) {
                        include 'post_preview.php';
                    }
                    ?>    
                    </div>
                </div>
            </div>
            <div class="mostrecent container">
                <div class="mostrecent__body">
                    <div class="mostrecent__header">
                        <h2 class="mostrecent__title title">Most Recent</h2>                       
                    </div>
                    <div class="mostrecent__row">
                        <div class="mostrecent__column">
                            <a class="mostrecent__item" href="#">
                                <div class="mostrecent__image"><img src="static/images/still_standing_tall.jpg" alt=""></div>
                                <div class="mostrecent__content">
                                    <div class="mostrecent__content-title">Still Standing Tall</div>
                                    <div class="mostrecent__content-subtitle">Life begins at the end of your comfort zone.</div>
                                    <div class="mostrecent__content-description">
                                        <div class="description__autor">
                                            <div class="autor__icon"><img src="static/images/william_wong.jpg" alt=""></div>
                                            William Wong
                                        </div>
                                        <div class="description__date">9/25/2015</div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="mostrecent__column">
                            <a class="mostrecent__item" href="#">
                                <div class="mostrecent__image"><img src="static/images/sunny_side_up.jpg" alt=""></div>                                
                                <div class="mostrecent__content">
                                    <div class="mostrecent__content-title">Sunny Side Up</div>
                                    <div class="mostrecent__content-subtitle">No place is ever as bad as they tell you it’s going to be.</div>
                                    <div class="mostrecent__content-description">
                                        <div class="description__autor">
                                            <div class="autor__icon"><img src="static/images/mat_vogels.jpg" alt=""></div>
                                            Mat Vogels
                                        </div>
                                        <div class="description__date">9/25/2015</div>
                                    </div>
                                </div>  
                            </a>
                        </div>
                        <div class="mostrecent__column">
                            <a class="mostrecent__item" href="#">
                                <div class="mostrecent__image"><img src="static/images/water_fall.jpg" alt=""></div>                                
                                <div class="mostrecent__content">
                                    <div class="mostrecent__content-title">Water Falls</div>
                                    <div class="mostrecent__content-subtitle">We travel not to escape life, but for life not to escape us.</div>
                                    <div class="mostrecent__content-description">
                                        <div class="description__autor">
                                            <div class="autor__icon"><img src="static/images/mat_vogels.jpg" alt=""></div>
                                            Mat Vogels
                                        </div>
                                        <div class="description__date">9/25/2015</div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="mostrecent__column">
                            <a class="mostrecent__item" href="#">
                                <div class="mostrecent__image"><img src="static/images/through_the_mist.jpg" alt=""></div>                                
                                <div class="mostrecent__content">
                                    <div class="mostrecent__content-title">Through the Mist</div>
                                    <div class="mostrecent__content-subtitle">Travel makes you see what a tiny place you occupy in the world.</div>
                                    <div class="mostrecent__content-description">
                                        <div class="description__autor">
                                            <div class="autor__icon"><img src="static/images/william_wong.jpg" alt=""></div>
                                            William Wong
                                        </div>
                                        <div class="description__date">9/25/2015</div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="mostrecent__column">
                            <a class="mostrecent__item" href="#">
                                <div class="mostrecent__image"><img src="static/images/awaken_early.jpg" alt=""></div>                                
                                <div class="mostrecent__content">
                                    <div class="mostrecent__content-title">Awaken Early</div>
                                    <div class="mostrecent__content-subtitle">Not all those who wander are lost.</div>
                                    <div class="mostrecent__content-description">
                                        <div class="description__autor">
                                            <div class="autor__icon"><img src="static/images/mat_vogels.jpg" alt=""></div>
                                            Mat Vogels
                                        </div>
                                        <div class="description__date">9/25/2015</div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="mostrecent__column">
                            <a class="mostrecent__item" href="#">
                                <div class="mostrecent__image"><img src="static/images/try_it_always.jpg" alt=""></div>                                
                                <div class="mostrecent__content">
                                    <div class="mostrecent__content-title">Try it Always</div>
                                    <div class="mostrecent__content-subtitle">The world is a book, and those who do not travel read only one page.</div>
                                    <div class="mostrecent__content-description">
                                        <div class="description__autor">
                                            <div class="autor__icon"><img src="static/images/mat_vogels.jpg" alt=""></div>
                                            Mat Vogels
                                        </div>
                                        <div class="description__date">9/25/2015</div>
                                    </div>
                                </div>
                            </a>
                        </div>
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