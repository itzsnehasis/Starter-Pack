<?php

$data = "\nHello World";

$handle = fopen("MyFile.txt", "a");
fwrite($handle, $data);
fclose($handle);

?>
Done