<?php

$title = $_POST['title'];

$file = $_FILES['pic']['name'];
print "<HR>You are uploading the file $file."; 
print "<HR>The Size is: ".$_FILES['pic']['size']; 
print "<HR>The Type is: ".$_FILES['pic']['type']; 
print "<HR>The Tmp File is: ".$_FILES['pic']['tmp_name']; 

copy($_FILES['pic']['tmp_name'], $_FILES['pic']['name']);