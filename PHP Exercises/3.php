<!--
    3. Make a form that takes a user's name and displays a greeting.
-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Form</title>
</head>
<body>
    <form action="">
        <input type="text" name="name" id="name" placeholder="Enter name...">
        <input type="submit" value="Submit"> <br>
    </form>

    <?php
        if(isset($_GET["name"])){
            $name = $_GET["name"];
            echo "Hello {$name}";
        }
    ?>
</body>
</html>