<?php
    $pot = $_POST['potId'];
    $base = $_POST['baseId'];
    $i=1;
    $result=1;
    while($i<=$base){
        $result = $result*$pot;
        $i = $i+1;
    }
    echo("Resultado: ".$result."");
?>