<?php
    $method = $_SERVER['REQUEST_METHOD'];

if($method === 'POST') {
    $dataAsJson = file_get_contents("php://input");
    $dataAsArray = json_decode($dataAsJson, true);
    saveImage($dataAsArray['image']);
}

function saveFile(string $file, string $data): void {
    $myFile = fopen($file, 'w');
    if ($myFile) {
      $result = fwrite($myFile, $data);
      if ($result) {
        echo 'Данные успешно сохранены в файл';
      } else {
        echo 'Произошла ошибка при сохранении данных в файл';
      }
      fclose($myFile);
    } else {
      echo 'Произошла ошибка при открытии файла';
    }
  }

function saveImage(string $imageBase64) {
    $imageBase64Array = explode(';base64,', $imageBase64);
    $imgExtention = str_replace('data:image/', '', $imageBase64Array[0]);
    $imageDecoded = base64_decode($imageBase64Array[1]); 
    saveFile("static/image.{$imgExtention}", $imageDecoded);
  }    

const HOST = 'localhost';
const USERNAME = 'blog_user';
const PASSWORD = 'password';
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
            Date: {$row['publish_date']} - 
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
