<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>YOUTUBE</title>
    </head>
    <body>
        <?php

        function inserisciVideo ($listaVideo, $larPerc, $altPx) {
            echo "<h2>" . $listaVideo["nome"] . "</h2>";
            echo "<iframe style='width: " . $larPerc . "%; height: " . $altPx . "px;' src='https://www.youtube.com/embed/" . $listaVideo['idVideo']  . "' frameborder='0' allowfullscreen></iframe>";
        }

        $video1 = array("nome" => "Fiorentina 2 - 1 Milan", "idVideo" => "ZJk8ox1L29M&t");
        $video2 = array("nome" => "Fiorentina 2 - 1 Lazio", "idVideo" => "uwFTzai5a3Q");
        $video3 = array("nome" => "Atalanta 3 - 2 Fiorentina", "idVideo" => "xPNtoGeu-e4");
        $listaVideo = array($video1, $video2, $video3);

        $larghezza = 50;
        $altezza = 250;

        for ($i = 0; $i < count($listaVideo); $i++) {
            inserisciVideo ($listaVideo[$i], $larghezza, $altezza);
            $larghezza += 25;
            $altezza += 125;
        }

        ?>
        
    </body>
</html>