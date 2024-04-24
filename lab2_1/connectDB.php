<?php
const HOST = 'localhost';
const USERNAME = 'root';
const PASSWORD = '';
const DATABASE = 'blog';

function createDBConnection(): mysqli 
{
    $conn = new mysqli(HOST, USERNAME, PASSWORD, DATABASE);
    if ($conn->connect_error) 
    {
        die("Connection failed: ".$conn->connect_error);
    }
    echo "Connected successfully<br>";
    return $conn;
}

function closeDBConnection(mysqli $conn): void 
{
    $conn->close();
}

function getFeaturedPostsFromDB(mysqli $conn): array 
{
    $post = array();
    $sql = "SELECT * FROM post WHERE featured = 1";
    $result = $conn->query($sql);
    if ($result->num_rows == 0) {
        die("Connection failed: ". $conn->connect_error);
    } else {
        while($row = $result->fetch_assoc()) {
          $list[]=$row;
        }
    }       
    return $list;
}


function getRecentPostsFromDB(mysqli $conn): array 
{
    $post = array();
    $sql = "SELECT * FROM post WHERE featured = 0";
    $result = $conn->query($sql);
    if ($result->num_rows == 0) {
        die("Connection failed: ". $conn->connect_error);
    } else {
        while($row = $result->fetch_assoc()) {
          $list[] = $row;
        }
    }       
    return $list;
}

function getPostFromDB(mysqli $conn, int $id): array 
{
    $post = array();
    $sql = "SELECT * FROM post WHERE id = $id";
    $result = $conn->query($sql);
    if ($result->num_rows == 0) {
        $post = [];
    } else {
        $post = $result->fetch_assoc();
    }       
    return $post;
}
