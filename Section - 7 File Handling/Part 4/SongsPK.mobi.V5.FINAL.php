<?php
set_time_limit(60*60*10); //10 Hours running time LIMIT

$url = "https://songspk.mobi/browse/bollywood-albums-songs";

$html = file_get_contents($url);
$arr = explode('<figcaption>', $html);

unset($arr[0]);

//If you want to stop the program, delete this file
touch("STOP_ME.txt"); //Creates a blank file STOP_ME.txt

@mkdir("new_songs");

foreach ($arr as $part) {
	
	//Get Movie Name
	$x = explode('">', $part);
	$y = explode('</a>', $x[1]);
	$name = trim($y[0]);

	//Get Movie URL
	$x = explode('href="', $part);
	$y = explode('">', $x[1]);
	$url = "https://songspk.mobi".$y[0];

	print "<HR> <B>$name</B> - $url <BR> ";

	processMovie($name, $url);
	
}

function processMovie($movie_name, $movie_url)
{

	@mkdir("new_songs/".$movie_name);

	$html = file_get_contents($movie_url);
	$arr = explode('<div class="col-md-7 col-xs-10 col-text">', $html);
	unset($arr[0]);

	foreach ($arr as $part) {

		//Get Song Name
		$x = explode('">', $part);
		$y = explode('</a>', $x[1]);
		$song_name = trim($y[0]);

		//Get Song URL
		$x = explode('<div class="col-md-4 col-xs-5 col-download">', $part);
		$y = explode('href="', $x[1]);
		$z = explode('"', $y[1]);
		$song_url = $z[0];

		print "<BR> $song_name, $song_url ";

		downloadSong($movie_name, $song_name, $song_url);
	}

}

function downloadSong($movie_name, $song_name, $song_url)
{

	$new_name = "new_songs/$movie_name/$song_name".".MP3";

	if(filesize($new_name )>1000)
		return;

	$handleR = fopen($song_url, "r");
	$handleW = fopen($new_name, "w");
	while(!feof($handleR)) {

		$data = fread($handleR, 1024);
		fwrite($handleW, $data);

		if(!file_exists("STOP_ME.txt"))
			die("<H1>Execution Stopped, STOP_ME.txt Deleted </H1>");
	}

	fclose($handleR);
	fclose($handleW);
}





