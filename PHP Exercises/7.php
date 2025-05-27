<!--
7. Create a contact form and validate the input using PHP.
-->

<?php
    
    //db config
    $host = getenv("HOST");
    $user = getenv("USER");
    $password = getenv("PASSWORD");

    // $host = $_ENV["HOST"];
    // $user = $_ENV["USER"];
    // $password = $_ENV["PASSWORD"];
    $database = "php_contact_page";

    echo "{$host} <br>{$user} {$password} {$database}";

    // $conn = mysqli_connect($host, $user, $password, $database);
    // if($conn){
    //     echo "database connected successfully!";
    // }

    foreach (getenv() as $key => $value) {
        echo "<b>{$key} </b> {$value}<br>";
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Form</title>
</head>
<body>
    <div class="contact_form">
        <h2>Message Us</h2>
        <form action="">
            <label for="name">Name: </label>
            <input type="text" name="name" id="name"> <br>
            <label for="email">Email: </label>
            <input type="email" name="email" id="email"> <br>
            <textarea name="message" id="message" placeholder="Enter your message here"></textarea> <br>
            <input type="submit" value="Send">
        </form>
    </div>
    <div class="received_messages">
        <h2>Received Messages</h2>

    </div>
</body>
</html>