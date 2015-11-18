<?php
$firstname = "Janre";
$lastname = "Press";
$age = 21;

$person = array(
    "firstname" => "Janre",
    "lastname" => "Press",
    "age" => "21"
);

$eesnimi_algab_vokaaliga = false;

echo $firstname . " " . $lastname . " ($age)";
echo "<p>" . $person['firstname'] . " " . $person['lastname'] . " (" . $person['age'] . ")</p>";

?>