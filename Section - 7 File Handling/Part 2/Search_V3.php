<?php

function parseDir($folder)
{
	$handle = opendir($folder);
	while($file = readdir($handle)) {

		if($file=="." || $file=="..")
			continue;

		if(is_dir($folder."/".$file))
			parseDir($folder."/".$file);
		else
			print "<BR> $folder/$file ";

	}
	closedir($handle);
}

parseDir("D:");