<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP + MySQL</title>
</head>
<body>
<h1>PHP + MySQL</h1>
<?php
    $mysql = new mysqli("localhost", "root", "", "php-mysql");
    $mysql -> query("SET NAMES 'utf8'");

    if($mysql -> connect_error) {
        echo 'Error Number: '.$mysql -> connect_errno.'<br>';
        echo 'Error: '.$mysql -> conncet_error;
    } else {
       // echo 'Host info: '.$mysql -> host_info;
       // $mysql -> query("DROP TABLE `example`");
       $mysql -> query("CREATE TABLE `users` (
        id INT(11) NOT NULL,
        name VARCHAR(50) NOT NULL,
        bio TEXT NOT NULL,
        PRIMARY KEY(id)
       )");
    }

    $mysql -> close();
?>    
</body>
</html>