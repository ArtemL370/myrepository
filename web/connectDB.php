<?php
const HOST = 'localhost';
const USERNAME = 'root';
const PASSWORD = '';
const DATABASE = 'blog';

function createDBConnection(): mysqli
{
    $conn = new mysqli(HOST, USERNAME, PASSWORD, DATABASE);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    echo "Connected successfully<br>";
    return $conn;
}

function closeDBConnection(mysqli $conn): void
{
    $conn->close();
}

function getPostsFromDB(&$featuredPost, &$mostRecentPost): void
{
    $conn = createDBConnection();
    
    $sql = "SELECT * FROM post";
    $result = $conn->query($sql);
    $rows = $result->fetch_all(MYSQLI_ASSOC);
    foreach ($rows as $row) {
        if ($row['featured'] == 1) {
            array_push($featuredPost, $row);
        }
        if ($row['featured'] == 0) {
            array_push($mostRecentPost, $row);
        }
    }

    closeDBConnection($conn);
}

function getPostFromDB(&$id, &$post): array
{
    $conn = createDBConnection();
    
    $sql = "SELECT id, title, subtitle, img_src, img_alt, author, timestamp, author_img, author_img_alt, label, content, featured FROM post WHERE id = {$id}";
    $result = $conn->query($sql);
    // escape strings
    if ($result->num_rows == 1) {
        if ($row = $result->fetch_assoc()) {
            $post = $row;
        }
    } else {
        throw new Exception('Страница с таким id не существует');
        header("Location: /404.php");
    }
    return $post;

    closeDBConnection($conn);
}

function checkIdQuery($id): void
{
    if (is_numeric($id) !=true)
    {
        throw new Exception('Некорректный get-запрос');
    }
}

function insertPostToDB($dataAsArray): void
{
    $conn = createDBConnection();

    $sql = "INSERT INTO post SET 
        featured = {$dataAsArray['featured']},
        title = '{$dataAsArray['title']}',
        subtitle = '{$dataAsArray['subtitle']}',
        img_src = '{$dataAsArray['img_src']}',
        img_alt = '{$dataAsArray['img_alt']}',
        author = '{$dataAsArray['author']}',
        timestamp = {$dataAsArray['timestamp']},
        author_img = '{$dataAsArray['author_img']}',
        author_img_alt = '{$dataAsArray['author_img_alt']}',
        label = '{$dataAsArray['label']}',
        content = '{$dataAsArray['content']}'";
    $result = $conn->query($sql);
    if (!$result)
    {
        throw new Exception('Ошибка при добавлении данных');
    }
    
    closeDBConnection($conn);

}

?>