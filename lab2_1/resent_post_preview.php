<?php
    $blockName = 'most-recent';
    $publishDay = date("n/j/Y", strtotime($post['timestamp']));
    include 'post_template.php';
?>  