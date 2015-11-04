
<?php

$eesnimi = "Janre";
$perekonnanimi = "Press";
$vanus = "21";
echo "$eesnimi $perekonnanimi ($vanus)";

$janre = new isik;
// 19.ylesanne//

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
    var $sugu = "mees";

}

$janre = new isik;
echo "" . $janre->eesnimi . " " . $janre->perekonnanimi . " (" . $janre->vanus . ") " . $janre->sugu . " ";

if ($eesnimi_algab_vokaaliga) {
    echo "<p>Nimi algab vokaaliga</p>";
};

//20.ylesanne
echo "<br>";
$a = 1.23;
$b = 2.34;
$float_sum= $a + $b;
echo " $float_sum ";

// 21.ylesanne
echo $_GET['koer'];

?>