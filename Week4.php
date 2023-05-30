<?php
//Deel 1


for ($i = 1; $i <= 50; $i++) {
    echo $i . " ";
}

echo '<br>';

//Deel 2

$klasgenoten =["NaamEen","NaamTwee","NaamDrie","NaamVier","NaamVijf","NaamZes","NaamZeven","NaamAcht","NaamNegen","NaamTien"];

echo $klasgenoten[0];
echo '<br>';
echo $klasgenoten[1];
echo '<br>';
echo $klasgenoten[2];
echo '<br>';
echo $klasgenoten[3];
echo '<br>';
echo $klasgenoten[4];
echo '<br>';
echo $klasgenoten[5];
echo '<br>';
echo $klasgenoten[6];
echo '<br>';
echo $klasgenoten[7];
echo '<br>';
echo $klasgenoten[8];
echo '<br>';
echo $klasgenoten[9];
echo '<br>';


//Deel 3

$maanden = ['Januari', 'Februari', 'Maart', 'April', 'Mei', 'Juni', 'Juli', 'Augustus', 'September', 'Oktober', 'November', 'December']; 

echo 'Maand 1 is '.$maanden[0].'.<br />';
echo 'Maand 2 is '.$maanden[1].'.<br />';
echo 'Maand 3 is '.$maanden[2].'.<br />';
echo 'Maand 4 is '.$maanden[3].'.<br />';
echo 'Maand 5 is '.$maanden[4].'.<br />';
echo 'Maand 6 is '.$maanden[5].'.<br />';
echo 'Maand 7 is '.$maanden[6].'.<br />';
echo 'Maand 8 is '.$maanden[7].'.<br />';
echo 'Maand 9 is '.$maanden[8].'.<br />';
echo 'Maand 10 is '.$maanden[9].'.<br />';
echo 'Maand 11 is '.$maanden[10].'.<br />';
echo 'Maand 12 is '.$maanden[11].'.<br />';




//Deel 4

foreach ($maanden as $maand) {
    echo $maand . " " ;
}

?>


