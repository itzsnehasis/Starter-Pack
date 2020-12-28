<html>
<body>
<?php
$d = 1;
$i = 1;
while($i<10000000)
	{
$i = $i * 2;
$d++;
print "<hr> day: $d, amount: $i";
}
?>
</body>
</html>