<?php
session_start();
?>
<!DOCTYPE html>
<!--
Created by Emmet Stanevich on 11/26
This program will take 8 strings via forms and fit them into a Mad Lib on a separate page
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
    $_SESSION["Entries"]=array();
    echo "<h1>Mad Libs</h1><h2>Please fill out the forms with something fitting</h2>";
    $categories=array("Residence","Name","Profession","Superior","Task","Object","Time of day","Reward");
    ?>
    <form method="post" action="MadLibs.php">
        <table class="shop">
            <tr><th>Prompt</th><th>Input</th></tr>
            <?php
            for($i=0;$i<8;$i++){
                echo "<tr><td>"."$categories[$i]".":</td><td><input type='text' name='entry".$i."' autocomplete='off' required></td>";
            }
            ?>
        </table>
        <input type="submit" name="submit" value="Submit">
    </form>
</div>
</body>
</html>