<?php

function parseDir($folder)
{
	$handle = opendir($folder);
	while($file = readdir($handle)) {

		if($file=="." || $file=="..")
			continue;

		print "<BR> $file ";
	}
	closedir($handle);
}

parseDir("D:");