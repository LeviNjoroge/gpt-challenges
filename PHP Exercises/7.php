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
        body {
            font-family: Arial, sans-serif;
            padding: 2rem;
            background-color: #f9f9f9;
        }

        .contact_form, .received_messages {
            background-color: #fff;
            padding: 1.5rem;
            margin-bottom: 2rem;
            border-radius: 8px;
            box-shadow: 0 2px 6px rgba(0, 0, 0, 0.1);
            max-width: 500px;
        }

        h2 {
            margin-bottom: 1rem;
        }

        label {
            display: block;
            margin-top: 1rem;
        }

        input[type="text"],
        input[type="email"],
        textarea {
            width: 100%;
            padding: 0.5rem;
            margin-top: 0.25rem;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        textarea {
            resize: vertical;
            min-height: 100px;
        }

        input[type="submit"] {
            margin-top: 1rem;
            padding: 0.6rem 1.2rem;
            background-color: #007BFF;
            border: none;
            color: white;
            border-radius: 4px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #0056b3;
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
        <?php
            foreach ($q_results as $key => $value) {
                echo "{$key} is {$value}";
            }
        ?>
    </div>

</body>
</html>