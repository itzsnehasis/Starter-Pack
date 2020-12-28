<?php

//Associative Array

$data = [ "name"=>"John", "age"=>25, "weight"=>72 ];

foreach($data as $k=>$v) {
	print "<BR>Key: $k, Value: $v";
}

print "<HR>";
foreach($data as $val) 
	print "<BR> $val";