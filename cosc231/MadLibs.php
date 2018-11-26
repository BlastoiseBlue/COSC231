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
    if($_SERVER["REQUEST_METHOD"]=="POST"){
        for($i=0;$i<8;$i++){
            if($_SESSION["Entries"][$i]=null||empty($_POST["entry$i"]))$_SESSION["Entries"][$i]=$default;
            else $_SESSION["Entries"][$i]=test_input($_POST["entry$i"]);
        }
    }
    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    echo "<h1>Mad Libs</h1>";
    echo "<p>I once owned a {$_SESSION["Entries"][0]} near lake {$_SESSION["Entries"][1]}. ".
        "I considered myself lucky, seeing as I was able to afford it despite working as a {$_SESSION["Entries"][2]}. ".
        "It isn't all that bad a job, really, aside from when my {$_SESSION["Entries"][3]} tells me to {$_SESSION["Entries"][4]} the {$_SESSION["Entries"][5]}. ".
        "I just have to keep working every {$_SESSION["Entries"][6]} if I want to earn that {$_SESSION["Entries"][7]}.</p>";
    ?>
</div>
</body>
</html>
