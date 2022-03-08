<?php
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $num3 = $_POST['num3'];
    
    //Maior

    if($num1 > $num2 && $num1 > $num3){
        echo("".$num1." é o maior");
    }else if($num2 > $num1 && $num2 > $num3){
        echo("".$num2." é o maior");
    }else if($num3 > $num1 && $num3 > $num1){
        echo("".$num3." é o maior");
    }

    echo("<br>");

    //Menor

    if($num1 < $num2 && $num1 < $num3){
        echo("".$num1." é o menor");
    }if($num2 < $num1 && $num2 < $num3){
        echo("".$num2." é o menor");
    } if($num3 < $num1 && $num3 < $num1){
        echo("".$num3." é o menor");
    }
?>