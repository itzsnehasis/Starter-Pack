<?php

showDir(".");

function showDir($dir)
{

	$h = opendir($dir);
	while($f=readdir($h)) {
		print "<BR> $f ";
	}
}
