<?php

$str = "A brown fox jumps over a lazy dog";

$arr = explode(" ", $str);

foreach ($arr as $key => $value) {
	print "<BR> $key- $value ";
}

