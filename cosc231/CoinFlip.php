<!DOCTYPE html>
<!--
Created by Emmet Stanevich and Ben Kolar on 11/13
This program simulates 100 coin flips
-->

<html lang="en=US">
<head>
    <meta charset="UTF-8">
    <title>Coin Flip</title>
    <link rel="stylesheet" href="../styles/stylesheet2.css">
    <style>
        .error {color:#FF0000}
        span {font-family: Monospaced;
        color:#FFE500}
    </style>
</head>
<body>
<div class="main">
    <?php
    $flipsErr="";
    global $flips;
    $heads=0;
    echo "<h1>Coin Flipper</h1><h2>This program will flip a coin x times and display the results in a 10-column table</h2>";
    global $results;
    $results=array();
    if($_SERVER["REQUEST_METHOD"]=="GET"){
        if(empty($_GET["coins"]))$flipsErr="Please enter a number of coins to flip";
        else if($_GET["coins"]<100)$flipsErr="Too few coins";
        else if($_GET["coins"]>500)$flipsErr="Too many coins";
        else {
            $flips=test_input($_GET["coins"]);
            for($i=0;$i<$flips;$i++){
                if(round(mt_rand(0,1))==1)$results[$i]=true;
                else $results[$i]=false;
            }
        }
    }
    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    ?>
    <p><span class="error">* required field</span></p>
    <form method="get" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        <span>How many coins should we flip? (Between 100 and 500): </span><input type="number" min="100" max="500" name="coins">
        <span class="error">* <?php echo $flipsErr;?></span>
        <br>
        <input type="submit" name="submit" value="Submit">
    </form>
    <?php
    $remaining=count($results);
    $columns=10;
    $rows=ceil(count($results)/$columns);
    for($i=0;$i<$rows;$i++){
        if($remaining>=$columns){
        for($j=0;$j<$columns;$j++){
            if($results[$i+10*$j]==true)echo "<span>H</span>";
            else if($results[$i+10*$j]==false) echo "<span>T</span>";
            else echo "";
            $remaining--;
        }
        }else for($k=0;$k<count($results)%$columns;$k++){
            if($results[$i+10*$k]==true)echo "<span>H</span>";
            else if($results[$i+10*$k]==false) echo "<span>T</span>";
            else echo "";
        }echo "<br>";
    }
    ?>
</div>
</body>
</html>