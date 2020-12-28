<?php

$url = "https://songspk.mobi/browse/bollywood-albums-songs";

$html = file_get_contents($url);
$arr = explode('<figcaption>', $html);

unset($arr[0]);

foreach ($arr as $part) {
	
	//Get Movie Name
	$x = explode('">', $part);
	$y = explode('</a>', $x[1]);
	$name = $y[0];

	//Get Movie URL
	$x = explode('href="', $part);
	$y = explode('">', $x[1]);
	$url = "https://songspk.mobi".$y[0];

	print "<BR> $name - $url ";
}







