<center>
<H1>Word Meanings</H1>
<FORM METHOD="GET" ACTION="">
	<INPUT TYPE="TEXT" NAME="word" PLACEHOLDER = "Find Meanings" REQUIRED>
	<INPUT TYPE="SUBMIT" VALUE = "Search">
</FORM>
</center>
<HR>
<?php

if( isset($_GET['word']) ) {
	$word = trim(ucfirst(strtolower($_GET['word'])));
 
	$url = "https://dictionary.cambridge.org/dictionary/english/"
	                                           .strtolower($word);
	$html = file_get_contents($url);
	//print $html;

	$meaning = getMeaning($html);
	print "The Meaning of <B>$word</B>: $meaning ";
}

function getMeaning($html)
{
	$x = explode ('definition:', $html);
	$y = @explode ('Learn more', $x[1]);
	if($y[0])
		$meaning = $y[0];
	else
		$meaning = "Yeh Kya Likha aapne?";
	return $meaning;
}
?>