<?php

$db = new MySQLi("localhost", "root", NULL, "1pm");

$sql = "SELECT * FROM `foods`";
$res = $db->query($sql);
$row = $res->fetch_array();

print $row['id'];
print "<HR> $row[id], $row[name], $row[price] ";