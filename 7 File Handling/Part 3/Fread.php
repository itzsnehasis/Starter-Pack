<?php

$handle = fopen("Dummy.txt", "r");

$data = "";
while(!feof($handle)) {
	$data .= fread($handle, 1024);
}

fclose($handle);
print $data;

