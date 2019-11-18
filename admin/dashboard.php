<?php

include $_SERVER['DOCUMENT_ROOT']  . 'phpAssets/assets.php';

include_once $_SERVER['DOCUMENT_ROOT']  . '/data/data.php';

$title = "Nathaniel Bary - Dashboard";

include  $_SERVER['DOCUMENT_ROOT']  . '/phpAssets/header.php';

$link = '#';

$name = 'Newsd Link';

$newArray = array($link, $name);

file_put_contents('data/nav.txt', print($nav, $newArray)."\n");

 ?>
