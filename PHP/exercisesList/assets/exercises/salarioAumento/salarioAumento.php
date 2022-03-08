<?php
    $dep = $_POST['depId'];
    $sal = $_POST['salarioId'];
    if($dep == 1){
        $sal = ($sal+($sal*15/100));
        echo("Seu salário agora é ".$sal."");
    }else if($dep == 2){
        if($sal >= 1500 && $sal < 1750){
            $sal = ($sal+($sal*12/100));
            echo("Seu salário agora é".$sal."");
        }else if($sal >= 1750 && $sal < 2000){
            $sal = ($sal+($sal*10/100));
            echo("Seu salário agora é".$sal."");
        }else if($sal >= 2000 && $sal < 3000){
            $sal = ($sal+($sal*7/100));
            echo("Seu salário agora é".$sal."");
        }else if($sal > 3000){
            $sal = ($sal+($sal*5/100));
            echo("Seu salário agora é".$sal."");
        }else{
            echo("tá pobre em fi");
        }
    }else{
        echo("Departamento Inválido!");
    }
?>
