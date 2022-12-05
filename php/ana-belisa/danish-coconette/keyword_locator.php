<?php 
function guide() {
    $weather = array("Alaska"=>"Tundra Wildlife", "Fiji"=>"tropical cyclones", "Stonehenge"=>"deteriorating stones", "The Amazon"=>"tropical jungle");
    $location = array("Alaska"=>"Western USA", "Fiji" =>"South Pacific", "Stonehenge"=>"London", "The Amazon"=>"Colombia");
    // $turism = array("Machu Picchu"=>"mountain", "Eiffel Tower"=>"City", "Statue of Liberty"=>"New York", "Angkor Wat"=>"Cambodia")


switch("weather") {
    case "weather":
        echo array_search("Tundra Wildlife", $weather);
    break;
    case "location":
        echo array_search("Western USA", $location);
    break;        
 }
}

guide();
?>