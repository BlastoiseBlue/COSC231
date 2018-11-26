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
    $entries=array();
    if($_SERVER["REQUEST_METHOD"]=="POST"){
        for($i=0;$i<8;$i++){
            if($_SESSION["Entries"][$i]=null||empty($_POST["entry$i"]))$entries[$i]=$default;
            else $entries[$i]=test_input($_SESSION["Entries"][$i]);
        }
    }
    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    echo "<h1>Mad Libs</h1>";
    echo "<p>I once owned a $entries[0] near lake $entries[1].".
        "I considered myself lucky, seeing as I was able to afford it despite working as a $entries[2].".
        "It isn't all that bad a job, really, aside from when my $entries[3] tells me to $entries[4] the $entries[5].".
        "I just have to keep working every $entries[6] if I want to earn that $entries[7].</p>";
    ?>
</div>
</body>
</html>
