<?php
function age($annee) {
    $annee_actuelle = date("Y");
    $age = $annee_actuelle - $annee;
    if($age >= 18){
    echo "Vous pouvez passer";
    } else {
    echo "Rentrez chez vous!";
    }
}


echo "Entrez votre année de naissance : ";
$annee = (float)fgets(STDIN);

age($annee);
?>