<?php
// Проверяем, существует ли GET-параметр с ключом 'postid'
if(isset($_GET['postid'])) {
    // Получаем значение GET-параметра 'postid' и сохраняем его в переменную
    $postId = $_GET['postid'];

    // Используем значение переменной $postId по вашему усмотрению
    echo 'Значение GET-параметра postid: ' . $postId;
} else {
    // В случае, если GET-параметр 'postid' отсутствует
    echo 'GET-параметр postid не найден';
}
?>