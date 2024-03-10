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
                <a href="#" class="header-content__logo logo">Escape.</a>                
                <nav class="header-content__menu">
                    <ul class="header-content__menu-list list">
                        <li><a href="#" class="header-content__menu-link link">HOME</a></li>
                        <li><a href="#" class="header-content__menu-link link">CATEGORIES</a></li>
                        <li><a href="#" class="header-content__menu-link link">ABOUT</a></li>
                        <li><a href="#" class="header-content__menu-link link">CONTACT</a></li>
                    </ul>
                </nav>                
            </div>
            <div class="header-title">Let's do it together.</div>
            <div class="header-subtitle">We travel the world in search of stories. Come along for the ride.</div>
            <!-- <div class=""> -->
                <button class="button">View Latest Posts</button>
            <!--             -->
        </header>
        <main>
            <div class="categories">              
                <nav>
                    <ul class="categories__menu container">
                        <li><a href="#" class="categories__item">Nature</a></li>
                        <li><a href="#" class="categories__item">Photography</a></li>
                        <li><a href="#" class="categories__item">Relaxation</a></li>
                        <li><a href="#" class="categories__item">Vacation</a></li>
                        <li><a href="#" class="categories__item">Travel</a></li>
                        <li><a href="#" class="categories__item">Adventure</a></li>
                    </ul>
                </nav>
            </div>
            <div class="featuredpost container">
                <div class="featuredpost__body">
                    <div class="featuredpost__header">
                        <h2 class="featuredpost__title title">Featured Post</h2>                       
                    </div>
                    <div class="featuredpost__row">
                        <div class="featuredpost__column">
                            <a class="item-featuredpost" href="../lab1_2/post.php" >
                                <img class="item-featuredpost__image" src="static/images/the_road_ahead.jpg" alt="">
                                <div class="item-featuredpost__content">                                
                                    <div class="item-featuredpost__title">The Road Ahead</div>
                                    <div class="item-featuredpost__subtitle">The road ahead might be paved - it might not be.</div>
                                    <div class="item-featuredpost__description">
                                        <div class="description__autor">
                                            <div class="autor__icon"><img src="static/images/mat_vogels.jpg" alt=""></div>
                                            Mat Vogels
                                        </div>
                                        <div class="description__date">September 25, 2015</div>
                                    </div>
                                </div>                                
                            </a>
                        </div>
                        <div class="featuredpost__column">
                            <a class="item-featuredpost" href="#">
                                <img class="item-featuredpost__image" src="static/images/from_top_down.jpg" alt="">
                                <div class="item-featuredpost__item"><h2>ADVENTURE</h2></div>
                                <div class="item-featuredpost__content">
                                    <div class="item-featuredpost__title">From Top Down</div>
                                    <div class="item-featuredpost__subtitle">Once a year, go someplace you’ve never been before.</div>
                                    <div class="item-featuredpost__description">
                                        <div class="description__autor">
                                            <div class="autor__icon"><img src="static/images/william_wong.jpg" alt=""></div>
                                            William Wong
                                        </div>
                                        <div class="description__date">September 25, 2015</div>
                                    </div>                                    
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mostrecent container">
                <div class="mostrecent__body">
                    <div class="mostrecent__header">
                        <div class="mostrecent__title title">Most Recent</div>                       
                    </div>
                    <div class="mostrecent__row">
                        <div class="mostrecent__column">
                            <a class="item-mostrecent" href="#">
                                <div class="item-mostrecent__image"><img src="static/images/still_standing_tall.jpg" alt=""></div>                                
                                <!-- <div class="item-mostrecent__block"> -->
                                    <div class="item-mostrecent__title">Still Standing Tall</div>
                                    <div class="item-mostrecent__subtitle">Life begins at the end of your comfort zone.</div>
                                    <div class="item-mostrecent__description">
                                        <div class="description__autor">
                                            <div class="autor__icon"><img src="static/images/william_wong.jpg" alt=""></div>
                                            William Wong
                                        </div>
                                        <div class="description__date">9/25/2015</div>
                                    </div>
                                <!-- </div> -->
                            </a>
                        </div>
                        <div class="mostrecent__column">
                            <a class="item-mostrecent" href="#">
                                <div class="item-mostrecent__image"><img src="static/images/sunny_side_up.jpg" alt=""></div>                                
                                <div class="item-mostrecent__title">Sunny Side Up</div>
                                <div class="item-mostrecent__subtitle">No place is ever as bad as they tell you it’s going to be.</div>
                                <div class="item-mostrecent__description">
                                    <div class="description__autor">
                                        <div class="autor__icon"><img src="static/images/mat_vogels.jpg" alt=""></div>
                                        Mat Vogels
                                    </div>
                                    <div class="description__date">9/25/2015</div>
                                </div>  
                            </a>
                        </div>
                        <div class="mostrecent__column">
                            <a class="item-mostrecent" href="#">
                                <div class="item-mostrecent__image"><img src="static/images/water_fall.jpg" alt=""></div>                                
                                <div class="item-mostrecent__title">Water Falls</div>
                                <div class="item-mostrecent__subtitle">We travel not to escape life, but for life not to escape us.</div>
                                <div class="item-mostrecent__description">
                                    <div class="description__autor">
                                        <div class="autor__icon"><img src="static/images/mat_vogels.jpg" alt=""></div>
                                        Mat Vogels
                                    </div>
                                    <div class="description__date">9/25/2015</div>
                                </div>
                            </a>
                        </div>
                        <div class="mostrecent__column">
                            <a class="item-mostrecent" href="#">
                                <div class="item-mostrecent__image"><img src="static/images/through_the_mist.jpg" alt=""></div>                                
                                <div class="item-mostrecent__title">Through the Mist</div>
                                <div class="item-mostrecent__subtitle">Travel makes you see what a tiny place you occupy in the world.</div>
                                <div class="item-mostrecent__description">
                                    <div class="description__autor">
                                        <div class="autor__icon"><img src="static/images/william_wong.jpg" alt=""></div>
                                        William Wong
                                    </div>
                                    <div class="description__date">9/25/2015</div>
                                </div>
                            </a>
                        </div>
                        <div class="mostrecent__column">
                            <a class="item-mostrecent" href="#">
                                <div class="item-mostrecent__image"><img src="static/images/awaken_early.jpg" alt=""></div>                                
                                <div class="item-mostrecent__title">Awaken Early</div>
                                <div class="item-mostrecent__subtitle">Not all those who wander are lost.</div>
                                <div class="item-mostrecent__description">
                                    <div class="description__autor">
                                        <div class="autor__icon"><img src="static/images/mat_vogels.jpg" alt=""></div>
                                        Mat Vogels
                                    </div>
                                    <div class="description__date">9/25/2015</div>
                                </div>
                            </a>
                        </div>
                        <div class="mostrecent__column">
                            <a class="item-mostrecent" href="#">
                                <div class="item-mostrecent__image"><img src="static/images/try_it_always.jpg" alt=""></div>                                
                                <div class="item-mostrecent__title">Try it Always</div>
                                <div class="item-mostrecent__subtitle">The world is a book, and those who do not travel read only one page.</div>
                                <div class="item-mostrecent__description">
                                    <div class="description__autor">
                                        <div class="autor__icon"><img src="static/images/mat_vogels.jpg" alt=""></div>
                                        Mat Vogels
                                    </div>
                                    <div class="description__date">9/25/2015</div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </main>
        <footer class="footer">
            <div class="footer-content container">
                <a href="#" class="footer-content__logo logo">Escape.</a>
                <nav class="footer-content__menu">
                    <ul class="footer-content__menu-list list">
                        <li><a href="#" class="footer-content__menu-link link">HOME</a></li>
                        <li><a href="#" class="footer-content__menu-link link">CATEGORIES</a></li>
                        <li><a href="#" class="footer-content__menu-link link">ABOUT</a></li>
                        <li><a href="#" class="footer-content__menu-link link">CONTACT</a></li>
                    </ul>
                </nav>                
            </div>
        </footer>
	</body>
</html>