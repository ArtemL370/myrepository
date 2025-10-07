<?php

    include 'connectDB.php';
    $id = $_GET['id'];
    $post = [];
    
    try
    {
        checkIdQuery($id);
        getPostFromDB($id, $post); 
    }
    catch (Throwable $error)
    {
        echo $error->getMessage();
        exit();

        //location 404
    }
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title><?= $post['title'] ?></title>
        <link rel='stylesheet' type='text/css' href='/static/styles/the_road_ahead.css'>
        <link href="https://fonts.googleapis.com/css2?family=Lora&amp;family=Oxygen&amp;display=swap" rel="stylesheet">
	</head>
	<body>
        <header>
            <?php
                include 'header.php';          
            ?> 
        </header>
        <main>
            <div class="main-content">            
                <div class="main-content__title">
                    <h2 class="main-content__title-item title"><?= $post['id'] ?><?php echo ' ' ?><?= $post['title'] ?></h2>
                    <h2 class="main-content__title-item subtitle"><?= $post['subtitle'] ?></h2>
                </div>
                <img class="image" src="<?= $post['img_src'] ?>" alt="<?= $post['img_alt'] ?>">
                <div class="main-content__text text">
                    <?= $post['content'] ?>
                    
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