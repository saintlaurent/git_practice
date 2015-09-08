<?php
session_start();

$dom = new DOMDocument;
$string = $_SESSION['listElements'];
$dom->loadHTML($string);
$items = $dom->getElementsByTagName('li');

for ($i = 0; $i < $items->length; $i++){
    echo $items->item($i)->nodeValue . "<br/>";
}
