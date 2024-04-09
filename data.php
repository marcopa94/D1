<?php
$today = getdate();

$day=($today["weekday"]);
$number=($today["mday"]);
$month=($today["month"]);
$year=($today["year"]);
$letter_days=[
    "domenica", 
    "lunedì",
    "martedì",
    "mercoledì",
    "giovedì",
    "venerdì",
    "sabato",
    
];
$letter_month=[ 
    "Dicembre",
    "Gennaio", 
    "Febbraio", 
    "Marzo", 
    "Aprile", 
    "Maggio", 
    "Giugno", 
    "Luglio",
    "Agosto", 
    "Settembre", 
    "Ottobre", 
    "Novembre", 
    

];


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Date</title>
</head>
<body>
    <h1>Today is:</h1>
    <?php echo $day ." ". $number ." ". $month ." ". $year ?>
<br/>
    <?php 

    $day_ita=$letter_days[date("w")]; //giorno a numero così che possiamo utilizzarlo come indice dell'array di $letter_days
    $dat_num=date("j");
    $month_ita=$letter_month[date("n")];
    $year=date("Y");
    echo "$day_ita, $dat_num , $month_ita $year"?>
    
</body>
</html>