<?php
    $blockName = 'featured-post';
    $publishDay = date("F d, Y", strtotime($post['timestamp']));
    include 'post_template.php';
?>  