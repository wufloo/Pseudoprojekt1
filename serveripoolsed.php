
<?php

$eesnimi = "Janre";
$perekonnanimi = "Press";
$vanus = "21";
echo "$eesnimi $perekonnanimi ($vanus)";

$vowels = array('A', 'E', 'I', 'O', 'U', '�', '�', '�', '�', 'a', 'e', 'i', 'o', 'u', '�', '�', '�', '�');
if (in_array(substr($janre->eesnimi, 0, 1), $vowels)) {
    $eesnimi_algab_vokaaliga = true;
} else {
    $eesnimi_algab_vokaaliga = false;
}




?>