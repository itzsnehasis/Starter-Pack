<?php
set_time_limit(3600);
?>
<center>
	<form method="get">
		<input type="text" name="keyword" placeholder = "file name/extension">
		<input type="submit" value = " Search ">
	</form>
</center>
<HR>

<?php

if(isset($_GET['keyword'])){
	 parseDir("C:");
}

function parseDir($folder)
{
	$handle = @opendir($folder);
	if($handle)
	{
		while($file = readdir($handle)) {

			if($file=="." || $file=="..")
				continue;

			if(is_dir($folder."/".$file))
				parseDir($folder."/".$file);
			else {

				if(stripos($file, $_GET['keyword']) !== false)
					print "<BR> <a href = \"$folder/$file\" target = _blank>$folder/$file</a>";
			}
		}
	}
	@closedir($handle);
}

?>