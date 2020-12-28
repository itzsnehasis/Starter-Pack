<?php

showDir("/");

function showDir($dir)
{

	$h = opendir($dir);
	while($f=readdir($h)) {

		if($f=="." || $f=="..")
			continue;

		if(is_dir("$dir/$f"))
			showDir("$dir/$f");
		else
			print "<BR> $dir/$f ";
	}
}
