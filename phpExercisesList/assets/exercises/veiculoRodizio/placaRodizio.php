<?php
    $plac = $_POST['placaId'];
    $ultDigito = $plac % 10;
    echo("
        Final da placa: ".$ultDigito." <br>
        Dia do rodízio:
        ");
    if($ultDigito == 1 | $ultDigito == 2){
        echo("Segunda");
    }else if($ultDigito == 3 | $ultDigito == 4){
        echo("Terça");
    }else if($ultDigito == 5 | $ultDigito == 6){
        echo("Quarta");
    }else if($ultDigito == 7 | $ultDigito == 8){
        echo("Quinta");
    }else if($ultDigito == 9 | $ultDigito == 0){
        echo("Sexta");
    }
?>


