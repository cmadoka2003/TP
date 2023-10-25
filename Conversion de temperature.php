<?php
function bac($celsius) {
    $fahrenheit = ($celsius * 1.8) + 32;
    echo "la conversion de la température en fahrenheit est : $fahrenheit °F";
	
}

echo "Entrez la température en Celius: ";
$celsius = (float)fgets(STDIN);


T($celsius);
?>
