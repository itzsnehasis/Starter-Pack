<?php 
include "connection.php"; 

$sql = "UPDATE `pc_parts` SET `name` = '$_POST[name]', `price` = '$_POST[price]', `details` = '$_POST[details]' WHERE `id` = $_POST[id]";
$res = $db->query($sql);

header("Location: index.php");