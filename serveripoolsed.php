<?php
class isik
{
    var $firstname = "Janre";
    var $lastname = "Press";
    var $age = 21;
    var $sex = "<br /> Mees";
}

$janre = new isik;

$vowels = array('A', 'E', 'I', 'O', 'U', 'Õ', 'Ä', 'Ö', 'Ü', 'a', 'e', 'i', 'o', 'u', 'õ', 'ä', 'ö', 'ü');
if (in_array(substr($janre->firstname, 0, 1), $vowels)) {
    $eesnimi_algab_vokaaliga = true;
} else {
    $eesnimi_algab_vokaaliga = false;
}

if ($eesnimi_algab_vokaaliga) {
    echo "<p>Nimi algab vokaaliga</p>";
};

echo "<p>" . $janre->firstname . " " . $janre->lastname . " (" . $janre->age . ") " . $janre->sex . "</p>";

?>