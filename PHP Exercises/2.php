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
    };
        
?>
