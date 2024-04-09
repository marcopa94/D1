<?php

$squadre_serie_A = [
    "Juventus" => ["Wojciech Szczęsny", "Juan Cuadrado", "Matthijs de Ligt", "Giorgio Chiellini", "Alex Sandro", "Weston McKennie", "Rodrigo Bentancur", "Federico Chiesa", "Paulo Dybala", "Cristiano Ronaldo", "Alvaro Morata"],
    "Inter Milan" => ["Samir Handanović", "Milan Škriniar", "Stefan de Vrij", "Alessandro Bastoni", "Achraf Hakimi", "Nicolo Barella", "Marcelo Brozović", "Arturo Vidal", "Ivan Perišić", "Lautaro Martínez", "Romelu Lukaku"],
    "AC Milan" => ["Gianluigi Donnarumma", "Davide Calabria", "Simon Kjær", "Alessio Romagnoli", "Theo Hernández", "Franck Kessié", "Sandro Tonali", "Alexis Saelemaekers", "Hakan Çalhanoğlu", "Rafael Leão", "Zlatan Ibrahimović"],
    "Napoli" => ["Alex Meret", "Giovanni Di Lorenzo", "Kalidou Koulibaly", "Kostas Manolas", "Mário Rui", "Fabián Ruiz", "Tiemoué Bakayoko", "Matteo Politano", "Lorenzo Insigne", "Hirving Lozano", "Victor Osimhen"],
    "Roma" => ["Pau López", "Rick Karsdorp", "Chris Smalling", "Gianluca Mancini", "Leonardo Spinazzola", "Jordan Veretout", "Lorenzo Pellegrini", "Henrikh Mkhitaryan", "Pedro Rodríguez", "Tammy Abraham", "Stephan El Shaarawy"]
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        Squadre
    </title>
</head>
<body>
    <h1>SQUADRE SERIE A</h1>
    <ul><?php
        foreach($squadre_serie_A as $nome_squadra => $nome_giocatore) { ?>
            <li>
                <?= $nome_squadra ?>
                <ul><?php
                    foreach ($nome_giocatore as $nome_giocatore) { ?>
                        <li><?= $nome_giocatore ?></li><?php
                    } ?>
                </ul>
            </li><?php
        } ?>
    
</body>
</html>