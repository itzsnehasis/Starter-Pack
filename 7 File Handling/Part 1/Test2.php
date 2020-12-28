<BASE HREF = "https://google.com">
<?php

$handle = fopen("https://google.com", "r");
$data = "";

while(!feof($handle)) {

	$data  = $data . fread($handle, 1024);

}

fclose($handle);

print $data;

