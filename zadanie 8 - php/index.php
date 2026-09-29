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

?>