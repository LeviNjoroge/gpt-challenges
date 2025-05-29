<!--
7. Create a contact form and validate the input using PHP.
-->

<?php
    //dtb setup
    require 'config.php';
    setup_dtb("php_contact_page");

    if(isset($_POST["name"])){
        //setting vars
        $name = $_POST["name"];
        $email = $_POST["email"];
        $message = $_POST["message"];

        //dtb updates
        $msq_query = "INSERT INTO messages VALUES($name, $email, $message, CURRENT_TIMESTAMP);";

        $dtb_update = mysqli_query($conn, $msq_query);
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
        <form action="" method="POST">
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