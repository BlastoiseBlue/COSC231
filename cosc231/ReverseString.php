<!DOCTYPE html>
<!--
Created by Emmet Stanevich and  Joshua Troop on 11/8
This program will take an array of 5 strings and display them along with their reverses
-->

<html lang="en-US">
<head>
    <meta charset="UTF-8">
    <title>Reverse The String</title>
    <link rel="stylesheet" href="../styles/stylesheet2.css">
    <style>
        p{
            text-align: center;
        }
    </style>
</head>
<body>
<div class="main">
    <h1>Reverse The String</h1>
    <h2>On the left you will find the original sentences.<br>
    They are reversed on the right side.</h2>
    <?php
    $s=array("Hello World","Professor Bahorski is our COSC231 professor","This sentence is false","This sentence is true","Goodbye World"); // An array of strings
    for($i=0;$i<count($s);$i++){
        echo "<p>".$s[$i]." / ".strrev($s[$i])."</p>";
    }
    ?>
</div>
</body>
</html>