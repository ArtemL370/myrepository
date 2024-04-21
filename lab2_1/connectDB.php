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

function getAndPrintPostsFromDB(mysqli $conn): array 
{
    $list = array();
    $sql = "SELECT * FROM post WHERE featured = 1";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) 
        {
             $list[] = $row;
        }
    } else {
        echo "0 results";
    }
    return $list;
}

?>
while<?php
    include 'connectDB.php';
    $conn = createDBConnection();
    $featuredPosts = getAndPrintPostsFromDB($conn);
    $mostRecentPosts = getAndPrintPostsFromDB($conn);
    closeDBConnection($conn);

?>