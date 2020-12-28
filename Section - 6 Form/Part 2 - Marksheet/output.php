<center>
<h1>Rank Sheet</h1>
<?php

$names = $_POST['fullname'];
$marks = $_POST['marks'];

//Sorting
for($i=0; $i<count($marks); $i++) {
	for($j=$i+1; $j<count($marks); $j++) {
		if($marks[$i]<$marks[$j]) {
			
			$tmp       = $marks[$i];
			$marks[$i] = $marks[$j];
			$marks[$j] = $tmp;
			
			$tmp       = $names[$i];
			$names[$i] = $names[$j];
			$names[$j] = $tmp;
		}
	}
}

print '	
<table cellpadding = 5 bgcolor = silver>
	<tr>
		<td>Rank</td>
		<td>Name</td>
		<td>Marks</td>
	</tr>';

for($i=0; $i<count($names); $i++) {
	$rank = $i+1;
	print "
	<tr bgcolor = white>
		<td>$rank</td>
		<td>$names[$i]</td>
		<td>$marks[$i]</td>
	</tr>";
}

print "</table>";
?>
</center>