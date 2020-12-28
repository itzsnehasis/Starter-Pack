<?php

$emp = [
         ["name"=>"Sam", "desig"=>"Programmer"],
         ["name"=>"Sarah", "desig"=>"HR"],
         ["name"=>"Tom", "desig"=>"Designer"]
       ];

foreach($emp as $key=>$val) {
	
	foreach($val as $k=>$v) {
		print "$k=$v, ";
	}

	print "<hr>";
}