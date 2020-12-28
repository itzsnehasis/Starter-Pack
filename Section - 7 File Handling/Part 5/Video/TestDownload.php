<?php
set_time_limit(1000);
$url = "https://file-examples-com.github.io/uploads/2017/04/file_example_MP4_480_1_5MG.mp4";

$url = "https://file-examples-com.github.io/uploads/2017/04/file_example_MP4_1280_10MG.mp4";

$new_name = "MyMovie.mp4";
@mkdir("Videos");
download($url, "Videos/$new_name");

//Download
function download($from, $to) 
{
	$r = fopen($from, "r");
	$w = fopen($to,   "w");

	while(!feof($r)) {
		$data = fread($r, 1024);
		fwrite($w, $data);
	}

	fclose($r);
	fclose($w);
}

print "<CENTER><VIDEO SRC = \"Videos/$new_name\" CONTROLS></VIDEO></CENTER>";
?>