<!--
    5. Build a simple login system (use hardcoded username/password).
-->

<?php
    if(isset($_POST["username"])&&isset($_POST["password"])){
        $username = $_POST["username"];
        $password = $_POST["password"];
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Login System</title>
</head>
<body>
    <form action="" method="POST">
        <input type="text" name="username" id="username" placeholder="Username..."> <br>
        <input type="password" name="password" id="password" placeholder="Password..."> <br>
        <input type="submit" value="Submit!"> <br>
    </form>
</body>
</html>