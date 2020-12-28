<?php

$handle = fopen("MyFile.txt", "r");
$data   = fread($handle, filesize("MyFile.txt") );
fclose($handle);

print $data;

