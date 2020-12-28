<?php

//Associative Array
$data = [ "name"=>"John", "Apple", "age"=>25, "weight"=>72, "Mango" ];
$data[] = "Banana";
$data["Height"] = "5Feet 11 Inch";
$data[] = "Guava";

foreach($data as $k=>$v) {
	print "<BR>Key: $k, Value: $v";
}
