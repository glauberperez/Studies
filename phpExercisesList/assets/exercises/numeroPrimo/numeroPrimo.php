<?php
    $num = $_POST['numId'];
    if($num % 2 != 0){
        echo("É número primo");
    }else{
        echo("Não é número primo");
    }
?>