<HTML LANG="EN">
 <BODY>
  <FORM METHOD="POST" ACTION="5_Prime.php">
	<INPUT TYPE="TEXT" NAME="num" REQUIRED PLACEHOLDER = "Enter a Number"></TD>
	<INPUT TYPE="SUBMIT">
  </FORM>

  <?php
  if( isset($_POST['num']) ) {
		$num = $_POST['num'];

		$prime = true;
		for($i=2; $i<=$num/2; $i++) {
			if($num%$i==0) {
				$prime = false;
				break;
			}
		}

		if($prime)
			print "$_POST[num] is a Prime";
		else
			print " $_POST[num] is Not a Prime";
  }
  ?>
 </BODY>
</HTML>
