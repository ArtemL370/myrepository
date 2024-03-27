<?php

const HOST = 'localhost';
const USERNAME = 'root';
const PASSWORD = '';
const DATABASE = 'blog';
function createDBConnection(): mysqli {
  $conn = new mysqli(HOST, USERNAME, PASSWORD, DATABASE);
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }

  echo "Connected successfully<br>";
  return $conn;
}

function closeDBConnection(mysqli $conn): void {
  $conn->close();
}

function getAndPrintPostsFromDB(mysqli $conn): void {
  $sql = "SELECT * FROM post";
  $result = $conn->query($sql);
  if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
      echo "ID: {$row['id']} - 
            Title: {$row['title']} - 
            Subtitle: {$row['subtitle']} - 
            img_link: {$row['img_link']} - 
            img_alt: {$row['img_alt']} - 
            author: {$row['author']} - 
            date: {$row['date']} - 
            link: {$row['link']} - 
            author_icon: {$row['author_icon']} - 
            autor_icon_alt: {$row['autor_icon_alt']} - 
            label: {$row['label']} - 
            block_element: {$row['block_element']} 
            <br>";
    }
  } else {
      echo "0 results";
    }
}

$conn = createDBConnection();
getAndPrintPostsFromDB($conn);
closeDBConnection($conn);


?>