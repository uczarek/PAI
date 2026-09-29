<?php 
//ZADANIE 15
    for($i = 0; $i <= 1000; $i++){
        if($i % 3 == 0 && $i % 7 == 0){
            echo $i . " ";
        }
    }
    echo "<br><br>";


//ZADANIE 16
for($i = 0; $i < 100; $i++){
    if($i % 3 != 0){
        echo $i . " ";
    }
}
echo "<br><br>";



//ZADANIE 17
$liczba = 12;
$licznik = 0;
$i = $liczba;

while($licznik < 20){
    if($i % 3 == 0){
        echo $i . " ";
        $licznik++;
    }
    $i++;
}
echo "<br><br>";


//ZADANIE 19
    $arr = [1,4,3,6,8,9,2];
    $max = $arr[0];

    foreach($arr as $liczba){
        if($liczba > $max){
                $max = $liczba;
        }
    }
    echo "[" . "1, 4, 3, 6, 8, 9, 2] max z tablicy: " . $max; 
    echo "<br><br>";



    //ZADANIE 1 (wyświetl szachowince)
    for($i = 0; $i < 8; $i++){
        for($j = 0; $j < 8; $j++){
            if(($i + $j) % 2 == 0){
                echo "X ";
            }else{
                echo "O ";
            }
        }
        echo "<br>";
    }
    echo "<br>";


    
    //ZADANIE 2 (wyswietl tavlicze mnozenia)
    for($i = 1; $i <= 10; $i++){
        for($j = 1; $j <= 10; $j++){
            echo $i * $j . " ";
        }
        echo "<br>";
    }
?>