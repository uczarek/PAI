<?php
    echo "testujemy";
    $zmienna = 5;

    if($zmienna > 4){
        echo "zmienna wieksza od 4";
    }else if($zmienna == 5){
        echo "zmienna rowna 5";
    }else{
        echo "inny wynik";
    }



    $kolor = "red";

    switch ($kolor) {
        case "red":
            echo "czerwony";
            break;
        case "blue":
            echo "niebieski";
            break;
        case "yellow":
            echo "zolty";
            break;
        default:
                echo "kolor nierozpoznany";
            break;
    }

    //ZADANIE 1
    $a = 1;
    $b = -5;
    $c = 6;

    $delta = pow($b, 2)-(4*$a*$c);
    $x0 = -$b/(2*$a);
    $x1 = (-$b+sqrt($delta))/(2*$a);
    $x2 = (-$b-sqrt($delta))/(2*$a);


    if($delta > 0){
        echo "dwa miejsca zerowe".$x1.", ".$x2;
    }else if($delta == 0){
        echo "jedno miejsce zerowe".$x0;
    }else{
        echo "brak miejsc zerowych";
    }



?>