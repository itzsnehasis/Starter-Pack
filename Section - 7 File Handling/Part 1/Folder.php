<?php

$handle = opendir("C:");

while($file=readdir($handle)) {
	print "<BR> $file ";
}

closedir($handle);

