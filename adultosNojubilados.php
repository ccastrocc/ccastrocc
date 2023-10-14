<?php

$edad = $_GET["idade"];
If (!empty($edad)) {
    if ($edad < 18) {
        echo "Tes " . "$edad" . "eres menor de edad";
        echo "Entrada no permitida en  la web www.srcodigofuente.es/adultos-no-jubilados";
    } else {
        if ($edad > 65) {
            echo "Es maior de 65 anos, non poedes entra na web ";
        } else {
            echo "Benvido la web www.srcodigofuente.es/adultos-no-jubilados";
            }
        }
}else{
    echo "Campo idade valeiro";
}

?>