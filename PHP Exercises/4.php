<!--
    4. Write a program that reverses a string.
-->

<?php
    if(isset($_GET["str"])){
        $str = $_GET["str"];
        $reversed_str = strrev($str);
        echo "{$str} revered is {$reversed_str}";
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>String Reversal</title>
</head>
<body>
    <form action="">
        <label for="str">Enter a string to be reversed...</label> <br>
        <input type="text" name="str" id="str"> 
        <input type="submit" value="Submit!">
    </form>
</body>
</html>