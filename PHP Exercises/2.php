<!--
    2. Create an associative array of 5 countries and their capitals, and print them.
-->

<?php
    $capitals = array(
        "Kenya"=>"Nairobi", 
        "Uganda"=>"Kampala",
        "United Kingdom"=>"London",
        "United States"=>"Washington DC",
        "Italy"=>"Rome"
    );

    foreach($capitals as $country => $city) {
        echo "The capital city of {$country} is {$city} <br>";
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arrays</title>
</head>
<body>
    
</body>
</html>