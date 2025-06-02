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
        $msq_query = "INSERT INTO messages VALUES('$name', '$email', '$message', CURRENT_TIMESTAMP);";

        $dtb_update = mysqli_query($conn, $msq_query);

        $results_query = "SELECT * FROM messages";

        $q_results = mysqli_query($conn, $results_query);
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Form</title>
<style>
    * {
        box-sizing: border-box;
    }

    body {
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        margin: 0;
        padding: 2rem;
        background: linear-gradient(to right, #f0f4f8, #e0eafc);
        display: flex;
        flex-direction: column;
        align-items: center;
    }

    h2 {
        margin-bottom: 1rem;
        color: #333;
    }

    .contact_form, .received_messages {
        background-color: #ffffff;
        padding: 2rem;
        margin-bottom: 2rem;
        border-radius: 12px;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.08);
        width: 100%;
        max-width: 500px;
        transition: all 0.3s ease;
    }

    label {
        display: block;
        margin-top: 1rem;
        font-weight: 500;
        color: #444;
    }

    input[type="text"],
    input[type="email"],
    textarea {
        width: 100%;
        padding: 0.7rem;
        margin-top: 0.3rem;
        border: 1px solid #ccc;
        border-radius: 6px;
        font-size: 1rem;
        transition: border-color 0.2s;
    }

    input:focus,
    textarea:focus {
        border-color: #007bff;
        outline: none;
    }

    textarea {
        resize: vertical;
        min-height: 120px;
    }

    input[type="submit"] {
        margin-top: 1.5rem;
        padding: 0.7rem 1.5rem;
        background-color: #007bff;
        border: none;
        color: #fff;
        font-weight: bold;
        border-radius: 6px;
        cursor: pointer;
        transition: background-color 0.3s ease;
    }

    input[type="submit"]:hover {
        background-color: #0056b3;
    }

    .received_messages ul {
        list-style-type: none;
        padding: 0;
    }

    .received_messages li {
        background-color: #f8f9fa;
        border-left: 4px solid #007bff;
        margin-bottom: 1rem;
        padding: 1rem;
        border-radius: 6px;
    }

    .received_messages li:hover {
        background-color: #eef3f7;
    }

    .received_messages li br:first-of-type {
        display: none;
    }
</style>

</head>
<body>
    <div class="contact_form">
        <h2>Message Us</h2>
        <form action="" method="POST">
            <label for="name">Name:</label>
            <input type="text" name="name" id="name">

            <label for="email">Email:</label>
            <input type="email" name="email" id="email">

            <label for="message">Message:</label>
            <textarea name="message" id="message" placeholder="Enter your message here"></textarea>

            <input type="submit" value="Send">
        </form>
    </div>

    <div class="received_messages">
        <h2>Received Messages</h2>
        <ul>
            <?php
                if(mysqli_num_rows($q_results)>0){
                    while($comment = mysqli_fetch_assoc($q_results)){
                        echo "<li>";
                        echo $comment["TIME"];
                        echo "<br>".$comment["EMAIL"]."<br>".$comment["NAME"]."<br>".$comment["MESSAGE"];
                        echo "</li> <br>";                        
                    }
                }
            ?>
        </ul>
    </div>

</body>
</html>