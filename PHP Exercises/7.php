<!--
7. Create a contact form and validate the input using PHP.
-->

<?php

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
</body>
</html>