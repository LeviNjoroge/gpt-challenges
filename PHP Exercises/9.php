<!--
    9. Upload an image and save its name in a database.
-->

<?php
    //dtb connection
    require "config.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Image Saving</title>
</head>
<body>
    <form action="">
        <label for="img">Save your image...</label> <br>
        <input type="file" name="img" id="img">
        <input type="submit" value="Save!"> <br>
    </form>
</body>
</html>