<?php
function Reduc($prix) {
    if ($prix >= 100) {
        $reduction = $prix * 0.10;
        $nouveau_prix = $prix - $reduction;
        echo "Vous avez droit à une réduction de 10%, Le prix est : $nouveau_prix";
    } else {
        echo "Pas de réduction. Le prix reste le même : $prix";
    }
}


echo "Entrez le prix : ";
$prix = (float)fgets(STDIN);

Reduc($prix);
?>