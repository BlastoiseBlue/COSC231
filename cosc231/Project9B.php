<!DOCTYPE html>
<!--Reverse the String
Created by Emmet Stanevich and Joshua Troop
Created on 08 November 2018
Description: 
-->
<html lang="en-US">
<head>
	<title>Reverse_The_String</title>
	<meta charset="UTF-8">
	
</head>
<body>
	<h1>Reverse the String</h1>
	<p style="text-align:left">On the left, you will find the original sentences.<br />
		They are reversed on the right side.</p>
	<?php
		$s = array("Hello World!", "Professor Bahorski is our COSC 231 professor.",
			"This sentence is false.", "This sentence is true.", "Goodbye World!");
		for ($i=0; $i<count($s); $i++) {
			echo "<p>".$s[$i]." / ".strrev($s[$i])."</p>";
		}
	?>
</body>
</html>