<?php

//Test Download a song

$url = "https://files1.mp3slash.xyz/stream/fdf1bda44b06031f98377334e8ddd651";

$handleR = fopen($url, "r");
$handleW = fopen("Gaana.MP3", "w");

while (!feof($handleR)) {
	
	$data = fread($handleR, 1024);
	fwrite($handleW, $data);
}

fclose($handleR);
fclose($handleW);