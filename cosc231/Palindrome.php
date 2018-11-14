<!DOCTYPE html>
<!--
Created on 11/14 by Emmet Stanevich and Ben Kolar on 11/14
This program accepts strings, and then shows whether each one is a palindrome
-->

<html lang="en-US">
<head>
    <meta charset="UTF-8">
    <title>Palindrome</title>
    <link rel="stylesheet" href="../styles/stylesheet3.css">
</head>
<body>
<div class="main">
    <?php
    $stringsErr="";
    global $strings;
    $strings=array();
    echo "<h1>Palindrome Detector</h1><h2>This program will accept strings and tell you if they are palindromes</h2>";
    if($_SERVER["REQUEST_METHOD"]=="POST"){
        if(empty($_POST["input"]))$stringsErr="Please enter a string";
        else{
            array_push($strings,test_input(($_POST["input"])));
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
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" autocomplete="off">
        <span>Please enter a word or phrase, case and spaces will be ignored: </span><input type="text" name="input">
        <span class="error">* <?php echo $stringsErr;?></span>
        <br>
        <input type="submit" name="submit" value="Submit">
    </form>
    <?php
    array_walk($strings,"compare");
    function compare($value){
        echo "<span>".$value." is ";
        $placeholder=implode("",explode(" ,.!?",$value));
        if($placeholder==strcasecmp($placeholder,strrev($placeholder)))echo "a palindrome!</span>";
        else echo "not a palindrome!</span>";
    }
    ?>
</div>
</body>
</html>