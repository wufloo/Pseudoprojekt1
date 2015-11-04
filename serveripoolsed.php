
<?php

$eesnimi = "Janre";
$perekonnanimi = "Press";
$vanus = "21";
echo "$eesnimi $perekonnanimi ($vanus)";

$janre = new isik;

$vowels = array('A', 'E', 'I', 'O', 'U', 'Õ', 'Ä', 'Ö', 'Ü', 'a', 'e', 'i', 'o', 'u', 'õ', 'ä', 'ö', 'ü');
if (in_array(substr($janre->eesnimi, 0, 1), $vowels)) {
    $eesnimi_algab_vokaaliga = true;
} else {
    $eesnimi_algab_vokaaliga = false;
}
echo "<br>";
class isik
{
    var $eesnimi = "Janre";
    var $perekonnanimi = "Press";
    var $vanus = 21;

}

$janre = new isik;
echo "" . $janre->eesnimi . " " . $janre->perekonnanimi . " (" . $janre->vanus . ") ";




?>