<?php
    $method = $_SERVER['REQUEST_METHOD'];

if($method === 'POST')
    $dataAsJson = file_get_contents("php://input");
    $dataAsArray = json_decode($dataAsJson, true);
    print_r($dataAsArray);    
?>