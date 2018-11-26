<!DOCTYPE html>
<!--
Created by Emmet Stanevich on 11/26
This program will take the entries from MadLibsEntry and fir them into a Mad Lib
-->
<html lang="en-US">
<head>
    <meta charset="UTF-8">
    <title>Mad Libs</title>
    <link rel="stylesheet" href="../styles/stylesheet3.css">
</head>
<body>
<div class="main">
    <?php
    $default="_____";
    if($_SESSION["Entries"]=null)$_SESSION["Entries"]=array();
    $entries=array();
    for($i=0;$i<8;$i++){
        if($_SESSION["Entries"][$i]=null)$_SESSION["Entries"][$i]=$default;
        $entries[$i]=$_SESSION["Entries"][$i];
    }
    echo "<h1>Mad Libs</h1><h2>Please fill out the forms with something fitting</h2>";
    echo "<p>I once owned a $entries[0] near lake $entries[1]. I considered myself lucky, 
seeing as I was able to afford it despite working as a $entries[2].
It isn't all that bad a job, really, aside from when my $entries[3] tells me to $entries[4] the $entries[5]"
    ?>
</div>
</body>
</html>
