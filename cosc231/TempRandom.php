<!DOCTYPE html>
<!--
Created by Emmet Stanevich and  Joshua Troop on 11/8
This program generates 5 random integers between -50 and 120 inclusive, and converts them from Fahrenheit to Celsius
-->

<html lang="en-US">
<head>
    <meta charset="UTF-8">
    <title>Fahrenheit to Celsius</title>
    <link rel="stylesheet" href="../styles/stylesheet2.css">
</head>
<body>
<div class="main">
    <?php
    echo "<h1>Fahrenheit to Celsius</h1><h2>5 random Fahrenheit temperatures between -50&deg; and 120&deg; inclusive and then converted to Celsius</h2>";
    $temps=array();
    function convert($tempIn){
        return round(floor(($tempIn-32)*(5/9)*100)/100); // Joshua's idea
    }
    for($i=0;$i<5;$i++){
        $temps[$i]=mt_rand(-50,120);
    }
    for($i=0;$i<5;$i++){
        echo "<p>Fahrenheit Temperature of ".$temps[$i]."&deg; is ".convert($temps[$i])."&deg; in Celsius</p>";
    }
    ?>
</div>
</body>
</html>