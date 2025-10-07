<?php
include 'connectDB.php';

$featuredPost = [];
$mostRecentPost = [];
getPostsFromDB($featuredPost, $mostRecentPost);


$page = [
    'title' => 'Let’s do it together.',
    'subtitle' => 'We travel the world in search of stories. Come along for the ride.',
    'button_text' => 'View Latest Posts',
    'page_title' => 'Home',
    'section_name_1' => 'Featured Post',
    'section_name_2' => 'Most Recent',
];
?>

<!DOCTYPE html>
<html lang="en">
    
<head>
    <meta charset="utf-8">
    <title><?= $page['page_title'] ?></title>
    <link rel='stylesheet' type='text/css' href='/styles/home.css'>
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