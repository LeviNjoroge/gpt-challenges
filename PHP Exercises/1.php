<!--
    1. Write a PHP script to find the largest of three numbers.
-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Largest numbers</title>
</head>
<body>
    <form action="">
        <input type="number" name="num1" id="num1" placeholder="Enter the first number..."> <br>
        <input type="number" name="num2" id="num2" placeholder="Enter the second number..."> <br>
        <input type="number" name="num3" id="num3" placeholder="Enter the third number..."> <br>
        <input type="submit" value="Find the Largest!"> <br>
    </form>

    <?php
        if(isset($_GET["num1"])&&isset($_GET["num2"])&&isset($_GET["num3"])){
            $num1 = $_GET["num1"];
            $num2 = $_GET["num2"];
            $num3 = $_GET["num3"];

            $max = max($num1, $num2, $num3);

            echo "The maximum number is: {$max}";
        }
    ?>
</body>
</html>