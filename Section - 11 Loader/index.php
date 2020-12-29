<!DOCTYPE html>
<html>
<head>
	<title>Loading</title>
</head>
<body onload="clear();">

<script type="text/javascript">
	function clear()
	{
		document.getElementById('loader').style.display = "none";
	}
</script>
	<div id = "loader" style = "width: 100%; height: 100%; z-index: 100; position: absolute;">
		<center><img src = "animation.gif"></center></div>

	<center>
		<h1>Welcome to our site</h1>	
	</center>
	<IMG SRC = "slow.php" WIDTH = "100%">

</body>
</html>