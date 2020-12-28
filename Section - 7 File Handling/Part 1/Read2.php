<?php

$handle = fopen("https://bing.com", "r");
$data = "";

while(!feof($handle)) {
	$data  = $data . fread($handle, 1024);
}

fclose($handle);

print $data;

