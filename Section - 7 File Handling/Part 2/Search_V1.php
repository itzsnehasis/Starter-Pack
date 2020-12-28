<?php

$folder = "C:";

$handle = opendir($folder);
while($file = readdir($handle)) {

	if($file=="." || $file=="..")
		continue;

	print "<BR> $file ";
}
closedir($handle);

