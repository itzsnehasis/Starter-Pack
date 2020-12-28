<?php 
include "connection.php"; 

$sql = "INSERT INTO `pc_parts` (`id`, `name`, `price`, `details`) VALUES (NULL, '$_POST[name]', '$_POST[price]', '$_POST[details]' )";
$res = $db->query($sql);

header("Location: index.php");