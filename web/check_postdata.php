<?php

function checkIsFeautured($dataAsArray): void
{
    if (gettype($dataAsArray['featured']) !== 'integer') {
        throw new Exception('Некорректный тип данных для ключа featured');
    }
    if ($dataAsArray['featured'] !== 0) {
        if ($dataAsArray['featured'] !== 1) {
            throw new Exception('Некорректное значение по ключу featured');
        }
    }
}

function checkVarChar($dataAsArray, $arrKey): void
{
    if (gettype($dataAsArray[$arrKey]) !== 'string') {
        throw new Exception('Некорректный тип данных для ключа ' . $arrKey);
    }
    if (!$dataAsArray[$arrKey]) {
        throw new Exception('Пустое поле по ключу ' . $arrKey);
    }
    if (strlen($dataAsArray[$arrKey]) > 255) {
        throw new Exception('Превышена длина для данных по ключу ' . $arrKey);
    }
}

function checkTextType($dataAsArray, $arrKey): void
{
    if (gettype($dataAsArray[$arrKey]) !== 'string') {
        throw new Exception('Некорректный тип данных для ключа ' . $arrKey);
    }
    if (!$dataAsArray[$arrKey]) {
        throw new Exception('Пустое поле по ключу ' . $arrKey);
    }
}

function checkTimestamp($dataAsArray): void
{
    if (gettype($dataAsArray['timestamp']) !== 'integer') {
        throw new Exception('Некорректный тип данных для ключа timestamp');
    }
    $len = strval($dataAsArray['timestamp']);
    if (strlen($len) !== 10) { //gfghffffff
        throw new Exception('Некорректное значение по ключу timestamp');
    }
}

function checkVarCharForSticker($dataAsArray, $arrKey): void
{
    if (gettype($dataAsArray[$arrKey]) !== 'string') {
        throw new Exception('Некорректный тип данных для ключа ' . $arrKey);
    }
    if (strlen($dataAsArray[$arrKey]) > 255) {
        throw new Exception('Превышена длина для данных по ключу ' . $arrKey);
    }
}

function checkPostData($dataAsArray): void
{
    checkIsFeautured($dataAsArray);                  
    checkVarChar($dataAsArray, 'img_alt');
    checkVarChar($dataAsArray, 'title');
    checkVarChar($dataAsArray, 'subtitle');
    checkTextType($dataAsArray, 'content');
    checkVarChar($dataAsArray, 'author');
    checkTimestamp($dataAsArray);
    checkVarCharForSticker($dataAsArray, 'label');
}
