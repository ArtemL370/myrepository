<?php
include 'check_postdata.php';
include 'connectDB.php';

$method = $_SERVER['REQUEST_METHOD'];

if($method === 'POST') 
{
  try 
  {
    $dataAsJson = file_get_contents("php://input");
    $dataAsArray = json_decode($dataAsJson, true);
    if(!$dataAsArray) 
    {
      throw new Exception('Некорректная структура JSON');
    }

    checkPostData($dataAsArray);

    saveImage($dataAsArray['img_src'], $dataAsArray, 'image_name'); //сохраняет изображение base64 по ключу 'img_url' и берет ей имя по ключу 'image_name'
    $dataAsArray['img_src'] = getImageLink($dataAsArray['img_src'], $dataAsArray, 'image_name');
            
    saveImage($dataAsArray['image_preview_url'], $dataAsArray, 'image_preview_name');
    $dataAsArray['image_preview_url'] = getImageLink($dataAsArray['image_preview_url'], $dataAsArray, 'image_preview_name'); 
            
    saveImage($dataAsArray['author_img'], $dataAsArray, 'author');
    $dataAsArray['author_img'] = getImageLink($dataAsArray['author_img'], $dataAsArray, 'author');

    insertPostToDB($dataAsArray);

    echo 'Данные успешно добавлены в базу.';
  } 
  catch (Throwable $error) 
  {
    echo $error->getMessage();
    exit();
  }
}

function saveFile(string $file, string $data): void 
{
  $loadFile = fopen($file, 'w');
  if (!$loadFile) 
  {
    echo 'Произошла ошибка при открытии файла';
    return;
  }
  
  $result = fwrite($loadFile, $data);
  if ($result) 
  {
    echo 'Данные успешно сохранены в файл';
  } 
  else 
  {
    echo 'Произошла ошибка при сохранении данных в файл';
  }
  fclose($loadFile);
}

function saveImage(string $imageBase64, $dataAsArray, $keyImage)
{
  $imageBase64Array = explode(';base64,', $imageBase64);
  $imgExtention = str_replace('data:image/', '', $imageBase64Array[0]);
  $imageDecoded = base64_decode($imageBase64Array[1]);

  saveFile("./images/".getImageName($dataAsArray, $keyImage).".".$imgExtention, $imageDecoded);
}

function getImageLink(string $imageBase64, $dataAsArray, $keyImage): string     
{
  $imageBase64Array = explode(';base64,', $imageBase64);  
  $imgExtention = str_replace('data:image/', '', $imageBase64Array[0]); 
  return "./images/".getImageName($dataAsArray, $keyImage).".".$imgExtention;
}

function getImageName($dataAsArray, $keyImage): string
{
  try 
  {
    checkVarChar($dataAsArray, $keyImage);
    return $dataAsArray[$keyImage];
  } 
  catch (Throwable $error) 
  {
    echo $error->getMessage();
    exit();
  }
}
?>
