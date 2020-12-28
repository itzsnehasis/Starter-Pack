<?php

$data = "Hello World";

$handle = fopen("MyFile.txt", "w");
fwrite($handle, $data);
fclose($handle);

?>
Done