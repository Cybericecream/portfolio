<?php

require('../includes/config.php');

$stmt = $db->prepare('INSERT INTO products (name,img,price,description) VALUES (:name, :img, :price, :description)') ;
$stmt->execute(array(
  ':name' => '',
  ':img' => 'products/002.png',
  ':price' => '',
  ':description' => '.'
));
