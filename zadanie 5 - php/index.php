<?php
    //FOR
    for($i = 0; $i < 10; $i++){
    }


    //WHILE
    $i = 0;
    while($i < 5){
        echo $i;
        $i++;
    }
    echo "<br>";


    //DO WHILE
    $i = 1;
    do{
        echo $i;
        $i++;
    }while($i < 5);
    echo "<br>";

    //FOREACH
    $tablica = [1,2,3,4,5];
    foreach($tablica as $wartosc){
        echo $wartosc;
    }
    echo "<br>";


    //FOREACH - TABLICA ASOCJACYJNA
    $owoce = [
        "a" => "jabłko",
        "b"=> "banan",
        "c"=> "gruszka",
    ];

    foreach($tablica as $klucz => $wartosc){
        echo "Klucz: ".$klucz." Wartość: ".$wartosc;
    }
    echo "<br>";

    $array = [1,2,3];
    $assoc_table = ['imie'=>'Ania', 'wiek' => 30];
    $empty_array = [];
    $array2 = array(1,2,3);

    $arrayOfNumbers = [1,2,3];
    for($i = 0; $i < count($arrayOfNumbers); $i++){
        echo $arrayOfNumbers[$i];
    }
    echo "<br>";


    //WSTAWIANIE JEDNEGO ELEMENTU
    $number = 10;
    $insertArray = [1,2,3];
    $insertArray[1] = $number;



    //WSTAWIANIE ELEMENTU DO CALEJ TABLICY
    $number = 10;
    $insertArray = [1,2,3];

    for($i = 0; $i < count($insertArray); $i++){
        $insertArray[$i] = $number;
    }
    echo "<br>";
    echo var_dump($insertArray);



    //WSTAWIANIE ELEMNTU POD DANY INDEX 
    $number = 10;
    $index = 0;
    $insertArray = [1,2,3];
    $inserArray[$index] = $number;
    echo "<br><br>";

    //ZADANIE 
    for ($i = 1; $i <= 100; $i += 2) {
    echo $i . " ";
    }
    echo "<br><br>";
    for ($i = 100; $i >= 1; $i -= 4) {
        echo $i . " ";
    }
    echo "<br><br>";
    
    $i = 1;
    while ($i <= 100) {
        echo $i . " ";
        $i += 2;
    }
    echo "<br><br>";

    $i = 100;
    while ($i >= 1) {
        echo $i . " ";
        $i -= 4;
    }
    echo "<br><br>";
    
    $i = 1;
    do {
        echo $i . " ";
        $i += 2;
    } while ($i <= 100);
    $i = 100;
    echo "<br><br>";

    do {
        echo $i . " ";
        $i -= 4;
    } while ($i >= 1);
    echo "<br><br>";
?>

