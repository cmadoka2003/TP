<?php
function bac($maths, $anglais, $français, $histoiregeo, $physique) {
    $resultat = ($maths + $anglais + $français + $histoiregeo + $physique)/5;
    if ($resultat > 16) {
        echo "Mention Très Bien";
    } else if ($resultat >= 14 && $resultat <= 15.99) {
        echo "Mention Bien";
    } else if ($resultat >= 12 && $resultat <= 13.99) {
        echo "Mention Assez Bien";
    } else if ($resultat >= 10 && $resultat <= 11.99) {
        echo "Pas de Mention";
    } else {
        echo "Tu n'as pas le bac";
    }
	
}

echo "Entrez votre note de maths : ";
$maths = (float)fgets(STDIN);

echo "Entrez votre note de français : ";
$français = (float)fgets(STDIN);

echo "Entrez votre note d'histoire-géo : ";
$histoiregeo = (float)fgets(STDIN);

echo "Entrez votre anglais: ";
$anglais = (float)fgets(STDIN);

echo "Entrez votre physique : ";
$physique = (float)fgets(STDIN);

bac($maths, $anglais, $français, $histoiregeo, $physique);
?>
